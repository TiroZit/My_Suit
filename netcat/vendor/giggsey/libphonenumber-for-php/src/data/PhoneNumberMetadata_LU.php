<?php
/**
 * This file has been @generated by a phing task by {@link BuildMetadataPHPFromXml}.
 * See [README.md](README.md#generating-data) for more information.
 *
 * Pull requests changing data in these files will not be accepted. See the
 * [FAQ in the README](README.md#problems-with-invalid-numbers] on how to make
 * metadata changes.
 *
 * Do not modify this file directly!
 */


return array (
  'generalDesc' => 
  array (
    'NationalNumberPattern' => '[24-9]\\d{3,10}|3(?:[0-46-9]\\d{2,9}|5[013-9]\\d{1,8})',
    'PossibleLength' => 
    array (
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
      5 => 9,
      6 => 10,
      7 => 11,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'fixedLine' => 
  array (
    'NationalNumberPattern' => '(?:2[2-9]\\d{2,9}|(?:[3457]\\d{2}|8(?:0[2-9]|[13-9]\\d)|9(?:0[89]|[2-579]\\d))\\d{1,8})',
    'ExampleNumber' => '27123456',
    'PossibleLength' => 
    array (
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'mobile' => 
  array (
    'NationalNumberPattern' => '6[25-79][18]\\d{6}',
    'ExampleNumber' => '628123456',
    'PossibleLength' => 
    array (
      0 => 9,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'tollFree' => 
  array (
    'NationalNumberPattern' => '800\\d{5}',
    'ExampleNumber' => '80012345',
    'PossibleLength' => 
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'premiumRate' => 
  array (
    'NationalNumberPattern' => '90[015]\\d{5}',
    'ExampleNumber' => '90012345',
    'PossibleLength' => 
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'sharedCost' => 
  array (
    'NationalNumberPattern' => '801\\d{5}',
    'ExampleNumber' => '80112345',
    'PossibleLength' => 
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'personalNumber' => 
  array (
    'NationalNumberPattern' => '70\\d{6}',
    'ExampleNumber' => '70123456',
    'PossibleLength' => 
    array (
      0 => 8,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voip' => 
  array (
    'NationalNumberPattern' => '20(?:1\\d{5}|[2-689]\\d{1,7})',
    'ExampleNumber' => '20201234',
    'PossibleLength' => 
    array (
      0 => 4,
      1 => 5,
      2 => 6,
      3 => 7,
      4 => 8,
      5 => 9,
      6 => 10,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'pager' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'uan' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'voicemail' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'noInternationalDialling' => 
  array (
    'PossibleLength' => 
    array (
      0 => -1,
    ),
    'PossibleLengthLocalOnly' => 
    array (
    ),
  ),
  'id' => 'LU',
  'countryCode' => 352,
  'internationalPrefix' => '00',
  'nationalPrefixForParsing' => '(15(?:0[06]|1[12]|35|4[04]|55|6[26]|77|88|99)\\d)',
  'sameMobileAndFixedLinePattern' => false,
  'numberFormat' => 
  array (
    0 => 
    array (
      'pattern' => '(\\d{2})(\\d{3})',
      'format' => '$1 $2',
      'leadingDigitsPatterns' => 
      array (
        0 => '[2-5]|7[1-9]|[89](?:[1-9]|0[2-9])',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    1 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '[2-5]|7[1-9]|[89](?:[1-9]|0[2-9])',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    2 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '20',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    3 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '2(?:[0367]|4[3-8])',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    4 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{3})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '20',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    5 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{2})(\\d{1,2})',
      'format' => '$1 $2 $3 $4 $5',
      'leadingDigitsPatterns' => 
      array (
        0 => '2(?:[0367]|4[3-8])',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    6 => 
    array (
      'pattern' => '(\\d{2})(\\d{2})(\\d{2})(\\d{1,4})',
      'format' => '$1 $2 $3 $4',
      'leadingDigitsPatterns' => 
      array (
        0 => '2(?:[12589]|4[12])|[3-5]|7[1-9]|8(?:[1-9]|0[2-9])|9(?:[1-9]|0[2-46-9])',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    7 => 
    array (
      'pattern' => '(\\d{3})(\\d{2})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '70|80[01]|90[015]',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
    8 => 
    array (
      'pattern' => '(\\d{3})(\\d{3})(\\d{3})',
      'format' => '$1 $2 $3',
      'leadingDigitsPatterns' => 
      array (
        0 => '6',
      ),
      'nationalPrefixFormattingRule' => '',
      'domesticCarrierCodeFormattingRule' => '$CC $1',
      'nationalPrefixOptionalWhenFormatting' => false,
    ),
  ),
  'intlNumberFormat' => 
  array (
  ),
  'mainCountryForCode' => false,
  'leadingZeroPossible' => false,
  'mobileNumberPortableRegion' => true,
);
