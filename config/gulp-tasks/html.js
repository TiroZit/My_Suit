import versionNumber from "gulp-version-number";
import htmlmin from 'gulp-htmlmin';

export const html = () => {
	return app.gulp.src(`${app.path.build.html}*.html`)
		.pipe(app.plugins.plumber(
			app.plugins.notify.onError({
				title: "HTML",
				message: "Error: <%= error.message %>"
			}))
		)
		.pipe(versionNumber({
			'value': '%DT%',
			'append': {
				'key': '_v',
				'cover': 0,
				'to': ['css', 'js', 'img']
			}
		}))
		.pipe(
      app.plugins.if(
        app.isBuild,
        htmlmin({
          includeAutoGeneratedTags: true,
          removeAttributeQuotes: false,
          removeComments: true,
          removeRedundantAttributes: true,
          removeScriptTypeAttributes: true,
          removeStyleLinkTypeAttributes: true,
          sortClassName: false,
          useShortDoctype: true,
          collapseWhitespace: true
        })
      )
    )
		.pipe(app.gulp.dest(app.path.build.html));
}