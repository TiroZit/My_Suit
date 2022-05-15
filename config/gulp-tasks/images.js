import squoosh from 'gulp-squoosh'
import path from 'path'

export const images = () => {
  return app.gulp
    .src(app.path.src.images)
    .pipe(
      app.plugins.plumber(
        app.plugins.notify.onError({
          title: 'IMAGES',
          message: 'Error: <%= error.message %>',
        })
      )
    )
    .pipe(app.plugins.newer(app.path.build.images))
    .pipe(
      app.plugins.if(
        app.isWebP,
        squoosh(({ filePath }) => ({
          encodeOptions: {
            webp: 'auto',
            avif: 'auto',
            ...(path.extname(filePath) === '.png'
              ? { oxipng: 'auto' }
              : { mozjpeg: 'auto' }),
          },
        }))
      )
    )
    .pipe(app.plugins.if(app.isWebP, app.gulp.dest(app.path.build.images)))
    .pipe(app.gulp.src(app.path.src.svg))
    .pipe(app.gulp.dest(app.path.build.images))
}
