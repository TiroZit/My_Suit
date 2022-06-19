<?php

global $SUB_FOLDER, $HTTP_ROOT_PATH;

const NETCAT_MODULE_NETSHOP = 'Netshop';
const NETCAT_MODULE_NETSHOP_TITLE = 'Netshop';
const NETCAT_MODULE_NETSHOP_DESCRIPTION = 'Netshop.';

const NETCAT_MODULE_NETSHOP_ERROR_NO_SETTINGS = 'No settings';

const NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE = 'This function is available in superior editions of the system.';
define("NETCAT_MODULE_NETSHOP_UPGRADE", NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE . " <a href='https://netcat.ru/products/upgrade/' target='_blank'>Upgrade</a>");

// Настройки магазина
const NETCAT_MODULE_NETSHOP_SHOP_URL = 'Shop URL';
const NETCAT_MODULE_NETSHOP_SHOP_NAME = 'Shop name';
const NETCAT_MODULE_NETSHOP_COMPANY_NAME = 'Company name';
const NETCAT_MODULE_NETSHOP_ADDRESS = 'Address';
const NETCAT_MODULE_NETSHOP_CITY = 'City';
const NETCAT_MODULE_NETSHOP_PHONE = 'Phone';
const NETCAT_MODULE_NETSHOP_DEFAULT_CURRENCY_ID = 'Default currency id';
const NETCAT_MODULE_NETSHOP_MAIL_FROM = 'Mail from';
const NETCAT_MODULE_NETSHOP_MANAGER_EMAIL = 'Manager email';
const NETCAT_MODULE_NETSHOP_EXTERNAL_CURRENCY = 'External currency';
const NETCAT_MODULE_NETSHOP_CURRENCY_CONVERSION_PERCENT = 'Currency conversion percent';
const NETCAT_MODULE_NETSHOP_INN = 'INN';
const NETCAT_MODULE_NETSHOP_BANK_NAME = 'Bank name';
const NETCAT_MODULE_NETSHOP_BANK_ACCOUNT = 'Bank account';
const NETCAT_MODULE_NETSHOP_CORRESPONDENT_ACCOUNT = 'Correspondent account';
const NETCAT_MODULE_NETSHOP_KPP = 'KPP';
const NETCAT_MODULE_NETSHOP_BIK = 'BIK';
const NETCAT_MODULE_NETSHOP_VAT = 'VAT';
const NETCAT_MODULE_NETSHOP_WEBMONEY_PURSE = 'Webmoney purse';
const NETCAT_MODULE_NETSHOP_WEBMONEY_SECRET_KEY = 'Webmoney secret key';
const NETCAT_MODULE_NETSHOP_PAY_CASH_SETTINGS = 'Pay cash settings';
const NETCAT_MODULE_NETSHOP_ASSIST_SHOP_ID = 'Assist shop id';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUCCESS_PAGE = 'Payment success page';
const NETCAT_MODULE_NETSHOP_ASSIST_SECRET_WORD = 'Assist secret word';
const NETCAT_MODULE_NETSHOP_PAYMENT_FAILED_PAGE = 'Payment failed page';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_LOGIN = 'Robokassa login';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS1 = 'Robokassa pass1';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS2 = 'Robokassa pass2';
const NETCAT_MODULE_NETSHOP_INC_CURR_LABEL = 'Inc curr label';
const NETCAT_MODULE_NETSHOP_PAYPAL_BIZ_MAIL = 'Paypal biz mail';
const NETCAT_MODULE_NETSHOP_QIWI_FROM = 'Qiwi from';
const NETCAT_MODULE_NETSHOP_QIWI_PWD = 'Qiwi password';
const NETCAT_MODULE_NETSHOP_MAIL_SHOP_ID = 'Mail shop id';
const NETCAT_MODULE_NETSHOP_MAIL_SECRET_KEY = 'Mail secret key';
const NETCAT_MODULE_NETSHOP_MAIL_HASH = 'Mail hash';


const NETCAT_MODULE_NETSHOP_SHOP = 'Shop';
const NETCAT_MODULE_NETSHOP_ITEM = 'Goods';
const NETCAT_MODULE_NETSHOP_DISCOUNT = 'Discount';
const NETCAT_MODULE_NETSHOP_DISCOUNTS = 'Discounts';
const NETCAT_MODULE_NETSHOP_CART_DISCOUNT = 'Order discount';
const NETCAT_MODULE_NETSHOP_SURCHARGE = 'Surcharge';
const NETCAT_MODULE_NETSHOP_COST = 'COST';
const NETCAT_MODULE_NETSHOP_ITEM_COST = 'SUBTOTALS';
const NETCAT_MODULE_NETSHOP_QTY = 'Quantity';
const NETCAT_MODULE_NETSHOP_ITEM_FULL_NAME = 'Full item name (manufacturer, variant name)';
const NETCAT_MODULE_NETSHOP_ITEM_PRICE = 'Price';
const NETCAT_MODULE_NETSHOP_SUM = 'Totals';
const NETCAT_MODULE_NETSHOP_ITEM_DELETE = 'Remove';
const NETCAT_MODULE_NETSHOP_SETTINGS = 'Settings';

const NETCAT_MODULE_NETSHOP_APPLIED_DISCOUNTS = 'Discounts applied to this item:';

const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT = 'Item price with&nbsp;discount';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT = 'Item price without&nbsp;discount';
const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT_SHORT = 'Price with&nbsp;discount';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT_SHORT = 'Price without&nbsp;discount';


const NETCAT_MODULE_NETSHOP_CURRENCIES = 'Currencies';

const NETCAT_MODULE_NETSHOP_DELIVERY = 'Delivery';
const NETCAT_MODULE_NETSHOP_PAYMENT = 'Payment';

const NETCAT_MODULE_NETSHOP_REFRESH = 'Refresh cart';
const NETCAT_MODULE_NETSHOP_PRICE_TYPE = 'Price type';
const NETCAT_MODULE_NETSHOP_ITEM_FORMS = 'item, items, items';

const NETCAT_MODULE_NETSHOP_FILL_REQUIRED = 'Please fill all fields marked with asterik (*)';


const NETCAT_MODULE_NETSHOP_NEXT = 'Next';
const NETCAT_MODULE_NETSHOP_BACK = 'Previous';
const NETCAT_MODULE_NETSHOP_MORE = 'details';
const NETCAT_MODULE_NETSHOP_INSTALL = 'Install';


// Статистика
const NETCAT_MODULE_NETSHOP_STATISTICS = 'Statistics';
const NETCAT_MODULE_NETSHOP_DATA_NOT_AVAILABLE = 'Data not available';

const NETCAT_MODULE_NETSHOP_SALES = 'Orders';
const NETCAT_MODULE_NETSHOP_ORDERS = 'Orders';
const NETCAT_MODULE_NETSHOP_GOODS = 'Goods';
const NETCAT_MODULE_NETSHOP_CUSTOMERS = 'Customers';

const NETCAT_MODULE_NETSHOP_SALES_AMOUNT = 'Sales amount';
const NETCAT_MODULE_NETSHOP_TOTAL_ORDERS = 'Total orders';
const NETCAT_MODULE_NETSHOP_COMPLETED_ORDERS = 'Completed orders';
const NETCAT_MODULE_NETSHOP_PURCHASED_GOODS = 'Purchased goods';
const NETCAT_MODULE_NETSHOP_TOP_PURCHASED_GOODS = 'Top purchased goods';
const NETCAT_MODULE_NETSHOP_SUCCESSFUL_ORDERS_PERCENTAGE = 'Percentage of successful orders';
const NETCAT_MODULE_NETSHOP_AVG_ORDER_AMOUNT = 'Average order amount';
const NETCAT_MODULE_NETSHOP_AVG_SALES_ORDER_AMOUNT_BY_DAY = 'Average order amount by day';
const NETCAT_MODULE_NETSHOP_SELECTED_PERIOD = 'Selected period';
const NETCAT_MODULE_NETSHOP_LAST_PERIOD = 'Last period';

const NETCAT_MODULE_NETSHOP_OVER_PERIOD = 'Over a period…';
const NETCAT_MODULE_NETSHOP_7_DAYS = '7 days';
const NETCAT_MODULE_NETSHOP_30_DAYS = '30 days';

const NETCAT_MODULE_NETSHOP_GROUP_BY = 'Group by';
const NETCAT_MODULE_NETSHOP_BY_DAYS = 'By days';
const NETCAT_MODULE_NETSHOP_BY_WEEKS = 'By weeks';
const NETCAT_MODULE_NETSHOP_BY_MONTHS = 'By months';

const NETCAT_MODULE_NETSHOP_GOODS_BY_QTY = 'By quantity';
const NETCAT_MODULE_NETSHOP_GOODS_BY_SALES_AMOUNT = 'By sales amount';

const NETCAT_MODULE_NETSHOP_TODAY = 'Today';
const NETCAT_MODULE_NETSHOP_YESTERDAY = 'Yesterday';
const NETCAT_MODULE_NETSHOP_AVG_FOR_7_DAYS = 'On average 7 days';

const NETCAT_MODULE_NETSHOP_WEEK = 'week';
const NETCAT_MODULE_NETSHOP_LAST_WEEK = 'Last week';
const NETCAT_MODULE_NETSHOP_MONTH = 'Month';
const NETCAT_MODULE_NETSHOP_LAST_MONTH = 'Last month';


const NETCAT_MODULE_NETSHOP_1C_INTEGRATION = '1C and MoySklad';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_LEGACY = '(old exchange version)';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_IMPORT = 'Import source';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR = 'Import files interceptor';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILES_LIST = 'Files list';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILE = 'File';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CREATED_AT = 'Created at';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_IMPORT = 'Import';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_FILE = 'Are you sure you want to delete this file?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_DELETE_ALL_FILES = 'Delete all files';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_ALL_FILES = 'Are you sure you want to delete all files?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_INTERCEPT_URL = 'Source URL parameter';


//Forms
const NETCAT_MODULE_NETSHOP_SAVE = 'Save';
const NETCAT_MODULE_NETSHOP_ADMIN_SAVE_OK = 'Save complete';
const NETCAT_MODULE_NETSHOP_FORMS = 'Forms';
const NETCAT_MODULE_NETSHOP_FORMS_TYPE = 'Form types';

const NETCAT_MODULE_NETSHOP_CASHMEMO = 'cashmemo';
const NETCAT_MODULE_NETSHOP_CASHMEMO_COMPANY = 'company';
const NETCAT_MODULE_NETSHOP_CASHMEMO_ADDRESS = 'address';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER = 'seller';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER_POSITION = 'POSITION';
const NETCAT_MODULE_NETSHOP_CASHMEMO_PAYMENT = 'Payment transaction fee';
const NETCAT_MODULE_NETSHOP_CASHMEMO_DELIVERY = 'Delivery';

const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE2 = "Sender's address line 2";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_PHONE = "Sender's phone";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE1 = "Sender's address line 1";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_FULLNAME = "Addressee's full name";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE1 = "Addressee's address line 1";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE2 = "Addressee's address line 1";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_FULLNAME = "Sender's full name";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_PHONE = "Addressee's phone";
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_DESCRIPTION = 'Description of contents';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_VALUE = 'Value';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_WEIGHT = 'Weight';

const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_LEGAL_ENTITY = 'Sender: legal entity';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_TO_LEGAL_ENTITY = 'Addressee: legal entity';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_STREET = 'Street';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_HOUSE = 'House';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_BLOCK = 'Block';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_FLOOR = 'Frool';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_APARTMENT = 'Apartment';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_INTERCOM = 'Intercom';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_CITY = 'City';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_REGION = 'Region';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_ZIPCODE = 'Zipcode';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_CASH_ON_DELIVERY = 'Cash on delivery';

const NETCAT_MODULE_NETSHOP_POST_INN = 'ITN';
const NETCAT_MODULE_NETSHOP_POST_KOR = 'Corresponding account';
const NETCAT_MODULE_NETSHOP_POST_BANK = 'Bank';
const NETCAT_MODULE_NETSHOP_POST_ACCOUNT = 'Current account';
const NETCAT_MODULE_NETSHOP_POST_BIK = 'BIC';

const NETCAT_MODULE_NETSHOP_TORG12 = 'TORG-12';
const NETCAT_MODULE_NETSHOP_TORG12_NUMBER_TEMPLATE = 'Document number template';
const NETCAT_MODULE_NETSHOP_TORG12_UNIT = 'Структурное подразделение';
const NETCAT_MODULE_NETSHOP_TORG12_CONSIGNEE = 'Грузополучатель';
const NETCAT_MODULE_NETSHOP_TORG12_SUPPLIER = 'Поставщик';
const NETCAT_MODULE_NETSHOP_TORG12_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_TORG12_CONTRACT = 'Основание';
const NETCAT_MODULE_NETSHOP_TORG12_OKDP = 'ОКДП';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_NUMBER = 'Транс. накл. номер';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_DATE = 'Транс. накл. дата';
const NETCAT_MODULE_NETSHOP_TORG12_OPERATION_TYPE = 'Вид операции';
const NETCAT_MODULE_NETSHOP_TORG12_NDS = 'НДС (%)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_POSITION = 'Разрешил (должность)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_SURNAME = 'Разрешил (расшифровка подписи)';
const NETCAT_MODULE_NETSHOP_TORG12_ACCOUNTANT_SURNAME = 'Бухгалтер (расшифровка подписи)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_POSITION = 'Отпустил (должность)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_SURNAME = 'Отпустил (расшифровка подписи)';

const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_DONT_USE = "Don't use";
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING = 'Field mapping for &ldquo;%s&rdquo;';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_SHOP = 'Shop settings';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_ORDER = 'Order properties';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_SETTINGS = 'Additional field settings for &ldquo;%s&rdquo;';
const NETCAT_MODULE_NETSHOP_DELIVERY_EMS = 'EMS';
const NETCAT_MODULE_NETSHOP_DELIVERY_RUSSIANPOST = 'Russian post';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA = 'EMS Russia';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL = 'EMS international';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_PACKAGE = 'Russian post form 116';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_CASH_ON_DELIVERY = 'Russian post form 113';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX = 'Yandex.Delivery';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SENDER_ID = 'Store ID';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_OAUTH_TOKEN = 'Authorization token';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_KEYS = 'Method keys (top field in Yandex.Delivery control panel)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_IDS = 'Identifiers (bottom field in Yandex.Delivery control panel)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE = 'Payment transfer charge';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_INCLUDED = 'included in the total order cost';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_EXTRA = 'add as the payment extra charge';
const NETCAT_MODULE_NETSHOP_DELIVERY_DADATA_API_KEY = 'dadata.ru API-key (required to create order draft in Yandex.Delivery';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE = 'Shipment type';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_IMPORT = 'Import';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_WITHDRAW = 'Withdraw';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK = 'CDEK';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_LOGIN = 'Integration account login (optional)';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_PASSWORD = 'Integration account password';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE = 'Shipment type';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_CDEK = 'sender delivers package to the CDEK warehouse';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_SHOP = 'package is picked up by the CDEK courier';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_POINT_LINK = 'Delivery point details';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_RATES = 'Rates to use';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SELECTED_RATES_NUMBER_WARNING = 'Checking large number of rates will slow down delivery estimate calculation and increase checkout page generation time';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_REQUIRES_LOGIN = 'requires account login';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE = 'Delivery type';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_POST = 'Delivery to the post office';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_PICKUP = 'Delivery to the pick-up point';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_COURIER = 'Courier delivery to your address';
const NETCAT_MODULE_NETSHOP_DELIVERY_WITH_CHECK = 'It is possible to inspect items upon delivery. ';
const NETCAT_MODULE_NETSHOP_DELIVERY_COURIER_TIME = 'Time of delivery: ';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SELECT_BUTTON = 'Select this pick-up point';
const NETCAT_MODULE_NETSHOP_DELIVERY_DAYS_OF_WEEK_SHORT = '/Mon/Tue/Wen/Thu/Fri/Sat/Sun';
const NETCAT_MODULE_NETSHOP_DELIVERY_TIME_ALL_DAY = 'around the clock';
const NETCAT_MODULE_NETSHOP_DELIVERY_ON_MAP = 'on the map';

const NETCAT_MODULE_NETSHOP_DELIVERY_POINTS = 'Pick-up points';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT = 'Pick-up point';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_LOCATION_NAME = 'City (locality) name';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_ADDRESS = 'Address';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SCHEDULE = 'Schedule';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP = 'Delivery point group';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_SHORT = 'Group';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_ANY = 'any';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_CONFIRM_DELETE = 'Are you sure you want to delete &ldquo;%s&rdquo;?';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_DRAG = 'drag the marker to change its position on the map';

const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CASH = 'cash on delivery';
const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CARD = 'card payment on delivery';

const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_FROM = 'from';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_TO = 'to';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_PLACEHOLDER = 'hh:mm';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_INTERVAL_REMOVE = 'Remove interval?';

const NETCAT_MODULE_NETSHOP_PHONE_EXTENSION = 'ext.';

const NETCAT_MODULE_NETSHOP_LOCATION_IS_INVALID = 'Unable to find a locality with this name';
const NETCAT_MODULE_NETSHOP_LOCATION_SUFFIX_PLACEHOLDER = 'type city name';

//Filter
const NETCAT_MODULE_NETSHOP_FILTER_SHOW = 'Apply';
const NETCAT_MODULE_NETSHOP_FILTER_RESET = 'Reset';
const NETCAT_MODULE_NETSHOP_FILTER_FROM = 'from';
const NETCAT_MODULE_NETSHOP_FILTER_TO = 'to';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_TRUE = 'yes';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_FALSE = 'no';
const NETCAT_MODULE_NETSHOP_FILTER_SETTINGS = 'Setup goods filter';

const NETCAT_MODULE_NETSHOP_EXPORT_COMMERCEML = 'Export to 1C';

const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML = 'CommerceML data import';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_NOT_WELL_FORMED = 'Error loading XML file';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER = 'Scheme version';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_0 = 'auto';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_1 = '1C version 7.7';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_2 = '1C version 8.1';
const NETCAT_MODULE_NETSHOP_IMPORT_SUBMIT = '  Import  ';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NAME = 'Source';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NEW = 'New source (enter source name)';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_WRONG = 'Wrong data source';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE = 'File';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT = 'What to do with items not in source';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DISABLE = 'disable';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DELETE = 'delete';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_IGNORE = 'leave as is';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS = 'Add sections on autoimport with this component:';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS_DONT_ADD = "Don't add";
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_GOODS = 'add goods without a prompt';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_MOVE_SECTIONS = 'Synchronize tree changes';
const NETCAT_MODULE_NETSHOP_IMPORT_DELETE_TMP_FILES = 'Delete temporary files after import';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_RENAME_SUBDIVISIONS = 'Rename subdivision if source group was renamed';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_CHANGE_SUBDIVISION_LINKS = 'Change links on renamed subdivisions';
const NETCAT_MODULE_NETSHOP_IMPORT_DISABLE_OUT_OF_STOCK_ITEMS = 'Disable goods that are out of stock';

const NETCAT_MODULE_NETSHOP_IMPORT_MAP_SECTION = 'Source sections to site mapping';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_PRICE = 'Price types to content template fields mapping';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_STORES = 'Store quantity to component fields mapping';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_CHARACTERISTICS = 'Item variant characteristics mapping';
const NETCAT_MODULE_NETSHOP_IMPORT_REMAIN_IN_STORE = 'Remain in store';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION = 'Create new section';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION_PARENT = 'Parent section';
const NETCAT_MODULE_NETSHOP_IMPORT_TEMPLATE = 'Content template';

const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_TITLE = 'Import data source';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE_UPLOAD_TITLE = 'Upload importing file';
define("NETCAT_MODULE_NETSHOP_IMPORT_FILE_FTP_PATH", "File name in " . $SUB_FOLDER . $HTTP_ROOT_PATH . "tmp/ directory");
const NETCAT_MODULE_NETSHOP_IMPORT_ROOT_SUBDIVISION = 'For successfull import FILL netshop root subdivision ID:';

const NETCAT_MODULE_NETSHOP_IMPORT_XML_FILE = 'File parsing';
const NETCAT_MODULE_NETSHOP_IMPORT_CATALOGUE_STRUCTURE = 'Catalogue structure import';
const NETCAT_MODULE_NETSHOP_IMPORT_OFFERS = 'Import offers data';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS = 'Import orders';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS_ID_MAP = "You have to map \"Ид\" field for orders import";
const NETCAT_MODULE_NETSHOP_IMPORT_COMMODITIES_IN_CATALOGUE = 'Commodities import';
const NETCAT_MODULE_NETSHOP_IMPORT_FIELDS_AND_TAGS_COMPLIANCE = 'Fields and tags compliance:';

const NETCAT_MODULE_NETSHOP_IMPORT_IGNORE_SECTION = 'Skip section';

const NETCAT_MODULE_NETSHOP_IMPORT_DONE = 'Import source processed.';

const NETCAT_MODULE_NETSHOP_IMPORT_CACHE_CLEARED_PARTIAL = 'Temporary files partly removed!';

const NETCAT_MODULE_NETSHOP_PHP4_DOMXML_REQUIRED = 'Cannot import XML data, because DOMXML library is not installed. Please contact your hosting provider to install this library.';

const NETCAT_MODULE_NETSHOP_IMPORT_1C_LINK = "To export this source to site from &#039;1C&#039; in batch mode:
<ol>
<li>In 1C, open <b>Service - Data exchange in CommerceML format - Unloading of commercial proposal packet
</b></li>
<li>Check item <b>Send to the site</b> and press ellipsis (<b>...</b>)
<li>In dialog window press <b>New line</b> and enter site name.
<br>Put the following string to the <b>Address</b> field:
<br><b style='background:#DFDFDF'>%s</b>
<br>Leave fields <b>Username</b> and <b>Password</b> blank.
</ol>
<b>NB:</b> all new 1C sections won't be added to site until you upload XML file
using this interface. Please read module documentation for details.";

const NETCAT_MODULE_NETSHOP_IMPORT_1C8_LINK = "To export this source to site from &#039;1C8&#039; in batch mode:
<ol>
<li>Into the 1С8 open menu <b>Сервис</b> - <b>Data exchange with WEB-site</b> - <b>Data exchange settings with WEB-site</b>;</li>
<li>Check item <b>Create new exchange settings with WEB-site</b> and press <b>Далее</b>;</li>
<li>In dialog window:
<br>Put the following string to the <b>site address</b> field:
<br><b style='background:#DFDFDF'>%s</b>
<br>Fields <b>User</b> and <b>Password</b> set as (SECRET_NAME и SECRET_KEY).</li>
</ol>
<b>Note:</b> Subdivisions recreated in 1С8 will not be added on site untill you download the file manually using this interface. For detailed information see module documentation.";

const NETCAT_MODULE_NETSHOP_DISCOUNT_EDIT = 'Discount edit';
const NETCAT_MODULE_NETSHOP_DISCOUNT_MANUAL = 'Discount amount was set manually by the manager';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_GOODS = 'to goods';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_CART = 'to the cart in whole';

const NETCAT_MODULE_NETSHOP_DISCOUNT_SELECT_FIELD = 'select a field...';

const NETCAT_MODULE_NETSHOP_CUSTOMER = 'Customer';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT_TITLE = 'Order №%s of %%Y-%%m-%%d.';
const NETCAT_MODULE_NETSHOP_SHOW_ORDER_STATUS = 'Show only orders with the status';
const NETCAT_MODULE_NETSHOP_ORDER_NEW = 'new';
const NETCAT_MODULE_NETSHOP_ORDER_ANY = 'any';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER = 'Orders filter';
const NETCAT_MODULE_NETSHOP_ORDER_SEARCH = 'Number, customer, phone or e-mail';
const NETCAT_MODULE_NETSHOP_ORDER_NO_INFOBLOCK = 'There are no ‘Order’ infoblocks on the selected site';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_FILTER = 'Delivery method';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_ALL = 'any';
const NETCAT_MODULE_NETSHOP_DATE_FILTER = 'Date';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_FROM = 'from';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_TO = 'to';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER = 'Sum';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_FROM = 'from';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_TO = 'to';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_SUBMIT = 'Search';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET = 'Reset form';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET_CONFIRM = 'Do you want to reset the form?';
const NETCAT_MODULE_NETSHOP_ORDER_BACK_TO_LIST = 'Back to orders list';
const NETCAT_MODULE_NETSHOP_ORDER_DUPLICATE = 'Duplicate order';
const NETCAT_MODULE_NETSHOP_ORDER_CREATE = 'New order';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT = 'Edit order';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM = 'Remove item from the order';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM_CONFIRM = 'Remove &ldquo;%s&rdquo; from the order?';
const NETCAT_MODULE_NETSHOP_ORDER_ADD_ITEM = 'Add an item to the order';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED = 'Delete selected';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED_CONFIRM = 'Delete selected orders?';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SELECTED = 'Merge selected';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE = 'Orders merge';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_CANCEL = 'Cancel';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SUBMIT = 'Continue';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_DESCRIPTION = 'A new order which contains items from the selected orders will be created.';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_BASE = 'Order which contains delivery and payment data for the new order:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SET_STATUS = 'Set status of the merged orders:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_NO_STATUS_CHANGE = 'do not change';

const NETCAT_MODULE_NETSHOP_EQUALS = 'equals';
const NETCAT_MODULE_NETSHOP_MULTIPLY = 'multiply';
const NETCAT_MODULE_NETSHOP_ADD = 'add';
const NETCAT_MODULE_NETSHOP_SUBSTRACT = 'substract';

const NETCAT_MODULE_NETSHOP_OR = 'or';


const NETCAT_MODULE_NETSHOP_ITEM_MINIMAL_PRICE_REACHED = 'Minimal price was reached when applying discounts to this item (%s)';
const NETCAT_MODULE_NETSHOP_CART_MINIMAL_PRICE_REACHED = 'Minimal price was reached when applying discounts to the cart (%s)';


const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS = 'Netshop settings';
const NETCAT_MODULE_NETSHOP_DEPARTMENT_SETTINGS = 'Netshop section settings';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS = 'Currency rates';

// Эти настройки по умолчанию (применяются, если не указаны соотв. настройки валют)
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT = '# %s'; // # - знак валюты
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMALS = 2; // количество знаков после запятой
const NETCAT_MODULE_NETSHOP_CURRENCY_DEC_POINT = '.'; // разделитель целой и дробной части числа
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSAND_SEP = ','; // разделитель групп разрядов (оставьте пустым!)
// скрипт получения курсов валют:
const NETCAT_MODULE_NETSHOP_CURRENCY_VAR_NOT_SET = '%s is not set';
const NETCAT_MODULE_NETSHOP_CURRENCY_NOTHING_TO_FETCH = 'All currency rates where set manually';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_NOTFOUND = 'Error while trying to get currency rate sources';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_PARSING_ERROR = 'Error while trying to parse currency rate sources';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_OK = 'Currency rates fetched: %s';

const NETCAT_MODULE_NETSHOP_ERROR_CART_EMPTY = 'Cannot make an order because the cart is empty';

const NETCAT_MODULE_NETSHOP_EMAIL_TO_MANAGER_HEADER = 'Order from %s';


const NETCAT_MODULE_NETSHOP_PAYMENT_NO_SETTINGS = 'No settings for %s';
const NETCAT_MODULE_NETSHOP_PAYMENT_NO_CURRENCY = "The shop currency isn't specified";
// №, название магазина
const NETCAT_MODULE_NETSHOP_PAYMENT_DESCRIPTION = 'Order No. %s payment (%s)';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUBMIT = 'Make a payment';

// название платежной системы, сумма, дата, номер транзакции, id покупателя
const NETCAT_MODULE_NETSHOP_PAYMENT_LOG = 'Payed via %s: %s %s (transcation ID: %s, user ID: %s)';
const NETCAT_MODULE_NETSHOP_PAYED_ON = 'Payed on %Y-%m-%d';
const NETCAT_MODULE_NETSHOP_PAYMENT_DOCUMENT = 'document No. ';


const NETCAT_MODULE_NETSHOP_CART_EMPTY = 'Your cart is empty';
const NETCAT_MODULE_NETSHOP_CART_CONTENTS = "<a href='%s'>In the cart</a>: %s, <b>%s</b>";
const NETCAT_MODULE_NETSHOP_CART_CHECKOUT = 'Checkout';

const NETCAT_MODULE_NETSHOP_NO_RIGTHS = 'You have no rights to access this information';

const NETCAT_MODULE_NETSHOP_SOURCES = 'Sources';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_SOURCE = 'Source not exists';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_NOT_SELECTED = 'Sources not selected';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETED = 'Sources deleted';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETE_ERROR = 'Sources delete error';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_SAVED = 'Source saved';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NOT_SAVED = 'Source not saved - some errors';
const NETCAT_MODULE_NETSHOP_SOURCES_MATCHING_SAVED = 'Mapping saved';
const NETCAT_MODULE_NETSHOP_SOURCES_MAPPING_NOT_SAVED = 'Mapping not saved - some errors';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_STORE = 'Store not exists';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NAME = 'Source name';
const NETCAT_MODULE_NETSHOP_SOURCES_CATALOGUE_ID = 'Catalogue ID';
const NETCAT_MODULE_NETSHOP_SOURCES_GOODS_IMPORTED = 'Goods imported';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_IMPORTED = 'Stores imported';
const NETCAT_MODULE_NETSHOP_SOURCES_LAST_SYNC = 'Last sync';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT_MATCHING = 'Edit<br>mapping';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT = 'Edit';
const NETCAT_MODULE_NETSHOP_SOURCES_FIELD_NOT_SELECTED = 'Не выбрано';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SOURCE = 'Delete source';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES = 'No sources';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES_MESSAGE = 'This page displays data exchange sources for use with 1C, MoySklad and other systems supporting CommerceML data exchange format.<br>
To create a new source, go to: ';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SELECTED = 'Delete selected';
const NETCAT_MODULE_NETSHOP_SOURCES_SAVE = 'Save';
const NETCAT_MODULE_NETSHOP_SOURCES_REALLY_WANT_TO_DELETE_SOURCES = 'Are you really want to delete this sources?';
const NETCAT_MODULE_NETSHOP_SOURCES_BACK = 'Back';
const NETCAT_MODULE_NETSHOP_SOURCES_CANCEL = 'Cancel';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_CONFIRM = 'Confirm';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE = 'Source';
const NETCAT_MODULE_NETSHOP_SOURCES_SETTINGS = 'Settings';
const NETCAT_MODULE_NETSHOP_SOURCES_MANUAL_SYNC = 'Manual sync links';
const NETCAT_MODULE_NETSHOP_SOURCES_OWNER = 'Owner';
const NETCAT_MODULE_NETSHOP_SOURCES_ID = 'Identity';
const NETCAT_MODULE_NETSHOP_SOURCES_NAME = 'Name';
const NETCAT_MODULE_NETSHOP_SOURCES_OFFICIAL_NAME = 'Official name';
const NETCAT_MODULE_NETSHOP_SOURCES_ADDRESS = 'Address';
const NETCAT_MODULE_NETSHOP_SOURCES_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_SOURCES_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION_NOT_AVAILABLE = 'Information not available';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION = 'Information';
const NETCAT_MODULE_NETSHOP_SOURCES_IMPORTED_STORES = 'Imported stores';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_NAME = 'Store name';
const NETCAT_MODULE_NETSHOP_SOURCES_1C_ID = 'CommerceML ID';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN_GOODS = 'Goods remain';
const NETCAT_MODULE_NETSHOP_SOURCES_VIEW_GOODS = 'View goods';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_NOT_IMPORTED = 'Stores not imported';
const NETCAT_MODULE_NETSHOP_SOURCES_GO_BACK = 'Go back';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_REMAIN = 'Store remains';
const NETCAT_MODULE_NETSHOP_SOURCES_ITEM = 'Item';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN = 'Remain';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_CATALOGUE = 'Export catalogue to CommerceML2 file';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_OFFERS = 'Export offers to CommerceML2 file';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_ORDERS = 'Export orders to CommerceML2 file';

const NETCAT_MODULE_NETSHOP_SETUP = 'Module setup';
const NETCAT_MODULE_NETSHOP_SETUP_ON_SITE = 'Which site you want to install module to?';
const NETCAT_MODULE_NETSHOP_SETUP_EVERYWHERE = 'Module is installed on all sites in the system.';
const NETCAT_MODULE_NETSHOP_SETUP_SHOP_SETTINGS_REDIRECT = "After you click &quot;OK&quot; the system will redirect you to the settings of the Netshop on the selected site. Please fill all required fields and press the &quot;Add&quot; button, otherwise the module won't work on that site.";

const NETCAT_MODULE_NETSHOP_PREV_ORDERS_SUM = 'Previous orders sum';
const NETCAT_MODULE_NETSHOP_NOT_REGISTERED_USER = 'Unregistered user';

const NETCAT_MODULE_NETSHOP_NETSHOP = 'Netshop';
const NETCAT_MODULE_NETSHOP_GOODS_CATALOGUE = 'Goods catalogue';
const NETCAT_MODULE_NETSHOP_CART = 'Cart';
const NETCAT_MODULE_NETSHOP_MAKE_ORDER = 'Make an order';
const NETCAT_MODULE_NETSHOP_EURO = 'Euro';
const NETCAT_MODULE_NETSHOP_EUROCENT = 'eurocent, eurocents, eurocents';
const NETCAT_MODULE_NETSHOP_USD = 'dollar, dollars, dollars';
const NETCAT_MODULE_NETSHOP_CENT = 'cent, cents, cents';
const NETCAT_MODULE_NETSHOP_RUR = 'rouble, roubles, roubles';
const NETCAT_MODULE_NETSHOP_COPECK = 'copeck, copecks, copecks';
const NETCAT_MODULE_NETSHOP_CB_RATES = 'Official currency rates';
const NETCAT_MODULE_NETSHOP_PRICE_GROUPS = 'Price types for user groups';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHODS = 'Delivery methods';
const NETCAT_MODULE_NETSHOP_BY_COURIER = 'By courier';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHODS = 'Payment methods';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD = 'Credit card';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD_DESCRIPTION = 'VISA, MasterCard, EuroCard, JCB, DCL (via ASSIST.RU payment system)';
const NETCAT_MODULE_NETSHOP_YANDEX_MONEY = 'Yandex.Money';
const NETCAT_MODULE_NETSHOP_RBK_MONEY = 'RBK Money';
const NETCAT_MODULE_NETSHOP_WEBMONEY = 'Webmoney';
const NETCAT_MODULE_NETSHOP_CASHLESS = 'Bank transfer';
const NETCAT_MODULE_NETSHOP_SBERBANK = 'Via Sberbank';
const NETCAT_MODULE_NETSHOP_CASH = 'In cash';
const NETCAT_MODULE_NETSHOP_EMAIL_TEMPLATES = 'Mail templates';
const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_HEADER = 'Your order in %SHOP_SHOPNAME%';
const NETCAT_MODULE_NETSHOP_STORES = 'Stores';
const NETCAT_MODULE_NETSHOP_MAIN_STORE = 'Main store';

const NETCAT_MODULE_NETSHOP_UNITS = 'Units';
const NETCAT_MODULE_NETSHOP_PCS = 'pcs';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS = 'Order status';
const NETCAT_MODULE_NETSHOP_ACCEPTED = 'accepted';
const NETCAT_MODULE_NETSHOP_REJECTED = 'declined';
const NETCAT_MODULE_NETSHOP_PAYED = 'payed';
const NETCAT_MODULE_NETSHOP_DONE = 'finished';

const NETCAT_MODULE_NETSHOP_FULL_NAME = 'Full Name';


const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_BODY = 'Hello %CUSTOMER_CONTACTNAME%,

Thank you for placing your order.

%CART_CONTENTS%
%CART_DISCOUNTS%
%CART_DELIVERY%%CART_PAYMENT%

TOTALS: %CART_COUNT% to the sum of %CART_SUM%

Our managers will contact you shortly to specify some order details.


Yours sincerely,                    Phone: %SHOP_PHONE%
%SHOP_SHOPNAME%';



const NETCAT_MODULE_NETSHOP_NO_PREV_ORDERS_STATUS_ID = 'PREV_ORDERS_SUM_STATUS option is not set in the NetShop module settings. For details, please refer to module documentation.';

const NETCAT_MODULE_NETSHOP_MONTHS_GENITIVE = '/January/February/March/April/May/June/July/August/September/October/November/December';

const NETCAT_MODULE_NETSHOP_1C_ID = 'Ид';
const NETCAT_MODULE_NETSHOP_1C_CLASSIFICATOR_ID = 'ИдКлассификатора';
const NETCAT_MODULE_NETSHOP_1C_NAME = 'Наименование';
const NETCAT_MODULE_NETSHOP_1C_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_1C_PRICES = 'Цены';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE = 'ТипЦены';
const NETCAT_MODULE_NETSHOP_1C_PRICES_TYPE = 'ТипыЦен';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_UNIT = 'Единица';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_COEFFICIENT = 'Коэффициент';
const NETCAT_MODULE_NETSHOP_1C_STORES = 'Склады';
const NETCAT_MODULE_NETSHOP_1C_STORE = 'Склад';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID = 'СкладИД';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY = 'КоличествоОстаток';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID_2 = 'ИдСклада';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY_2 = 'КоличествоНаСкладе';
const NETCAT_MODULE_NETSHOP_1C_STORE_REMAIN = 'ОстаткиПоСкладам';
const NETCAT_MODULE_NETSHOP_1C_REMAIN = 'Остаток';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE_ID = 'ИдТипаЦены';
const NETCAT_MODULE_NETSHOP_1C_PRICE_UNIT = 'ЦенаЗаЕдиницу';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY = 'Валюта';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY_DEFAULT = 'руб';
const NETCAT_MODULE_NETSHOP_1C_GROUP = 'Группа';
const NETCAT_MODULE_NETSHOP_1C_GROUPS = 'Группы';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHARS = 'ХарактеристикиТовара';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHAR = 'ХарактеристикаТовара';
const NETCAT_MODULE_NETSHOP_1C_VALUE = 'Значение';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUES = 'ЗначенияРеквизитов';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUE = 'ЗначениеРеквизита';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUES = 'ЗначенияСвойств';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUE = 'ЗначенияСвойства';
const NETCAT_MODULE_NETSHOP_1C_TAX = 'СтавкаНалога';
const NETCAT_MODULE_NETSHOP_1C_TAXES = 'СтавкиНалогов';
const NETCAT_MODULE_NETSHOP_1C_RATE = 'Ставка';
const NETCAT_MODULE_NETSHOP_1C_BASE_UNIT = 'БазоваяЕдиница';
const NETCAT_MODULE_NETSHOP_1C_IMG = 'Картинка';
const NETCAT_MODULE_NETSHOP_1C_QTY = 'Количество';
const NETCAT_MODULE_NETSHOP_1C_OFFICIAL_NAME = 'ОфициальноеНаименование';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS = 'ЮридическийАдрес';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS_VIEW = 'Представление';
const NETCAT_MODULE_NETSHOP_1C_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_1C_KPP = 'КПП';

const NETCAT_MODULE_NETSHOP_RESPONSE_STAT_MESSAGE = 'Order status in the system';
const NETCAT_MODULE_NETSHOP_RESPONSE_COMMENT = 'User comment';
const NETCAT_MODULE_NETSHOP_ORDERS_NUMBER = 'Order #';
const NETCAT_MODULE_NETSHOP_TRANSACTION_NUMBER = 'Transaction number in the system';
const NETCAT_MODULE_NETSHOP_TELEPHONE_NUMBER = 'Enter the number of your QIWI e-wallet';
const NETCAT_MODULE_NETSHOP_NO_PAYMENT_SYSTEM = 'Payment system is not found';

const NETCAT_MODULE_NETSHOP_ERROR_ASSIST = 'Enter identificator in ASSIST';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_MAIL = 'Fill &#034;Paypal Log-in Email&#034; field and choose the shop currency';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_RATES = 'You should get the currency rates';
const NETCAT_MODULE_NETSHOP_ERROR_QIWI = 'Enter the shop number and QIWI password';
const NETCAT_MODULE_NETSHOP_ERROR_MAIL = 'Enter the shop number, the shop key, and cryptographic hash of the key for Money@mail.ru';
const NETCAT_MODULE_NETSHOP_ERROR_ROBOKASSA = 'Enter Log-in, password #1 and password #2 for Robokassa';
const NETCAT_MODULE_NETSHOP_ERROR_WEBMONEY = "Enter seller's e-wallet number and secret key for Webmoney";
const NETCAT_MODULE_NETSHOP_ERROR_YANDEX = 'Choose settings in Yandex.Money';
const NETCAT_MODULE_NETSHOP_ERROR_PAYMASTER = 'Enter shop identificator and secret word for Paymaster';

const NETCAT_MODULE_NETSHOP_SBERBANK_PRINT_BILL = 'Распечатать квитанцию';
const NETCAT_MODULE_NETSHOP_SBERBANK_NOTICE = 'ИЗВЕЩЕНИЕ';
const NETCAT_MODULE_NETSHOP_SBERBANK_CASHIER = 'Кассир';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_RECEIVER = 'Получатель платежа';
const NETCAT_MODULE_NETSHOP_SBERBANK_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_SBERBANK_RS = 'Р/c';
const NETCAT_MODULE_NETSHOP_SBERBANK_KS = 'Корр.сч.';
const NETCAT_MODULE_NETSHOP_SBERBANK_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_SBERBANK_BIK = 'БИК';
const NETCAT_MODULE_NETSHOP_SBERBANK_NAME_ADDR = 'фамилия, и. о., адрес';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_TYPE = 'Вид платежа';
const NETCAT_MODULE_NETSHOP_SBERBANK_DATE = 'Дата';
const NETCAT_MODULE_NETSHOP_SBERBANK_AMOUNT = 'Сумма';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_SBERBANK_RECEIPT = 'КВИТАНЦИЯ';

const NETCAT_MODULE_NETSHOP_BANK_PRINT_BILL = 'Распечатать счет';
const NETCAT_MODULE_NETSHOP_BANK_ADDRESS = 'Адрес';
const NETCAT_MODULE_NETSHOP_BANK_PHONE = 'тел.';
const NETCAT_MODULE_NETSHOP_BANK_EXAMPLE = 'Образец заполнения платежного поручения';
const NETCAT_MODULE_NETSHOP_BANK_INN = 'ИНН';
const NETCAT_MODULE_NETSHOP_BANK_KPP = 'КПП';
const NETCAT_MODULE_NETSHOP_BANK_BILL = 'Сч.';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER = 'Получатель';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER_BANK = 'Банк получателя';
const NETCAT_MODULE_NETSHOP_BANK_BIK = 'БИК';
const NETCAT_MODULE_NETSHOP_BANK_BILL_FULL = 'СЧЕТ';
const NETCAT_MODULE_NETSHOP_BANK_BILL_SUFFIX = '/И';
const NETCAT_MODULE_NETSHOP_BANK_FROM = 'от';
const NETCAT_MODULE_NETSHOP_BANK_YEAR = 'г.';
const NETCAT_MODULE_NETSHOP_BANK_CUSTOMER = 'Заказчик';
const NETCAT_MODULE_NETSHOP_BANK_PAYER = 'Плательщик';
const NETCAT_MODULE_NETSHOP_BANK_GOODS_TITLE = 'Наименование<br>товара';
const NETCAT_MODULE_NETSHOP_BANK_UNIT = 'Единица<br>измерения';
const NETCAT_MODULE_NETSHOP_BANK_AMOUNT = 'Количество';
const NETCAT_MODULE_NETSHOP_BANK_PRICE = 'Цена';
const NETCAT_MODULE_NETSHOP_BANK_SUM = 'Сумма';
const NETCAT_MODULE_NETSHOP_BANK_SHIPPING = 'Доставка';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL = 'Итого';
const NETCAT_MODULE_NETSHOP_BANK_VAT_INCLUDED = 'В том числе НДС';
const NETCAT_MODULE_NETSHOP_BANK_VAT_NOT_INCLUDED = 'НДС не предусмотрен';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_SUM = 'Всего к оплате';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_TITLES = 'Всего наименований';
const NETCAT_MODULE_NETSHOP_BANK_WITH_SUM = 'на сумму';
const NETCAT_MODULE_NETSHOP_BANK_TIP = 'Оплата в рублях по курсу ЦБ РФ на день выставления счета';

const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_DATA_SECTION = 'Contact data and delivery address';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_DATA_SECTION = 'Contact data';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_ADDRESS_SECTION = 'Delivery address';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEMS_SECTION = 'Ordered items';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_METHOD_SECTION = 'Delivery method';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_METHOD_SECTION = 'Payment method';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_AND_PAYMENT_METHOD_SECTION = 'Delivery and payment methods';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_DELIVERY_METHODS = 'Unable to find suitable delivery method for your order. Our manager will contact you to work out the best possible delivery method.';
const NETCAT_MODULE_NETSHOP_ADMIN_NO_AVAILABLE_DELIVERY_METHODS = 'Unable to find suitable delivery method for the order';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR = 'Unable to estimate delivery price and time';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR_NO_RESPONSE = 'no response from the server';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE = 'Price: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE_UNKNOWN = 'unknown';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATE = 'Estimated delivery date: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATES = 'Estimated delivery dates: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_LOADING = ' (loading data) ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS = 'Unable to find suitable payment method for your order. Our manager will contact you to work out the payment method.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS_ADMIN = 'Cannot find a payment method for this order';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_EXTRA_CHARGE = 'Extra charge: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CONFIRMATION_SECTION = 'Order confirmation';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PLEASE_REVIEW_ORDER = 'Please review your order.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_TOTALS_SECTION = 'Totals';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CART_TOTALS = 'Price of the goods: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEM_TOTALS = 'Goods total cost';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_TOTALS = 'Grand total: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BUTTON = 'Checkout';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PREV_PAGE_BUTTON = 'Back';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NEXT_PAGE_BUTTON = 'Continue';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CHANGE_BUTTON = 'Change';

const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_INCORRECT_METHOD = 'Error: the delivery method you selected is not available for your order';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_METHOD = 'Delivery method: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_POINT = 'Delivery point: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_INCORRECT_METHOD = 'Error: the payment method you selected is not available for your order';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_PAYMENT_METHOD = 'Payment method: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_YES = 'yes';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_NO = 'no';

const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_DELIVERY_METHOD = 'Specified delivery method is not available.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_PAYMENT_METHOD = 'Specified payment method is not available.';

const NETCAT_MODULE_NETSHOP_ITEM_CANNOT_BE_ORDERED = 'Item &ldquo;%s&rdquo; is not available for order at this time.';
const NETCAT_MODULE_NETSHOP_ITEM_QTY_CHANGED = 'Item &ldquo;%s&rdquo; in your cart is not available in the quantity you originally requested. Your shopping cart was updated to reflect the amount that is currently available.';

const NETCAT_MODULE_NETSHOP_NO_PAYMENT_MODULE = 'Integration with payment systems is disabled because there is no payment module in your edition of the system';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_PAYMENT_SYSTEM = 'Payment system';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_NO_PAYMENT_SYSTEM_OPTION = '-- none --';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_ABSOLUTE = 'Extra charge (absolute amount)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_RELATIVE = 'Extra charge (percentage from the order sum)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_DELIVERY = 'possibility and cost of payment on delivery is determined by the delivery service';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD = 'Delivery method';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE = 'Delivery cost estimate service';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_NO_SERVICE_OPTION = '-- none --';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_ABSOLUTE = 'Extra charge (absolute amount)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_RELATIVE = 'Extra charge (percentage from the order sum)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_COST = 'Cost';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_CALCULATED = 'Calculated';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MIN_DAYS = 'Minimum days to deliver (is added to the estimate from external source, if any)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MAX_DAYS = 'Maximum days to deliver (is added to the estimate from external source, if any)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SHIPMENT_DAYS = 'Days when the order can be shipped out';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SAME_DAY_SHIPMENT_TIME = 'Latest time for the same-day shipping';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FROM_CITY = 'Sender city';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_REGION = 'Recipient region';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_DISTRICT = 'Recipient district';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_CITY = 'Recipient city';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ADDRESS = 'Recipient address';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ZIP_CODE = 'Recipient zip (postal) code';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_STREET = 'Street (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSE = 'House (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSING = 'Housing (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_BUILDING = 'Building (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_FLAT = 'Flat (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FULL_NAME = 'Full name';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_LAST_NAME = 'Last name (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FIRST_NAME = 'First name (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_MIDDLE_NAME = 'Middle name (if field exists)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_ID = 'incorrect delivery method was chosen';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_METHOD_ID = 'incorrect delivery method was chosen';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_WEIGHT = 'package weight is out of bounds';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_RECIPIENT_ADDRESS = 'unable to find recipient address';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_SENDER_ADDRESS = 'unable to find sender address';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_REMOTE_SERVER_RESPONSE = 'error in remote sender response';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_NO_REMOTE_SERVER_RESPONSE = 'no response from the remote server';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MISSING_SETTING = '&quot;%s&quot; setting has no value';

const NETCAT_MODULE_NETSHOP_DELIVERY_FREE_OF_CHARGE = 'free of charge';
const NETCAT_MODULE_NETSHOP_DELIVERY_DISCOUNT_STRING = '(discount: %s)';


const NETCAT_MODULE_NETSHOP_GENITIVE_DAY_FORMAT = 'jS'; // English: "jS"  (format as specified for the date() function)
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT = '%2$s, %1$2 to %3$s %2$s'; // day 1, month1, day 2, month 2. English: '%2$s, %1$2 to %3$s %2$s'
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT_ONE_MONTH = '%3$s, %1$s – %3$s, %2$s'; // day 1, day 2, month. English: '%3$s, %1$s – %3$s, %2$s'
const NETCAT_MODULE_NETSHOP_DAY_AND_MONTH_FORMAT = '%2$s, %1$s'; // day, month. English: '%2$s, %1$s'
const NETCAT_MODULE_NETSHOP_SHORT_DAY_OF_WEEK_RANGE = '%s–%s'; // dow-dow
const NETCAT_MODULE_NETSHOP_DATE_TODAY = 'today';
const NETCAT_MODULE_NETSHOP_DATE_TOMORROW = 'tomorrow';

// (Common)

const NETCAT_MODULE_NETSHOP_DATETIME_FORMAT = 'd.m.Y H:i';
const NETCAT_MODULE_NETSHOP_DATE_FORMAT = 'd.m.Y';

const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS = 'Item variants';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANT = 'Add one';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANTS = 'Add multiple';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ENABLE_ALL = 'Enable all';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DISABLE_ALL = 'Disable all';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_EDIT_ALL = 'Edit all';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DELETE_ALL = 'Delete all variants';
const NETCAT_MODULE_NETSHOP_ITEM_PARENT = 'Base item variant';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRIORITY = 'Drag to change the order';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRICE_RANGE = "<span class='tpl-value'>%s</span>&nbsp;&ndash; <span class='tpl-value'>%s</span>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_HEADER = 'Adding multiple item variants for &ldquo;%2&rdquo;';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_DESCRIPTION =
    "Choose fields which make item variants different, and specify those fields values, separated by semicolon.<br>
    If several fields are selected, all possible item variants will be created.<br>
    If there is only one value for a field, this value will be set for all variants that will be created.<br>
    Values for all other fields will be inherited from the base variant.<br>
    In case the values for the &ldquo;Variant Name&rdquo; field are not explicitly set, names of the variants will be automatically generated from the base variant name and specified field values. Order of the values in the generated name is determined by the field order.<br>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_SELECT_PROPERTY = 'Choose an item property';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE = 'Fill the &ldquo;%s&rdquo; field';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE_COMMENT = "Value of the &ldquo;%s&rdquo; field will be generated from the main item &ldquo;%1\$s&rdquo; field value and a variant sequence number, delimited by hyphen";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_CREATE = 'Create';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_COUNT = 'Number of item variants:';

const NETCAT_MODULE_NETSHOP_LIST_ACTIONS_HEADER = 'Actions';
const NETCAT_MODULE_NETSHOP_ACTION_EDIT = 'Edit';
const NETCAT_MODULE_NETSHOP_ACTION_DELETE = 'Delete';
const NETCAT_MODULE_NETSHOP_LIST_PREVIOUS_PAGE = 'Previous page';
const NETCAT_MODULE_NETSHOP_LIST_NEXT_PAGE = 'Next page';

const NETCAT_MODULE_NETSHOP_NAME_FIELD = 'Name';
const NETCAT_MODULE_NETSHOP_DESCRIPTION_FIELD = 'Description';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD = 'Conditions';
const NETCAT_MODULE_NETSHOP_NAME_AND_CONDITIONS_HEADER = 'Name, conditions';
const NETCAT_MODULE_NETSHOP_UTM_FIELD = 'UTM code';

const NETCAT_MODULE_NETSHOP_BUTTON_ADD = 'Add';
const NETCAT_MODULE_NETSHOP_BUTTON_BACK = 'Back';
const NETCAT_MODULE_NETSHOP_BUTTON_SAVE = 'Save';
const NETCAT_MODULE_NETSHOP_BUTTON_APPLY_FILTER = 'Apply';
const NETCAT_MODULE_NETSHOP_BUTTON_CLOSE_DIALOG = 'Close';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE_SELECTED = 'Delete selected';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE = 'Delete';

const NETCAT_MODULE_NETSHOP_UNABLE_TO_SAVE_RECORD = "Error occurred while saving the record. <a href='javascript:history:back()'>Back to editing</a>";

// Settings
const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS_TAB = 'Company';
const NETCAT_MODULE_NETSHOP_EXTRA_SETTINGS_TAB = 'Settings';
const NETCAT_MODULE_NETSHOP_PRICE_RULES_TAB = 'Prices';

const NETCAT_MODULE_NETSHOP_SETTINGS_NO_CURRENCIES_ON_SITE = 'There are no currencies defined on the selected site.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_OFFICIAL_RATES_ON_SITE = 'There are no official currency rates defined on the selected site.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PRICE_RULES_ON_SITE = 'There are no price rules defined on the selected site.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PAYMENT_METHODS_ON_SITE = 'There are no payment methods defined on the selected site.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_METHODS_ON_SITE = 'There are no delivery methods defined on the selected site';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_POINTS_ON_SITE = 'Pick-up points information is not added yet on the selected site.';

const NETCAT_MODULE_NETSHOP_CURRENCY = 'Currency';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS_TAB = 'Settings';
const NETCAT_MODULE_NETSHOP_CURRENCY_RATE = 'Rate to the base source currency';
const NETCAT_MODULE_NETSHOP_CURRENCY_SHORT_NAME = 'Currency short name';
const NETCAT_MODULE_NETSHOP_CURRENCY_FULL_NAME = 'Currency full name (single, multiple forms)';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_PART_NAME = 'Name of the decimal fraction';
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT_RULE = 'Output format';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_POINTS = 'Number of decimal digits';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_SEPARATOR = 'Decimal point symbol';
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSANDS_SEPARATOR = 'Thousands separator';
const NETCAT_MODULE_NETSHOP_DAYS_TO_KEEP_CURRENCY_RATES = 'Days to keep official rates';
const NETCAT_MODULE_NETSHOP_RULE = 'Rule';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_NAME = 'Rule name';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_PRICE_COLUMN = 'Price column';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_CONFIRM_DELETE = 'Remove the rule &ldquo;%s&rdquo;?';
const NETCAT_MODULE_NETSHOP_ORDERS_COMPONENT = 'Orders component';
const NETCAT_MODULE_NETSHOP_DEFAULT_FULL_NAME_TEMPLATE = 'Default FullName template';

const NETCAT_MODULE_NETSHOP_ORDERS_SUM_STATUS = 'Statuses of the orders used to calculate purchases sum';
const NETCAT_MODULE_NETSHOP_1C_EXPORT_ORDERS_STATUS = 'Statuses of the orders to export to 1C and MoySklad';
const NETCAT_MODULE_NETSHOP_PAID_ORDER_STATUS = 'Order status after successful payment';
const NETCAT_MODULE_NETSHOP_REJECTED_ORDER_STATUS = 'Order status after rejected payment';

// _MAILER_

const NETCAT_MODULE_NETSHOP_MAILER_ROOT = 'Messages';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATES = 'Message templates';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_MAIL = 'Messages to customers';
const NETCAT_MODULE_NETSHOP_MAILER_MANAGER_MAIL = 'Messages to managers';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATES = 'Templates'; // Макеты дизайна писем
const NETCAT_MODULE_NETSHOP_MAILER_NO_MASTER_TEMPLATES = 'There are no message templates for the e-shop on the selected site.';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER = 'New order'; // Шаблон письма клиенту при оформлении заказа
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER_REGISTER = 'New order and registration';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_CHANGE_ITEMS = 'Contents change';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS = '&ldquo;%s&rdquo; status';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS_SHORT = '&ldquo;%s&rdquo;';

const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_HEADER_NAME = 'Template name';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_NAME = 'Template name';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_IS_USED = 'Cannot delete this template because it is used in other message templates';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_CONFIRM_DELETE = 'Delete &ldquo;%s&rdquo;?';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SUBJECT = 'Message subject';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_BODY = 'Message body';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_PARENT_TEMPLATE = 'Parent template';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_NO_PARENT_TEMPLATE = 'none';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_IS_ENABLED = 'send a message when this order status is set';

const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW = 'Message preview';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_TO = 'To:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SUBJECT = 'Subject:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_NO_SUBJECT = 'NO SUBJECT';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SEND_PROMPT = "Specify an e-mail address to send a copy of this message.\n(Multiple comma-delimited addresses can be specified.)";
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SENT = 'Message sent';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_CHILD_TEMPLATE = 'Child template';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_VARIABLES = 'Insert a variable...';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SITE_VARIABLES = 'Site';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SHOP_VARIABLES = 'Shop settings';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_USER_VARIABLES = 'User';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_VARIABLES = 'Order';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_CART_VARIABLES = 'Cart';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_COUPON_VARIABLES = 'Coupon';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_URL = 'Item page link';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_PRICE_AS_DEFINED = 'Base price (as defined in the Price field)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_NON_FORMATTED_VALUE = ' (not formatted)';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DATE = 'Order date';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ITEM_PRICE = 'Items total without order discount';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE = 'Items total with order discount';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE_WITHOUT_DISCOUNT = 'Items total without discounts';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_ITEMS_DISCOUNT = 'Item discount sum';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ORDER_DISCOUNT = 'Order discounts sum (contents, delivery)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_DISCOUNT = 'Order contents discount sum';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DELIVERY_DISCOUNT = 'Delivery discount sum';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_PRICE = 'Total order sum';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DISCOUNT = 'Total order discount';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_NAME = 'Delivery method name';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_VARIANT_NAME = 'Full delivery method name (with name from the settings)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_ADDRESS = 'Delivery or pickup point address';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_NAME = 'Pickup point address';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_DESCRIPTION = 'Pickup point description';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_ADDRESS = 'Pickup point address';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_PHONES = 'Pickup point phones';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_SCHEDULE = 'Pickup point working hours';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_DATES = 'Estimated delivery dates';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE = 'Delivery cost without discount';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE_WITH_DISCOUNT = 'Delivery cost with discount';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_METHOD_NAME = 'Payment method name';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_CHARGE = 'Payment-related extra charge';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_ID = 'Order ID';

const NETCAT_MODULE_NETSHOP_MAILER_RULES = 'Additional manager addresses';
const NETCAT_MODULE_NETSHOP_MAILER_RULE_ADDRESS = 'E-mail address';
const NETCAT_MODULE_NETSHOP_MAILER_NO_RULES_ON_SITE = 'There are no e-mail address selection rules on this site.';
const NETCAT_MODULE_NETSHOP_MAILER_RULES_CONFIRM_DELETE = 'Delete «%s»?';

// _CONDITION_

// Фрагменты для составления текстового описания условий
const NETCAT_MODULE_NETSHOP_OP_EQ = '%s';
const NETCAT_MODULE_NETSHOP_OP_EQ_IS = 'is %s';
const NETCAT_MODULE_NETSHOP_OP_NE = 'not %s';
const NETCAT_MODULE_NETSHOP_OP_GT = 'greater than %s';
const NETCAT_MODULE_NETSHOP_OP_GE = 'not less than %s';
const NETCAT_MODULE_NETSHOP_OP_LT = 'less than %s';
const NETCAT_MODULE_NETSHOP_OP_LE = 'not greater than %s';
const NETCAT_MODULE_NETSHOP_OP_GT_DATE = 'later than %s';
const NETCAT_MODULE_NETSHOP_OP_GE_DATE = 'not later than %s';
const NETCAT_MODULE_NETSHOP_OP_LT_DATE = 'earlier than %s';
const NETCAT_MODULE_NETSHOP_OP_LE_DATE = 'not earlier than %s';
const NETCAT_MODULE_NETSHOP_OP_CONTAINS = 'contains &ldquo;%s&rdquo;';
const NETCAT_MODULE_NETSHOP_OP_NOTCONTAINS = 'does not contain &ldquo;%s&rdquo;';
const NETCAT_MODULE_NETSHOP_OP_BEGINS = 'begins with &ldquo;%s&rdquo;';

const NETCAT_MODULE_NETSHOP_COND_QUOTED_VALUE = '&ldquo;%s&rdquo;';
const NETCAT_MODULE_NETSHOP_COND_OR = ', or '; // spaces are important
const NETCAT_MODULE_NETSHOP_COND_AND = '; ';
const NETCAT_MODULE_NETSHOP_COND_OR_SAME = ', ';
const NETCAT_MODULE_NETSHOP_COND_AND_SAME = ' and ';
const NETCAT_MODULE_NETSHOP_COND_DUMMY = '(condition type not available in this edition of the module)';
const NETCAT_MODULE_NETSHOP_COND_CART_COUNT = 'number of items in the order is';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEM = 'order contains';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT = 'order contains';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT_FROM = 'from the component';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB = 'order contains';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM = 'from the section';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM_DESCENDANTS = 'and its’ descendants';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB = 'order contains';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB_FROM = 'from the section';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY = 'order contains';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY_WITH = ' with ';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMAX = 'maximum value of &ldquo;%s&rdquo; in the order is';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMIN = 'minimum value of &ldquo;%s&rdquo; in the order is';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYSUM = 'sum of &ldquo;%s&rdquo; (with quantity taken into account) in the order is';
const NETCAT_MODULE_NETSHOP_COND_CART_TOTALPRICE = 'total item cost is';
const NETCAT_MODULE_NETSHOP_COND_CART_SUM = 'total item cost (excluding item discounts) is';
const NETCAT_MODULE_NETSHOP_COND_ITEM = 'the item is';
const NETCAT_MODULE_NETSHOP_COND_ITEM_COMPONENT = 'items of type ';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB = 'items from the section';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_NE = 'item is not from the section';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_DESCENDANTS = 'and its’ descendants';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PROPERTY = 'items with';
const NETCAT_MODULE_NETSHOP_COND_ORDER_DELIVERYMETHOD = 'delivery method is';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PAYMENTMETHOD = 'payment method is';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PROPERTY = 'orders with';
const NETCAT_MODULE_NETSHOP_COND_ORDER_STATUS = 'order status is';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COMPONENT = 'previous orders contain items of type';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COUNT = 'number of previous orders is';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM = 'previous orders contain';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM_UNITS = 'pcs.';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUM = 'previous orders totals';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMDATES = 'previous orders totals';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD = 'previous orders totals';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_DAY = 'day days days';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_WEEK = 'week weeks weeks';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_MONTH = 'month months months';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_YEAR = 'year years years';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_FOR = 'for';
const NETCAT_MODULE_NETSHOP_COND_USER = 'user is';
const NETCAT_MODULE_NETSHOP_COND_USER_CREATED = 'user registration date is';
const NETCAT_MODULE_NETSHOP_COND_USER_GROUP = 'user group is';
const NETCAT_MODULE_NETSHOP_COND_USER_PROPERTY = 'for users whose';
const NETCAT_MODULE_NETSHOP_COND_DATE_FROM = 'from';
const NETCAT_MODULE_NETSHOP_COND_DATE_TO = 'to';
const NETCAT_MODULE_NETSHOP_COND_TIME_INTERVAL = '%s-%s';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_TRUE = 'true';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_FALSE = 'false';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_ON_LIST = 'on Monday/on Tuesday/on Wednesday/on Thursday/on Friday/on Saturday/on Sunday';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_EXCEPT_LIST = 'except Monday/except Tuesday/except Wednesday/except Thursday/except Friday/except Saturday/except Sunday';
const NETCAT_MODULE_NETSHOP_COND = 'Conditions: ';

const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_COMPONENT = '[NONEXISTENT COMPONENT]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_FIELD = '[ERROR IN CONDITION: NONEXISTENT FIELD]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_VALUE = '[NONEXISTENT VALUE]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_SUB = '[NONEXISTENT FOLDER]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_ITEM = '[NONEXISTENT ITEM]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER_GROUP = '[NONEXISTENT USER GROUP]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER = '[NONEXISTENT USER]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_DELIVERY_METHOD = '[NONEXISTENT DELIVERY METHOD]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_PAYMENT_METHOD = '[NONEXISTENT PAYMENT METHOD]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_STATUS = '[NONEXISTENT ORDER STATUS]';

// Строки, используемые в «простом» редакторе условий
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_NOTICE = 'Filtering with conditions is not available in the this edition of the module.';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_FROM = 'Order sum: from';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_TO = 'to';

// Строки, используемые в редакторе условий
const NETCAT_MODULE_NETSHOP_CONDITION_AND = 'and';
const NETCAT_MODULE_NETSHOP_CONDITION_OR = 'or';
const NETCAT_MODULE_NETSHOP_CONDITION_AND_DESCRIPTION = 'All conditions are met:';
const NETCAT_MODULE_NETSHOP_CONDITION_OR_DESCRIPTION = 'Any of the conditions is met:';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP = 'Remove condition group';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION = 'Remove condition';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_ALL_CONFIRMATION = 'Remove all conditions?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP_CONFIRMATION = 'Remove the condition group?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION_CONFIRMATION = 'Remove &ldquo;%s&rdquo;?';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD = 'Add...';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD_GROUP = 'Add condition group';

const NETCAT_MODULE_NETSHOP_CONDITION_EQUALS = 'equals';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_EQUALS = 'not equals';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_THAN = 'less than';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_OR_EQUALS = 'not greater than';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_THAN = 'greater than';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_OR_EQUALS = 'not less than';
const NETCAT_MODULE_NETSHOP_CONDITION_CONTAINS = 'contains';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_CONTAINS = 'does not contain';
const NETCAT_MODULE_NETSHOP_CONDITION_BEGINS_WITH = 'begins with';
const NETCAT_MODULE_NETSHOP_CONDITION_TRUE = 'yes';
const NETCAT_MODULE_NETSHOP_CONDITION_FALSE = 'no';
const NETCAT_MODULE_NETSHOP_CONDITION_INCLUSIVE = 'inclusive';

const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_CONDITION_TYPE = 'select a condition type';
const NETCAT_MODULE_NETSHOP_CONDITION_SEARCH_NO_RESULTS = 'Not found: ';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_GOODS = 'Item properties'; // 'Свойства товара'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COMPONENT = 'Component';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_COMPONENT = 'choose a component';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM = 'Item';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM = 'choose an item';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_ITEM = '(Item does not exist)';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_WITHOUT_NAME = 'Item without a name';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_SELECTION = 'Item Selection';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_CANCEL_BUTTON = 'Cancel';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_SELECT_BUTTON = 'Select';
const NETCAT_MODULE_NETSHOP_CONDITION_SUBDIVISION_HAS_LIST_NO_COMPONENTS_OR_OBJECTS = 'There are no components or no items in the selected site section.';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION = 'Site section';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION_DESCENDANTS = 'Site section and its’ descendants';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_SUBDIVISION = 'choose a site section';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM_FIELD = 'Item property';
const NETCAT_MODULE_NETSHOP_CONDITION_COMMON_FIELDS = 'All components';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD_BELONGS_TO_ALL_COMPONENTS = 'all components';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM_FIELD = 'select an item property';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_VALUE = '...'; // sic

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_USER = 'User properties'; // 'Свойства пользователя'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER = 'User';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_GROUP = 'User group';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_CREATED = 'User registration date';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FIELD = 'User property';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER = 'choose a user';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_USER = 'User does not exist';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_SELECTION = 'User Selection';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_LIST_NO_RESULTS = 'There are no users in the selected user group';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_GROUP = 'choose an user group';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_PROPERTY = 'choose an user property';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_CART = 'Cart (ordered items)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM_WITH_ITEM_DISCOUNTS = 'Total item cost (including item discounts)';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM = 'Total item cost (without item discounts)';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_POSITION_COUNT = 'Number of items';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_POSITION_COUNT = 'Number of distinct items in the cart';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COMPONENT = 'Number of items of the component';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION = 'Number of items from the site section';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION_DESCENDANTS = 'Number of items from the site section and its descendants';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COUNT = 'Number of specific item';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_FIELD = 'Number of items with a specific property';

const NETCAT_MODULE_NETSHOP_CONDITION_CART_CONTAINS = 'Cart contains';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_COMPONENT = 'pcs. of items of ';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION = 'pcs. of items from ';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION_DESCENDANTS = 'pcs. of items from a section and sub-sections';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF = 'pcs. of ';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_ITEM_FIELD = 'pcs. of items which ';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_SUM = 'Cart items field sum (with quantity taken into account)';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_SUM = 'Sum over the cart items field (with quantity taken into account)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MIN = 'Cart items field minimum';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MIN = 'Minimum value from the cart items field';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MAX = 'Cart items field maximum';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MAX = 'Maximum value from the cart items field';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDER = 'Current order';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_FIELD = 'Order property';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_PROPERTY = 'choose an order property';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_DELIVERY_METHOD = 'Delivery method';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_DELIVERY_METHOD = 'choose a delivery method';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_PAYMENT_METHOD = 'Payment method';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_PAYMENT_METHOD = 'choose a payment method';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_STATUS = 'Order status';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_STATUS = 'choose a status';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDERS = 'Previous purchases';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_ALL_TIME = 'All-time order sum';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_PERIOD = 'Order sum over the period';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_FOR_LAST = 'Order sum in the last';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_DAYS = 'days';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_WEEKS = 'weeks';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_MONTHS = 'months';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_YEARS = 'years';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_DATES = 'Order sum for the date period';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_FROM = 'Order sum from';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_TO = 'to';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_COUNT = 'Number of orders';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_ITEM = 'Orders contain an item';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_COMPONENT = 'Orders contain an item from the component';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_DATETIME = 'Date and time';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DATE_INTERVAL = 'Date';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_FROM = 'Date:    from';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_TO = 'to';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DAY_OF_WEEK = 'Day of week';
const NETCAT_MODULE_NETSHOP_CONDITION_DAY_OF_WEEK = 'Day of week:';
const NETCAT_MODULE_NETSHOP_CONDITION_MONDAY = 'Monday';
const NETCAT_MODULE_NETSHOP_CONDITION_TUESDAY = 'Tuesday';
const NETCAT_MODULE_NETSHOP_CONDITION_WEDNESDAY = 'Wednesday';
const NETCAT_MODULE_NETSHOP_CONDITION_THURSDAY = 'Thursday';
const NETCAT_MODULE_NETSHOP_CONDITION_FRIDAY = 'Friday';
const NETCAT_MODULE_NETSHOP_CONDITION_SATURDAY = 'Saturday';
const NETCAT_MODULE_NETSHOP_CONDITION_SUNDAY = 'Sunday';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_TIME_INTERVAL = 'Time';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_FROM = 'Time:    from';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_TO = 'till';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_VALUEOF = 'Variable value';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COOKIE_VALUE = 'Cookie value';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SESSION_VALUE = 'Session variable value';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_EXTENSION = 'Extensions';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FUNCTION = 'Function return value';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_CALL = 'Function';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_RETURNS_TRUE = 'returns &ldquo;true&rdquo;';
const NETCAT_MODULE_NETSHOP_CONDITION_VALUE_REQUIRED = 'Please specify a value or delete the &ldquo;%s&rdquo; condtion';

// _PROMOTION_

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNTS = 'Discounts';

const NETCAT_MODULE_NETSHOP_PROMOTION_ITEM_DISCOUNTS = 'Item discounts';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_ITEM_DISCOUNTS = 'There are no item discounts on the selected site';

const NETCAT_MODULE_NETSHOP_PROMOTION_CART_DISCOUNTS = 'Cart discounts';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_CART_DISCOUNTS = 'There are no cart contents discounts on the selected site';

const NETCAT_MODULE_NETSHOP_PROMOTION_DELIVERY_DISCOUNTS = 'Delivery discounts';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_DELIVERY_DISCOUNTS = 'There are no delivery discounts on the selected site';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_AMOUNT = 'Amount';
const NETCAT_MODULE_NETSHOP_PROMOTION_LIST_EDIT_HEADER = 'Edit';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_COUPONS = 'Coupons';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE_SHORT = 'cumulative';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION_SHORT = 'user-activated';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONFIRM_DELETE = 'Delete discount &ldquo;%s&rdquo;?';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_VALUE = 'Discount value';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE = 'Summed up with other discounts of this type';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONDITIONS = 'Discount conditions';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_COUPON_CODE = 'Activate discount by coupon';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CREATE_COUPONS_AFTER_SAVING = 'Create coupons after saving the discount';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_NUMBER_OF_COUPONS = 'Number of coupons: %s (active: %s)';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_GENERATE_COUPONS = 'Add coupons';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION = 'Use as an &ldquo;Instant Offer&rdquo; only';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_ENABLED = 'Discount is active';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_ITEM_HEADER = '“%s” item discount coupons'; // "DISCOUNT_ITEM": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_CART_HEADER = '“%s” cart contents discount coupons'; // "DISCOUNT_CART": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_DELIVERY_HEADER = '“%s” delivery discount coupons'; // "DISCOUNT_DELIVERY": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_COUPONS = 'No coupons.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE = 'Coupon code';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES = 'Number of usages';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES_OUT_OF = 'out of';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_TILL = 'Valid till';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_INDEFINITELY = 'indefinitely';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATE_COUPONS_BUTTON = 'Add coupons';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DISCOUNT_LIST = 'To the discount list';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DEAL_LIST = 'To the deal list';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CSV_LINK = 'CSV export';


const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SEND_CODES_TO_USERS = 'Send codes to users via e-mail';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_USERS_SELECTION = 'User Selection';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USERS_SELECTED = 'Number of users selected: ';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SHOW_SELECTED_USERS = 'Open selected users list';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NO_USERS = 'No users that match specified conditions';
const NETCAT_MODULE_NETSHOP_PROMOTION_NUMBER_OF_COUPONS_TO_GENERATE = 'Number of coupons:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE = 'Coupon code:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_PREFIX = 'Coupon code prefix:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS = 'Symbols used in the generated part of the code:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS_DEFAULT_VALUE = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_LENGTH = 'Length of the generated part:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL = 'Valid:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_INDEFINITELY = 'indefinitely';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL_DATE = 'until date';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_MAX_USAGES = 'Maximum number of usage of each coupon:';
const NETCAT_MODULE_NETSHOP_PROMOTION_USER_EMAIL_FIELD = 'User property containing e-mail address:';
const NETCAT_MODULE_NETSHOP_PROMOTION_PREVIEW_EMAIL = 'Preview message';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_WITH_THIS_CODE_ALREADY_EXISTS = 'Coupon with this code already exists!';
const NETCAT_MODULE_NETSHOP_PROMOTION_CREATE_COUPONS = 'Create';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_CREATE_COUPON = 'Cannot create a coupon: the specified code is incorrect or already exists';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_GENERATE_COUPONS = 'Cannot create required number of coupons with the specified settings.
    <ul><li>Increase the length of generated part of coupon codes.</li>
    <li>Add additional symbols that can be used in the generated part of the code.</li>
    <li>Choose another coupon code prefix.</li>
    </ul>';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_SEND_COUPONS = 'Cannot send coupon codes to the users. Please check whether the message settings are correct: message subject and body, user property containing the e-mail address.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_MAX_USAGES = 'Maximum number of usages:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_ENABLED = 'Coupon is active';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_TITLE = 'Generating Coupons';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_PLEASE_WAIT = 'Do not close this window until the process is finished.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_1 = 'Generating coupons';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_2 = 'Creating messages';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_FINISHED = '– &nbsp;finished.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_ERROR_CAPTION = 'Error while creating coupons:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_DIALOG_CLOSE = 'Close';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_IS_INVALID = 'Coupon &ldquo;%s&rdquo; not found';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_EXPIRED = 'Coupon &ldquo;%s&rdquo; is expired';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_NOT_VALID_ON_THIS_SITE = 'Coupon &ldquo;%s&rdquo; is not valid on this site';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_USED_UP = 'Coupon &ldquo;%s&rdquo; was already used';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_REMOVED_FROM_SESSION = 'Coupon &ldquo;%s&rdquo; is removed';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_ONLY_ONE_OF_ITS_KIND_IS_ALLOWED = 'Coupon &ldquo;%s&rdquo; was not added because another coupon of this type is already activated';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CANNOT_BE_APPLIED_TO_ANY_ITEM = 'Coupon &ldquo;%s&rdquo; does not apply to any items in your cart';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_IS_APPLIED_TO_CART = 'Coupon &ldquo;%s&rdquo; is applied to your cart';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_WILL_BE_APPLIED_TO_CART = 'Coupon &ldquo;%s&rdquo; will be applied to your cart and all items on the site';

const NETCAT_MODULE_NETSHOP_1C_SECRET_NAME = 'Login for CommerceML exchange (1C, MoySklad)';
const NETCAT_MODULE_NETSHOP_1C_SECRET_KEY = 'Password for CommerceML exchange (1С, MoySklad)';
const NETCAT_MODULE_NETSHOP_SECRET_KEY = 'Secret key for currency rates retrieval script';

const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_SECRET_KEY = 'External order: Secret key';
const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_IP_LIST = 'External order: Allowed IP addresses (one per line)';

const NETCAT_MODULE_NETSHOP_ORDER_STATUSES = 'Order statuses';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_CAMPAIGN_NUMBER = 'Campaign number';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_AUTH_TOKEN = 'Authorization token';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_ID = 'OAuth appliction ID';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_TOKEN = 'OAuth application token';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_CANCELLED = 'CANCELLED - The order is cancelled';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERED = 'DELIVERED - The order is delivered';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERY = 'DELIVERY - Delivery is in progress';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PICKUP = 'PICKUP - The order is delivered to the delivery point';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PROCESSING = 'PROCESSING - Processing the order';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_RESERVED = 'RESERVED - The order is reserved';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_UNPAID = 'UNPAID - The order is not paid yet (Yandex.Market online payment)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_SETTINGS_SAVED = 'Settings successfully saved';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_FILL_SETTINGS = 'The module settings must be filled for Yandex.Market Order functionality activation';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_STATUSES = 'Please compare external and local order statuses:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_PAYMENT_METHODS = 'Please compare external and local payment methods:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_PREPAID = 'Yandex.Marked Prepaid';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CASH = 'Postpaid (cash on delivery)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CARD = 'Postpaid (card on delivery)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_ONLINE_PAYMENT_CHECKED = 'Yandex.Market Online payment is switched on';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_NO_DATA_YET = '-ожидаются данные-';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS_CHANGE_SEQUENCES = 'Please set order status change sequences:';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_EXPORT = 'Yandex.Market Export';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_ORDERS = 'Yandex.Market Orders';

const NETCAT_MODULE_NETSHOP_ALLOW_ZERO_PRICE = 'Allow zero item prices after applying discounts';

const NETCAT_MODULE_NETSHOP_IGNORE_STOCK_UNITS_VALUE = 'Ignore &ldquo;Stock Units&rdquo; field value when putting items to the cart';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_STATUS = 'Order statuses transition to which triggers the subtraction of goods quantity from the &ldquo;Stock Units&rdquo; value';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_STATUS = 'Order statuses transition to which triggers the restocking of the goods (to the &ldquo;Stock Units&rdquo; value)';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_FIELD = 'Goods were reserved';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_FIELD = 'Goods were returned';

const NETCAT_MODULE_NETSHOP_DEFAULT_PACKAGE_SIZE = 'Default item package size';
const NETCAT_MODULE_NETSHOP_LENGTH_CM = 'cm';

const NETCAT_MODULE_NETSHOP_ITEM_INDEX_FIELDS = 'Item fields to use for item search in the control planel';

const NETCAT_MODULE_NETSHOP_MARKETS = 'Markets';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET = 'Yandex.Market';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES = 'Bundles';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ADD = 'Add Bundles';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_EDIT = 'Edit Bundle';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_NAME = 'Bundle name';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_UPDATED = 'Changed';
const NETCAT_MODULE_NETSHOP_YANDEX_CONFIRM_DELETE = 'Delete bundle «%s»?';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE = 'Bundle type';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_SIMPLE = 'Simplified';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_FULL = 'Custom items (extended)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EDIT_FIELDS = 'Edit compliances';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EXPORT_URL = 'URL for export';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_DELIVERY_COURIER = 'Select delivery method, the information from which will be used to unload the cost and terms of courier delivery';

const NETCAT_MODULE_NETSHOP_GOOGLE_MERCHANT = 'Google Merchant';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_NO_BUNDLES = 'No bundles found';
const NETCAT_MODULE_NETSHOP_MARKET_GOOGLE_NO_BUNDLES = 'No bundles found';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_NAME = 'Name';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_UNITS = 'Units';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_FIELD = 'Field';

const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES = 'Bundles';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ADD = 'Add Bundles';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_EDIT = 'Edit Bundle';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_NAME = 'Bundle name';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_UPDATED = 'Changed';
const NETCAT_MODULE_NETSHOP_GOOGLE_CONFIRM_DELETE = 'Delete bundle «%s»?';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE = 'Bundle type';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE_SIMPLE = 'Simplified';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EDIT_FIELDS = 'Edit compliances';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EXPORT_URL = 'URL for export';

const NETCAT_MODULE_NETSHOP_MAILRU = 'Товары@Mail.Ru';
const NETCAT_MODULE_NETSHOP_MARKET_MAIL_NO_BUNDLES = 'No bundles found';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES = 'Bundles';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ADD = 'Add Bundles';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_EDIT = 'Edit Bundle';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_NAME = 'Bundle name';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_UPDATED = 'Changed';
const NETCAT_MODULE_NETSHOP_MAIL_CONFIRM_DELETE = 'Delete bundle «%s»?';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE = 'Bundle type';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE_SIMPLE = 'Simplified';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EDIT_FIELDS = 'Edit compliances';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EXPORT_URL = 'URL for export';

const NETCAT_MODULE_NETSHOP_MAIL_MULTI_NAME = 'Name';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_UNITS = 'Units';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_FIELD = 'Field';

const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE = 'Confirm status change';
const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE_TO = 'Change order status to &ldquo;%s&rdquo;?';

const NETCAT_MODULE_NETSHOP_NO_ORDERS = 'You have no orders';

const NETCAT_MODULE_NETSHOP_EXCHANGE = 'Data exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_HAS_NO_OBJECTS = 'Exchange is not configured! Click <b>"Add"</b> to run exchange wizard.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NO_FIELD = 'No selected';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NEW_FIELD = 'New field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_PARENT_FIELD = 'Field related to parent';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_IMPORT = 'Import';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_EXPORT = 'Export';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_MANUAL = 'Manual/Semi-automated';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_AUTOMATED = 'Automated';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_ERROR = 'Error';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CRITICAL_ERROR = 'Critical error';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_TYPE_CONVERSION = 'Type conversion';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_LIST_INSERTION = 'List item adding';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REPORT_HAS_BEEN_SENT = 'Report has been sent on email';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FILE_NOT_FOUND = 'File not found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_ADDED = 'Object added';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_ADDED = 'Object was not added';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_UPDATED = 'object updated';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_UPDATED = 'Object not updated';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_SECTION_HAS_CHILD_WITH_THIS_KEYWORD = 'Parent section has a child with this keyword!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_COMPONENT_WITH_THIS_KEYWORD = 'There is a component with this keyword already!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NEW_FIELD_CANT_BE_NAMED_AS = 'New field can\'t be named "%s"!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_BASE_COMPONENT_HAS_FIELDS_WITH_THIS_NAME = 'Base component already has fields with names: "%s"!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_NO_LIST_WITH_NAME = 'List named "%s" not found!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_IS_REQUIRED = 'Field "%s" is required!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_WRONG_FORMAT = 'Field "%s" has wrong format!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_DOES_NOT_MATCH_ANY = '"%s" does not match any field in component!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_ATTACH_FILES_OR_SET_URL = 'Attach file or set URL to download';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_CHOOSE_MODE = 'Choose mode!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_INFO_ALREADY_HAS_FILES = 'There are files already! They will be used for mapping and exchange.<br>Attach archive or set URL to upload new files.<br>Otherwise, leave fields empty.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_FOR_OBJECT = 'Object settings';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_SAVED = 'Settings saved!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_WIZARD = 'Run exchange wizard';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_PERIODICAL_RUN = 'Run periodically';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_FREQUENCY = 'Exchange run frequency';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_MINUTES = 'Minutes';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_HOURS = 'Hours';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_DAYS = 'Days';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_DOWNLOAD_REMOTE_FILE_BY_URL = 'Fetch files from URL before every exchange run';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REMOTE_FILE_URL = 'URL address of file or archive';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SAVE_OBJECT = 'Save exchange object';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SEND_REPORT = 'Email the report';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REPORT = 'Exchange report';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_WHEN = 'When to send the report';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ALWAYS = 'Always';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ON_ERROR = 'On error';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_NEVER = 'Never';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NAME = 'Exchange name';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_TYPE = 'Exchange type';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_FORMAT = 'Exchange format';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_STATUS = 'Status';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_MODE = 'Exchange mode';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_EMAIL = 'Email for reports';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NOT_CONFIGURED = 'Current exchange not configured';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUNNING_EXCHANGE = 'Run exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_EXCHANGE = 'Run exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_IN_EXCHANGE_FOLDER = 'Files in exchange folder';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES = 'Files';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MAIN_FILES = 'Mail files';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OTHER_FILES = 'Other files';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_FOUND = 'not found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_NOT_FOUND = 'Main files not found.<br>Main files for this exchange should have following extensions: <b>%s</b>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SHOW_ALL = 'Show all';
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOADING_FILES = 'Uploading files';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILES = 'Select files or zip archive';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_FILES_URL = 'Or set file URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_REMOVE_OLD_FILES = 'Remove old files';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_UPLOADED = 'Files have been uploaded successfully';
const NETCAT_MODULE_NETSHOP_EXCHANGE_COMPONENT = 'Component';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SUBDIVISION = 'Subdivision';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFOBLOCK = 'Infoblock';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ALL_LOGS_HAVE_BEEN_DELETED = 'Logs have been deleted';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOG = 'Log';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS = 'Exchange chronology';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_START = 'Datetime of start';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_END = 'Datetime of finish';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS = 'Exchange statistics';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION = 'Event';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION_COUNT = 'Count';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_DATE_TIME = 'Datetime';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MSG = 'Message';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE = 'File';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_NOT_FOUND = 'Logs not found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD = 'Exchange wizard';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_CURRENT_STEP = 'Current step';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILE_OR_ARCHIVE = 'Select files or zip archive';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_URL = 'Or set URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_COMPONENT = 'Component selection';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT_THAT_EXISTS = 'Select existing component';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_COMPONENT_BASED_ON_ANOTHER = 'Create new component based on existing';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_NAME = 'New component name';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_KEYWORD = 'New component keyword';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_SUBDIVISION = 'Subdivision selection';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_SUBDIVISION_THAT_EXISTS = 'Select existing subdivision';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_SUBDIVISION = 'Create new subdivision';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_SUBDIVISION = 'Select parent subdivision for new subdivision';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_NAME = 'New subdivision name';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_KEYWORD = 'New subdivision keyword';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MATCHING_FIELDS = 'Fields mapping';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_IN_COMPONENT = ' Component field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIRST_STRING_IN_FILE = 'First line in the file';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SECOND_STRING_IN_FILE = 'Second line in the file';
const NETCAT_MODULE_NETSHOP_EXCHANGE_THIRD_STRING_IN_FILE = 'Third line in the file';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_FIELD = 'New field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EDIT_FIELD = 'Edit field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME = 'Field name';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_EXAMPLE = 'For example: Property_Size. If field name starts with ‘Property_’, it will be added to the properties table.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION = 'Field description';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION_EXAMPLE = 'For example: Size of item';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_TYPE = 'Field type';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT = 'List name';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT_EXAMPLE = 'For example: Region';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_SELECT_PLACEHOLDER = 'Select fields...';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NOT_FOUND = 'No fields matching the query';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SAVE = 'Save';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS = 'Variants field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS = 'Fields to search';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS_NOT_SET = '"Set variant fields" is selected, but no fields were set up!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS_NOT_SET = '"Set fields to search through" is selected, but no fields were set up!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANT_FIELD = 'Variant field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELD = 'Search field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS = 'Set this field';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS_IN_THE_END = '<b>Attention!</b> Fill these fields after fields mapping!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_FIX_ERROR = 'Please fix errors';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REQUIRED_FIELDS_NOT_MATCHED = 'Required fields not selected';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT = 'Select component';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_COMPONENT = 'Select parent component';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE = 'Phase';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE_OUT_OF = 'out of';
const NETCAT_MODULE_NETSHOP_EXCHANGE_GOOD = 'Item';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_START = 'Start of exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FINISH = 'Finish of exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TRYING_TO_LOAD_FILES_BY_URL = 'Trying to load files by URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAILED_TO_LOAD_FILES_BY_URL = 'Failed to load files by URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_CONFIGURED = 'Exchange not configured';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FOLDER_IS_EMPTY = 'Exchange folder is empty';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_NOT_FOUND = 'File not found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_START_FILE_PROCESSING = 'Start of file processing';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FINISH_FILE_PROCESSING = 'End of file processing';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_IS_EMPTY = 'File is empty';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_ADDED_TO_LIST = 'Field "%s" (List "%s"): object has been added [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_CASTING_FOR_FIELD = 'Type conversion "%s": "%s" => "%s"';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_HAS_NOT_BEEN_FOUND = 'Field "%s": file not found [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_PATH_HAS_NOT_BEEN_FOUND = 'Field "%s": file path not found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_UPDATED = 'Object has been updated (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_UPDATED = 'Object has not been updated (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_ADDED = 'Object has been added (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_ADDED = 'Object has not been added (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT = 'Select';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_PRICE = 'Prices and stock units';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_GOOD_DATA_OR_COMPONENT_NOT_MATCHED = 'No data about goods for subdivision, or component has\'n been matched.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ARTICLE = 'Article';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ITEM_ID = 'Item ID';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_PRICE = 'Price';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_STOCK_UNITS = 'Stock units';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_DATA_FOR_SUBDIVISION = 'No data for subdivision.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_FOUND = 'Object has not been found (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_GO_BACK = 'Go back';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SUBMIT = 'Submit';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_NEXT = 'Next';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CONTINUE = 'Continue';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SAVE = 'Save';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FINISH = 'Finish';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE = 'Remove';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE_SELECTED = 'Remove selected';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_RUN_EXCHANGE = 'Run exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_TYPE_AND_FORMAT = 'Format';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_SELECTION = 'Select object for mapping';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_MATCHING = 'Mapping';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_CML = '1C/МойСклад automated exchange setup';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_FINISH = 'Finish';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_EXCHANGE_NAME = 'New exchange';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FOUND_NOT_FINISHED_OBJECT = 'Found not finished object';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT = 'Please wait';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT_EXCHANGE_FINISH = 'Please wait<br>until the exchange process is finished';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ZIP_EXTENSION_NOT_FOUND = "PHP extension LibZip not found! Can't use zip-archives.";
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOAD_INFO = 'Your server settings:<br>
&ndash; maximum possible upload files per upload: %s<br>
&ndash; maximum possible total files size: %s<br>
&ndash; maximum possible upload file size: %s<br>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SKIP_FIRST = 'Skip first';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ROWS_IN_FILE = 'rows in file';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV = 'File <b>"%s"</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_PRICE', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV);
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_XLS', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', sheet <b>"%s"</b>');
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML = 'Section <b>"%s"</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_YML', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', ' . NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML);
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_AT_LEAST_ONE_OBJECT_FOR_MATCHING = 'Select at least one object for mapping!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_MATCHED = 'Not matched';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOTIFICATION_FOR_AUTOMATED_MODE = 'In this mode files will be grabbed from 1C automatically.<br>Instructions on the next step.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNING_LARGE_FILE_SIZE = 'File size <b>«%s»</b> is bigger than acceptable.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_1 = 'Step 1: Create exchange 1C/МойСклад with site, using data below';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_URL = 'URL for 1C/МойСклад';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_LOGIN = 'Login';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_PASSWORD = 'Password';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_2 = 'Step 2: Run exchange from 1C/МойСклад manually, wait for it to finish, then check that files have appeared on the site';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS = 'Exchange files status';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS = 'Files have been found';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS_NOT = "Files haven't been found yet";
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_REFRESH = 'Refresh status';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3 = 'Step 3: Continue exchange wizard';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_WAIT = "You can't continue right now, because exchange files haven't been found.";
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_CONTINUE = 'Press "Continue" for continuation.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILES_NOT_FOUND_PLEASE_WAIT = 'Import files not found! Please wait.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_AUTOMATED_MODE_ACTIVE = 'Run autoimport';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNINGS = 'Warnings';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LIMITS_WARNING = 'For a problem-free exchange we advise to increase the values of the <b><code>memory_limit</code></b> and <b><code>max_execution_time</code></b> PHP options.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_IN_PROCESS = 'In process (%s%%)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_FINISHED = 'Finished<br> %s';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_NOT_STARTED = 'Not started';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_IMPORTING_RIGHT_NOW = 'Attention! Exchange is in process right now. Finished on: %s%%.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_EXCHANGE_STUCK = 'Looks like exchange got stuck. Perhaps the exchange was interrupted for technical reasons. Before the new import run, you must reset the import state to the <i>«Not started» state</i>.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RESET_STATUS = 'Reset import state';

// Название разделом, создаваемых по умоланию
const NETCAT_MODULE_NETSHOP_CART_SUBDIVISION_NAME = 'Shopping cart';
const NETCAT_MODULE_NETSHOP_ORDER_SUCCESS_SUBDIVISION_NAME = 'Order processed';
const NETCAT_MODULE_NETSHOP_ORDER_LIST_SUBDIVISION_NAME = 'My orders';
const NETCAT_MODULE_NETSHOP_COMPARE_SUBDIVISION_NAME = 'Compare goods';
const NETCAT_MODULE_NETSHOP_FAVORITES_SUBDIVISION_NAME = 'Favorite goods'; 
const NETCAT_MODULE_NETSHOP_DELIVERY_SUBDIVISION_NAME = 'Terms of delivery and return';

if (!function_exists("nc_netshop_word_form")) {
    /**
     * В зависимости от количества $n возвращает форму слова
     * ($f1 — один, $f2 — более одного)
     *
     * @param $n
     * @param string $f1
     * @param string $f2
     * @return string
     */
    function nc_netshop_word_form($n, $f1, $f2) {
        return $n == 1 ? $f1 : $f2;
    }


    /**
     * Сумма прописью
     *
     * @param int|float $num  Сумма
     * @param array|string|bool $currency_name
     *      Массив в формами названия валюты (1 рубль, 2 рубля, 5 рублей);
     *      последний элемент массива — указание на грамматический род валюты (M, F).
     *      Названия могут быть переданы в виде строки, где указанные элементы
     *      разделены запятой.
     *      Если false, название валюты, а также дробная часть не добавляются
     *      (выводится только сумма прописью).
     *      Если true, в качестве названия валюты используется «рубль».
     * @param array|string|bool $decimal_part
     *      Массив в формами названия дробной части валюты (1 копейка, 2 копейки, 5 копеек);
     *      последний элемент массива — указание на род (M, F).
     *      Названия могут быть переданы в виде строки, где указанные элементы
     *      разделены запятой.
     *      Если false, дробная часть суммы не добавляется.
     *      Если true, в качестве названия дробной части используется «копейка».
     * @return string
     */
    function nc_netshop_amount_in_full($num, $currency_name_bool = true, $decimal_part_bool = true) {

        $nul = 'zero';
        $ones = array('', 'one', 'two', 'three', 'four', 'five', 'six', 'seven', 'eight', 'nine');
        $teens = array('ten', 'eleven', 'twelve', 'thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'nineteen');
        $tens = array(2 => 'twenty', 'thirty', 'forty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety');
        $hundreds = array('', 'one hundred', 'two hundred', 'three hundred', 'four hundred', 'five hundred', 'six hundred', 'seven hundred', 'eight hundred', 'nine hundred');

        // названия валют
        $defaults = array(
            "decimal_part" => array('copeck', 'copecks'),
            "currency_name" => array('rouble', 'roubles')
        );

        // если currency_name и decimal_part являются массивом или строкой, взять
        // названия валюты и её дробной части из этих параметров
        foreach (array('currency_name', 'decimal_part') as $param) {
            if (is_string($$param) && strlen($$param)) {
                $$param = preg_split("/\s*,\s*/u", $$param);
            }
            if (!is_array($$param)) { $$param = $defaults[$param]; }
        }

        // все единицы измерения
        $units = array(
            $decimal_part,
            $currency_name,
            array('thousand', 'thousand'),
            array('million', 'million'),
            array('billion', 'billion'),
        );


        list($rub, $kop) = explode('.', sprintf("%015.2f", floatval($num)));
        $out = array();
        if (intval($rub) > 0) {
            foreach (str_split($rub, 3) as $order => $value) { // by 3 symbols
                if (!intval($value)) { continue; }
                if ($out && $value > 99) { $out[] = ","; }

                $unit_key = sizeof($units) - $order - 1; // unit key
                list($i1, $i2, $i3) = array_map('intval', str_split($value, 1));

                // mega-logic
                $out[] = $hundreds[$i1]; # 1xx-9xx
                // if ($i1 && ($i2 || $i3)) { $out[] = "and"; } // British

                if ($i2 > 1) {  // 20-99
                    $out[] = $tens[$i2];
                    if ($i3) { $out[] = '-' . $ones[$i3]; }
                }
                else { // 10-19 | 1-9
                    $out[] = $i2 > 0 ? $teens[$i3] : $ones[$i3];
                }

                // units without rub & kop
                if ($unit_key > 1) {
                    $out[] = nc_netshop_word_form($value, $units[$unit_key][0], $units[$unit_key][1]);
                }
            } //foreach
        }
        else {
            $out[] = $nul;
        }

        if ($currency_name_bool) {
            $out[] = nc_netshop_word_form(intval($rub), $units[1][0], $units[1][1]); // rub
            if ($decimal_part_bool) {
                $out[] = $kop . ' ' . nc_netshop_word_form($kop, $units[0][0], $units[0][1]); // kop
            }
        }

        $result = trim(preg_replace('/ {2,}/', ' ', join(' ', $out)));
        $result = preg_replace('/ ([,-])/', '$1', $result);

        return $result;
    }

}
