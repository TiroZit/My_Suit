<?php

global $SUB_FOLDER, $HTTP_ROOT_PATH;


const NETCAT_MODULE_NETSHOP_TITLE = '��������-�������';
const NETCAT_MODULE_NETSHOP_DESCRIPTION = '��������-�������';

const NETCAT_MODULE_NETSHOP_ERROR_NO_SETTINGS = '����������� ������ �������� � ���������� ��������-�������';

const NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE = '������� �������� � ������� ��������� �������.';
define("NETCAT_MODULE_NETSHOP_UPGRADE", NETCAT_MODULE_NETSHOP_FUNCTION_IS_UNAVAILABLE . " <a href='https://netcat.ru/products/upgrade/' target='_blank'>�������� ��������</a>");

// ��������� ��������
const NETCAT_MODULE_NETSHOP_SHOP_URL = 'URL ��������';
const NETCAT_MODULE_NETSHOP_SHOP_NAME = '�������� ��������';
const NETCAT_MODULE_NETSHOP_COMPANY_NAME = '������ �������� �����������';
const NETCAT_MODULE_NETSHOP_ADDRESS = '����������� �����';
const NETCAT_MODULE_NETSHOP_CITY = '����� ������������ ��������';
const NETCAT_MODULE_NETSHOP_PHONE = '�������';
const NETCAT_MODULE_NETSHOP_DEFAULT_CURRENCY_ID = '������ ��������';
const NETCAT_MODULE_NETSHOP_MAIL_FROM = 'Email, � �������� ���������� ������';
const NETCAT_MODULE_NETSHOP_MANAGER_EMAIL = 'Email ��� ����������';
const NETCAT_MODULE_NETSHOP_EXTERNAL_CURRENCY = '�������� ������ (��)';
const NETCAT_MODULE_NETSHOP_CURRENCY_CONVERSION_PERCENT = '���������� ������� ��� ��������� �����';
const NETCAT_MODULE_NETSHOP_INN = '���';
const NETCAT_MODULE_NETSHOP_BANK_NAME = '�������� �����';
const NETCAT_MODULE_NETSHOP_BANK_ACCOUNT = '��������� ����';
const NETCAT_MODULE_NETSHOP_CORRESPONDENT_ACCOUNT = '����������������� ����';
const NETCAT_MODULE_NETSHOP_KPP = '���';
const NETCAT_MODULE_NETSHOP_BIK = '���';
const NETCAT_MODULE_NETSHOP_VAT = '������ ���, %';
const NETCAT_MODULE_NETSHOP_WEBMONEY_PURSE = 'Webmoney: ������� ��������';
const NETCAT_MODULE_NETSHOP_WEBMONEY_SECRET_KEY = 'Webmoney: secret key';
const NETCAT_MODULE_NETSHOP_PAY_CASH_SETTINGS = '��������� �������-������';
const NETCAT_MODULE_NETSHOP_ASSIST_SHOP_ID = '������������� � ASSIST';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUCCESS_PAGE = 'URL �������� ����� ��� ������� ������� (� http://)';
const NETCAT_MODULE_NETSHOP_ASSIST_SECRET_WORD = '��������� ����� ��� Assist';
const NETCAT_MODULE_NETSHOP_PAYMENT_FAILED_PAGE = 'URL �������� ����� ��� ���������� ������� (� http://)';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_LOGIN = '����� � ������� Robokassa';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS1 = '������ #1 � ������� Robokassa';
const NETCAT_MODULE_NETSHOP_ROBOKASSA_PASS2 = '������ #2 � ������� Robokassa';
const NETCAT_MODULE_NETSHOP_INC_CURR_LABEL = '������ ��� ������� Robokassa';
const NETCAT_MODULE_NETSHOP_PAYPAL_BIZ_MAIL = 'Paypal Log-in Email';
const NETCAT_MODULE_NETSHOP_QIWI_FROM = '����� �������� � ������� QIWI';
const NETCAT_MODULE_NETSHOP_QIWI_PWD = '������ � ������� QIWI';
const NETCAT_MODULE_NETSHOP_MAIL_SHOP_ID = '����� �������� � ������� ������@mail.ru';
const NETCAT_MODULE_NETSHOP_MAIL_SECRET_KEY = '���� �������� � ������� ������@mail.ru';
const NETCAT_MODULE_NETSHOP_MAIL_HASH = '����������������� ��� �� ����� � ������� ������@mail.ru';


const NETCAT_MODULE_NETSHOP_SHOP = '�������';
const NETCAT_MODULE_NETSHOP_ITEM = '�����';
const NETCAT_MODULE_NETSHOP_DISCOUNT = '������';
const NETCAT_MODULE_NETSHOP_DISCOUNTS = '������';
const NETCAT_MODULE_NETSHOP_CART_DISCOUNT = '������ �� �����';
const NETCAT_MODULE_NETSHOP_SURCHARGE = '�������';
const NETCAT_MODULE_NETSHOP_COST = '���������';
const NETCAT_MODULE_NETSHOP_ITEM_COST = '��������� �������';
const NETCAT_MODULE_NETSHOP_QTY = '����������';
const NETCAT_MODULE_NETSHOP_ITEM_FULL_NAME = '������ ������������ (�������������, �������� ��������)';
const NETCAT_MODULE_NETSHOP_ITEM_PRICE = '����';
const NETCAT_MODULE_NETSHOP_SUM = '�����';
const NETCAT_MODULE_NETSHOP_ITEM_DELETE = '�������';
const NETCAT_MODULE_NETSHOP_SETTINGS = '���������';

const NETCAT_MODULE_NETSHOP_APPLIED_DISCOUNTS = '�� ���� ����� ��������� ������:';

const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT = '���� ������ ��&nbsp;�������';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT = '���� ������ ���&nbsp;������';
const NETCAT_MODULE_NETSHOP_PRICE_WITH_DISCOUNT_SHORT = '���� ��&nbsp;�������';
const NETCAT_MODULE_NETSHOP_PRICE_WITHOUT_DISCOUNT_SHORT = '���� ���&nbsp;������';


const NETCAT_MODULE_NETSHOP_CURRENCIES = '������';

const NETCAT_MODULE_NETSHOP_DELIVERY = '��������';
const NETCAT_MODULE_NETSHOP_PAYMENT = '������';

const NETCAT_MODULE_NETSHOP_REFRESH = '����������� �������';
const NETCAT_MODULE_NETSHOP_PRICE_TYPE = '��� ���';
const NETCAT_MODULE_NETSHOP_ITEM_FORMS = '�����, ������, �������';

const NETCAT_MODULE_NETSHOP_FILL_REQUIRED = '����������, ��������� ��� ����, ���������� ���������� (*)';


const NETCAT_MODULE_NETSHOP_NEXT = '�����';
const NETCAT_MODULE_NETSHOP_BACK = '�����';
const NETCAT_MODULE_NETSHOP_MORE = '���������';
const NETCAT_MODULE_NETSHOP_INSTALL = '����������';


// ����������
const NETCAT_MODULE_NETSHOP_STATISTICS = '����������';
const NETCAT_MODULE_NETSHOP_DATA_NOT_AVAILABLE = '������ �����������';

const NETCAT_MODULE_NETSHOP_SALES = '�������';
const NETCAT_MODULE_NETSHOP_ORDERS = '������';
const NETCAT_MODULE_NETSHOP_GOODS = '������';
const NETCAT_MODULE_NETSHOP_CUSTOMERS = '����������';

const NETCAT_MODULE_NETSHOP_SALES_AMOUNT = '����� ������';
const NETCAT_MODULE_NETSHOP_TOTAL_ORDERS = '���������� �������';
const NETCAT_MODULE_NETSHOP_COMPLETED_ORDERS = '��������� �������';
const NETCAT_MODULE_NETSHOP_PURCHASED_GOODS = '������� �������';
const NETCAT_MODULE_NETSHOP_TOP_PURCHASED_GOODS = '������ ������';
const NETCAT_MODULE_NETSHOP_SUCCESSFUL_ORDERS_PERCENTAGE = '������� �������� �������';
const NETCAT_MODULE_NETSHOP_AVG_ORDER_AMOUNT = '������� ��������� ������';
const NETCAT_MODULE_NETSHOP_AVG_SALES_ORDER_AMOUNT_BY_DAY = '������� ���������� �������';
const NETCAT_MODULE_NETSHOP_SELECTED_PERIOD = '��������� ������';
const NETCAT_MODULE_NETSHOP_LAST_PERIOD = '������� ������';

const NETCAT_MODULE_NETSHOP_OVER_PERIOD = '�� ������';
const NETCAT_MODULE_NETSHOP_7_DAYS = '�� 7 ����';
const NETCAT_MODULE_NETSHOP_30_DAYS = '�� 30 ����';
const NETCAT_MODULE_NETSHOP_X_DAYS = '�� %s ����';

const NETCAT_MODULE_NETSHOP_BY_DAYS = '����';
const NETCAT_MODULE_NETSHOP_BY_WEEKS = '�������';
const NETCAT_MODULE_NETSHOP_BY_MONTHS = '�������';
const NETCAT_MODULE_NETSHOP_GROUP_BY = '����������� ��';

const NETCAT_MODULE_NETSHOP_GOODS_BY_QTY = '�� ���������� ������';
const NETCAT_MODULE_NETSHOP_GOODS_BY_SALES_AMOUNT = '�� ����� ������';

const NETCAT_MODULE_NETSHOP_TODAY = '�������';
const NETCAT_MODULE_NETSHOP_YESTERDAY = '�����';
const NETCAT_MODULE_NETSHOP_AVG_FOR_7_DAYS = '� ������� �� 7 ����';

const NETCAT_MODULE_NETSHOP_WEEK = '������';
const NETCAT_MODULE_NETSHOP_LAST_WEEK = '������ �����';
const NETCAT_MODULE_NETSHOP_MONTH = '�����';
const NETCAT_MODULE_NETSHOP_LAST_MONTH = '����� �����';


const NETCAT_MODULE_NETSHOP_1C_INTEGRATION = '1� � ��������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_LEGACY = '(������ ����� �������)';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_IMPORT = '������ ���������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR = '����������� ������ �������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILES_LIST = '������ ������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_FILE = '����';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CREATED_AT = '����� ��������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_IMPORT = '�������������';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_FILE = '������������� ������� ������ ����?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_DELETE_ALL_FILES = '������� ��� �����';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_CONFIRM_DELETE_ALL_FILES = '������������� ������� ��� �����?';
const NETCAT_MODULE_NETSHOP_1C_INTEGRATION_INTERCEPTOR_INTERCEPT_URL = 'URL ��� ��������� ���������';


//Forms
const NETCAT_MODULE_NETSHOP_SAVE = '���������';
const NETCAT_MODULE_NETSHOP_ADMIN_SAVE_OK = '��������� ������� ���������';
const NETCAT_MODULE_NETSHOP_FORMS = '������';
const NETCAT_MODULE_NETSHOP_FORMS_TYPE = '��� ������';

const NETCAT_MODULE_NETSHOP_CASHMEMO = '�������� ���';
const NETCAT_MODULE_NETSHOP_CASHMEMO_COMPANY = '�������� ��������';
const NETCAT_MODULE_NETSHOP_CASHMEMO_ADDRESS = '�����';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER = '��������';
const NETCAT_MODULE_NETSHOP_CASHMEMO_SELLER_POSITION = '���������';
const NETCAT_MODULE_NETSHOP_CASHMEMO_PAYMENT = '�������� �� ����� �������';
const NETCAT_MODULE_NETSHOP_CASHMEMO_DELIVERY = '��������';

const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_FULLNAME = '��� �����������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE1 = '����� ����������� ������ 1';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_ADDRESS_LINE2 = '����� ����������� ������ 2';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_FROM_PHONE = '������� �����������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_FULLNAME = '��� ����������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE1 = '����� ���������� ������ 1';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_ADDRESS_LINE2 = '����� ���������� ������ 2';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_TO_PHONE = '������� ����������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_DESCRIPTION = '�������� ��������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_VALUE = '���������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL_WEIGHT = '���';

const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_LEGAL_ENTITY = '�����������: ����������� ����';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_TO_LEGAL_ENTITY = '����������: ����������� ����';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_STREET = '�����';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_HOUSE = '���';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_BLOCK = '������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_FLOOR = '����';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_APARTMENT = '��������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_INTERCOM = '�������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_CITY = '�����';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_REGION = '������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_FROM_ZIPCODE = '������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA_CASH_ON_DELIVERY = '���������� ������';

const NETCAT_MODULE_NETSHOP_POST_INN = '���';
const NETCAT_MODULE_NETSHOP_POST_KOR = '���/����';
const NETCAT_MODULE_NETSHOP_POST_BANK = '������������ �����';
const NETCAT_MODULE_NETSHOP_POST_ACCOUNT = '���/����';
const NETCAT_MODULE_NETSHOP_POST_BIK = '���';

const NETCAT_MODULE_NETSHOP_TORG12 = '����-12';
const NETCAT_MODULE_NETSHOP_TORG12_NUMBER_TEMPLATE = '������ ������ ���������';
const NETCAT_MODULE_NETSHOP_TORG12_UNIT = '����������� �������������';
const NETCAT_MODULE_NETSHOP_TORG12_CONSIGNEE = '���������������';
const NETCAT_MODULE_NETSHOP_TORG12_SUPPLIER = '���������';
const NETCAT_MODULE_NETSHOP_TORG12_PAYER = '����������';
const NETCAT_MODULE_NETSHOP_TORG12_CONTRACT = '���������';
const NETCAT_MODULE_NETSHOP_TORG12_OKDP = '����';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_NUMBER = '�����. ����. �����';
const NETCAT_MODULE_NETSHOP_TORG12_TRANS_DATE = '�����. ����. ����';
const NETCAT_MODULE_NETSHOP_TORG12_OPERATION_TYPE = '��� ��������';
const NETCAT_MODULE_NETSHOP_TORG12_NDS = '��� (%)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_POSITION = '�������� (���������)';
const NETCAT_MODULE_NETSHOP_TORG12_RESOLVED_BY_SURNAME = '�������� (����������� �������)';
const NETCAT_MODULE_NETSHOP_TORG12_ACCOUNTANT_SURNAME = '��������� (����������� �������)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_POSITION = '�������� (���������)';
const NETCAT_MODULE_NETSHOP_TORG12_RELEASED_BY_SURNAME = '�������� (����������� �������)';

const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_DONT_USE = '�� ������������';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING = '������������ ����� ��� ��������������� ������� �%s�';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_SHOP = '��������� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_FIELD_MAPPING_ORDER = '��������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_SERVICE_SETTINGS = '�������������� ��������� ��� ��������������� ������� �%s�';
const NETCAT_MODULE_NETSHOP_DELIVERY_EMS = 'EMS';
const NETCAT_MODULE_NETSHOP_DELIVERY_RUSSIANPOST = '����� ������';
const NETCAT_MODULE_NETSHOP_EMS_RUSSIA = 'EMS ���������� �����������';
const NETCAT_MODULE_NETSHOP_EMS_INTERNATIONAL = 'EMS ������������� �����������';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_PACKAGE = '����� ������ �. 116';
const NETCAT_MODULE_NETSHOP_RUSSIANPOST_CASH_ON_DELIVERY = '����� ������ �. 113��';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX = '������.��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SENDER_ID = '������������� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_OAUTH_TOKEN = '����� �����������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_KEYS = '����� ��� ������� (������� ���� � ������� � ������ �������� �������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_IDS = '�������������� (������ ���� � ������� � ������ �������� �������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE = '���� �� ������������ �������� �������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_INCLUDED = '������� � ��������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_PAYMENT_CHARGE_EXTRA = '��������� � ������� �� ������ ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_DADATA_API_KEY = 'API-���� � ������� dadata.ru (��������� ��� ��������������� �������� ��������� ������ � ������.��������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE = '������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_IMPORT = '����������';
const NETCAT_MODULE_NETSHOP_DELIVERY_YANDEX_SHIPMENT_TYPE_WITHDRAW = '�����';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK = '����';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_LOGIN = '������� ������ (�����) ��� ���������� (�� �����������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_PASSWORD = '������ (���� ������������ ������� ������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE = '������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_CDEK = '����������� ���������� ���� �������������� �� ������ ����';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SHIPMENT_TYPE_SHOP = '������ ���� �������� ���� � �����������';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_POINT_LINK = '��������� ���������� � ������ ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_RATES = '������, �� ������� ������������ ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_SELECTED_RATES_NUMBER_WARNING = '������������� �������� ����� ������� �������� ������ �������� � ����������� ������� ���������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_CDEK_REQUIRES_LOGIN = '��������� ������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE = '��� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_POST = '��������� � �������� ���������';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_PICKUP = '��������� � ������ ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_TYPE_COURIER = '�������� �������� �� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_WITH_CHECK = '�������� �������� ������ ��� ���������. ';
const NETCAT_MODULE_NETSHOP_DELIVERY_COURIER_TIME = '����� ��������: ';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SELECT_BUTTON = '������� ���� ����� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_DAYS_OF_WEEK_SHORT = '/��/��/��/��/��/��/��';
const NETCAT_MODULE_NETSHOP_DELIVERY_TIME_ALL_DAY = '�������������';
const NETCAT_MODULE_NETSHOP_DELIVERY_ON_MAP = '�� �����';

const NETCAT_MODULE_NETSHOP_DELIVERY_POINTS = '������ ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT = '����� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_LOCATION_NAME = '��������� �����';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_ADDRESS = '�����';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_SCHEDULE = '���������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP = '������ ������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_SHORT = '������';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_GROUP_ANY = '�����';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_CONFIRM_DELETE = '������� ����� ������ �%s�?';
const NETCAT_MODULE_NETSHOP_DELIVERY_POINT_DRAG = '���������� ������, ����� �������� ��� ��������� �� �����';

const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CASH = '������ ��� ��������� ���������';
const NETCAT_MODULE_NETSHOP_DELIVERY_PAYMENT_CARD = '������ ��� ��������� ����������� �������';

const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_FROM = '�';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_TO = '��';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_TIME_PLACEHOLDER = '��:��';
const NETCAT_MODULE_NETSHOP_DELIVERY_SCHEDULE_INTERVAL_REMOVE = '������� ��������?';

const NETCAT_MODULE_NETSHOP_PHONE_EXTENSION = '���.';

const NETCAT_MODULE_NETSHOP_LOCATION_IS_INVALID = '��������� ����� � ����� ������ �� ������. (��� ������� �� ��������� ������ ������� ������� �������� ������.)';
const NETCAT_MODULE_NETSHOP_LOCATION_SUFFIX_PLACEHOLDER = '������� �����';

//Filter
const NETCAT_MODULE_NETSHOP_FILTER_SHOW = '���������';
const NETCAT_MODULE_NETSHOP_FILTER_RESET = '��������';
const NETCAT_MODULE_NETSHOP_FILTER_FROM = '��';
const NETCAT_MODULE_NETSHOP_FILTER_TO = '��';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_TRUE = '����';
const NETCAT_MODULE_NETSHOP_FILTER_BOOLEAN_FALSE = '���';
const NETCAT_MODULE_NETSHOP_FILTER_SETTINGS = '��������� ������ �������';

const NETCAT_MODULE_NETSHOP_EXPORT_COMMERCEML = '������� � 1C';

const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML = '������ ������ � ������� CommerceML';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_NOT_WELL_FORMED = '������ ��� �������� XML-�����';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER = '������ �����';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_0 = '���������������';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_1 = '1� ������ 7.7';
const NETCAT_MODULE_NETSHOP_IMPORT_COMMERCEML_SCHEME_VER_2 = '1� ������ 8.1';
const NETCAT_MODULE_NETSHOP_IMPORT_SUBMIT = '  ������  ';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NAME = '��������';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_NEW = '����� �������� (������� ��������)';
const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_WRONG = '�������� �������� ������';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE = '����';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT = '��� ������ � ���������, ������� ��� � ���������';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DISABLE = '���������';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_DELETE = '�������';
const NETCAT_MODULE_NETSHOP_IMPORT_ACTION_NONEXISTANT_IGNORE = '�������� ��� ����';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS = '��� ����������� ��������� ������ � �����������:';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_SECTIONS_DONT_ADD = '�� ���������';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_ADD_GOODS = '��������� ������ ��� ��������';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_MOVE_SECTIONS = '���������������� ��������� ������ �����';
const NETCAT_MODULE_NETSHOP_IMPORT_DELETE_TMP_FILES = '������� ��������� ����� ����� �������';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_RENAME_SUBDIVISIONS = '��������������� �������, ���� �������� ������ � ���������';
const NETCAT_MODULE_NETSHOP_IMPORT_AUTO_CHANGE_SUBDIVISION_LINKS = '������ ������ �� ��������������� �������';
const NETCAT_MODULE_NETSHOP_IMPORT_DISABLE_OUT_OF_STOCK_ITEMS = '��������� ������, � ������� ���������� �� ������ �� ������� ��� ����� ����';

const NETCAT_MODULE_NETSHOP_IMPORT_MAP_SECTION = '������� ������������ �������� ��������� �������� ��������-��������';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_PRICE = '������� ������������ ����� ��� ����� ��������';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_STORES = '������� ������������ �������� �� ������� ����� ����������';
const NETCAT_MODULE_NETSHOP_IMPORT_MAP_CHARACTERISTICS = '������� ������������ ������������� ��������� ������ ����� ����������';
const NETCAT_MODULE_NETSHOP_IMPORT_REMAIN_IN_STORE = '������� �� ������';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION = '������� ����� ������';
const NETCAT_MODULE_NETSHOP_IMPORT_CREATE_SECTION_PARENT = '������������ ������';
const NETCAT_MODULE_NETSHOP_IMPORT_TEMPLATE = '���������';

const NETCAT_MODULE_NETSHOP_IMPORT_SOURCE_TITLE = '�������� ������������� ������';
const NETCAT_MODULE_NETSHOP_IMPORT_FILE_UPLOAD_TITLE = '�������� ����� � �������';
define("NETCAT_MODULE_NETSHOP_IMPORT_FILE_FTP_PATH", "��� ����� � ���������� " . $SUB_FOLDER . $HTTP_ROOT_PATH . "tmp/");
const NETCAT_MODULE_NETSHOP_IMPORT_ROOT_SUBDIVISION = '��� ���������� �������� ����������� ������� ID ��������� ������� ��������:';

const NETCAT_MODULE_NETSHOP_IMPORT_XML_FILE = '��������� �������������� �����';
const NETCAT_MODULE_NETSHOP_IMPORT_CATALOGUE_STRUCTURE = '������ ��������� ��������';
const NETCAT_MODULE_NETSHOP_IMPORT_OFFERS = '������ ������ �����������';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS = '������ �������';
const NETCAT_MODULE_NETSHOP_IMPORT_ORDERS_ID_MAP = "��� ����������� ������� ������� ��� ���������� ��������� ������������ ���� \"��\" ������";
const NETCAT_MODULE_NETSHOP_IMPORT_COMMODITIES_IN_CATALOGUE = '������ �������� � �������';
const NETCAT_MODULE_NETSHOP_IMPORT_FIELDS_AND_TAGS_COMPLIANCE = '������������ XML-����� ����� � ����������:';

const NETCAT_MODULE_NETSHOP_IMPORT_IGNORE_SECTION = '�� ������� � �������';

const NETCAT_MODULE_NETSHOP_IMPORT_DONE = '��������� ��������� ���������';

const NETCAT_MODULE_NETSHOP_IMPORT_CACHE_CLEARED_PARTIAL = '��������� ����� ������� �� ���������!';

const NETCAT_MODULE_NETSHOP_PHP4_DOMXML_REQUIRED = '������ ������ � ������� XML ����������, ��������� �� ������� ����������� ���������� DOMXML. ����������, ���������� � ������ �������-���������� ��� ��������� ������ ����������.';

const NETCAT_MODULE_NETSHOP_IMPORT_1C_LINK = "��� �������������� �������� ������� ��������� ������ �� ���� �� 1�:
<ol>
 <li>� 1� �������� ���� <b>������ � ����� ������� � ������� CommerceML � �������� ������ ������������ �����������</b></li>
 <li>�������� ����� <b>��������� �� ����</b> � ������� �� ���������� (<b>...</b>)
 <li>� ���������� ���� ������� <b>����� ������</b>, ������� ������������ �����.
     <br>� ���� <b>�����</b> �������:
     <br><b style='background:#DFDFDF'>%s</b>
     <br>���� <b>��� ������������</b> � <b>������ �������</b> �������� �������.
</ol>
<b>�������� ��������:</b> ����� ��������� � 1� ������� �� ����� ��������� ��
����, ���� �� ����� �� ��������� ���� ������� ����� ������ ���������.
��������� ��. � ������������ � ������.";

const NETCAT_MODULE_NETSHOP_IMPORT_1C8_LINK = "��� �������������� �������� ����� ��������� ������ �� ���� �� 1�:
<ol>
 <li>� 1�8 �������� ���� <b>������</b> � <b>����� ������� � WEB-������</b> � <b>��������� ������ ������� � WEB-������</b>;</li>
 <li>�������� ����� <b>������� ����� ��������� ������ � WEB-������</b> � ������� <b>�����</b>;</li>
 <li>� ���������� ���� ������� �������� ��������� ������ �������:
     <br>� ���� <b>����� �����</b> �������:
     <br><b style='background:#DFDFDF'>%s</b>
     <br>���� <b>������������</b> � <b>������</b> ��������� � ������������ � ����������� ������ ��������-������� (<b>SECRET_NAME</b> � <b>SECRET_KEY</b>).</li>
</ol>
<b>�������� ��������:</b> ����� ��������� � 1�8 ������� �� ����� ��������� ��
����, ���� �� ����� �� ��������� ���� ������� ����� ������ ���������.
��������� ��. � ������������ � ������.";

const NETCAT_MODULE_NETSHOP_DISCOUNT_EDIT = '�������������� ������';
const NETCAT_MODULE_NETSHOP_DISCOUNT_MANUAL = '������ ������ ��� ������ ���������� �������';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_GOODS = '� ��������� �������';
const NETCAT_MODULE_NETSHOP_APPLIES_TO_CART = '�� ���� �������';

const NETCAT_MODULE_NETSHOP_DISCOUNT_SELECT_FIELD = '�������� ����...';

const NETCAT_MODULE_NETSHOP_CUSTOMER = '��������';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT_TITLE = '����� �%s �� %%d.%%m.%%Y';
const NETCAT_MODULE_NETSHOP_SHOW_ORDER_STATUS = '�������� ������ ������ �� ��������';
const NETCAT_MODULE_NETSHOP_ORDER_NEW = '�����';
const NETCAT_MODULE_NETSHOP_ORDER_ANY = '�����';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER = '������ �������';
const NETCAT_MODULE_NETSHOP_ORDER_SEARCH = '�����, ������, ������� ��� e-mail';
const NETCAT_MODULE_NETSHOP_ORDER_NO_INFOBLOCK = '�� ��������� ����� ��� �� ������ ������� � ���������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_FILTER = '������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_ALL = '�����';
const NETCAT_MODULE_NETSHOP_DATE_FILTER = '����';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_FROM = '�';
const NETCAT_MODULE_NETSHOP_DATE_FILTER_TO = '��';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER = '�����';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_FROM = '��';
const NETCAT_MODULE_NETSHOP_PRICE_FILTER_TO = '��';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_SUBMIT = '������';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET = '�������� �����';
const NETCAT_MODULE_NETSHOP_ORDER_FILTER_RESET_CONFIRM = '�� �������, ��� ������ �������� �����?';
const NETCAT_MODULE_NETSHOP_ORDER_BACK_TO_LIST = '� ������ �������';
const NETCAT_MODULE_NETSHOP_ORDER_DUPLICATE = '�������������� �����';
const NETCAT_MODULE_NETSHOP_ORDER_CREATE = '�������� �����';
const NETCAT_MODULE_NETSHOP_ORDER_EDIT = '������������� �����';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM = '������� ����� �� ������';
const NETCAT_MODULE_NETSHOP_ORDER_REMOVE_ITEM_CONFIRM = '������� �%s� �� ������?';
const NETCAT_MODULE_NETSHOP_ORDER_ADD_ITEM = '�������� ����� � �����';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED = '������� ����������';
const NETCAT_MODULE_NETSHOP_ORDER_DELETE_SELECTED_CONFIRM = '������� ���������� ������?';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SELECTED = '���������� ����������';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE = '����������� �������';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_CANCEL = '������';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SUBMIT = '����������';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_DESCRIPTION = '����� ������ ����� �����, ���������� ��� ������ �� ��������� �������.';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_BASE = '�����, �� �������� ����� ����� ���������� ������, ������ ������ � ��������:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_SET_STATUS = '���������� ������ ��� ������������ �������:';
const NETCAT_MODULE_NETSHOP_ORDER_MERGE_NO_STATUS_CHANGE = '�� ������';

const NETCAT_MODULE_NETSHOP_EQUALS = '�����';
const NETCAT_MODULE_NETSHOP_MULTIPLY = '��������';
const NETCAT_MODULE_NETSHOP_ADD = '���������';
const NETCAT_MODULE_NETSHOP_SUBSTRACT = '�������';

const NETCAT_MODULE_NETSHOP_OR = '���';


const NETCAT_MODULE_NETSHOP_ITEM_MINIMAL_PRICE_REACHED = '��� ������� ������ ��������� ������ ����������� ���� ������ (%s)';
const NETCAT_MODULE_NETSHOP_CART_MINIMAL_PRICE_REACHED = '��� ������� ������ ��������� ������ ����������� ��������� ������� � ������� (%s)';


const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS = '��������� ��������-��������';
const NETCAT_MODULE_NETSHOP_DEPARTMENT_SETTINGS = '��������� ������� ��������-��������';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS = '����� �����';

// ��� ��������� �� ��������� (�����������, ���� �� ������� �����. ��������� �����)
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT = '%s #'; // # - ���� ������
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMALS = 2; // ���������� ������ ����� �������
const NETCAT_MODULE_NETSHOP_CURRENCY_DEC_POINT = ','; // ����������� ����� � ������� ����� �����
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSAND_SEP = ''; // ����������� ����� �������� (�������� ������!)
// ������ ��������� ������ �����:
const NETCAT_MODULE_NETSHOP_CURRENCY_VAR_NOT_SET = '�� ������� �������� ���������� %s';
const NETCAT_MODULE_NETSHOP_CURRENCY_NOTHING_TO_FETCH = '��� ����� ����� ���������� �������';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_NOTFOUND = '�� ������� �������� �������� ������ �����';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_PARSING_ERROR = '����� ����� �� �������� (������ ��� ��������� ���������)';
const NETCAT_MODULE_NETSHOP_CURRENCY_FETCH_OK = '�������� ����� �����: %s';

const NETCAT_MODULE_NETSHOP_ERROR_CART_EMPTY = '���������� �������� �����, ��������� ������� �����';

const NETCAT_MODULE_NETSHOP_EMAIL_TO_MANAGER_HEADER = '����� � ����� %s';


const NETCAT_MODULE_NETSHOP_PAYMENT_NO_SETTINGS = '�� ������� ��������� ��������� ������� %s';
const NETCAT_MODULE_NETSHOP_PAYMENT_NO_CURRENCY = '�� ������� ������ ��������';
// �, �������� ��������
const NETCAT_MODULE_NETSHOP_PAYMENT_DESCRIPTION = '������ ������ �%s (%s)';
const NETCAT_MODULE_NETSHOP_PAYMENT_SUBMIT = '��������';

// �������� ��������� �������, �����, ����, ����� ����������, id ����������
const NETCAT_MODULE_NETSHOP_PAYMENT_LOG = '�������� ����� %s: %s %s (ID ����������: %s, ID ����������: %s)';
const NETCAT_MODULE_NETSHOP_PAYED_ON = '�������� %d.%m.%Y';
const NETCAT_MODULE_NETSHOP_PAYMENT_DOCUMENT = '��������� �������� � ';


const NETCAT_MODULE_NETSHOP_CART_EMPTY = '���� ������� �����';
const NETCAT_MODULE_NETSHOP_CART_CONTENTS = "<a href='%s'>� ����� �������</a>: %s �� ����� <b>%s</b>";
const NETCAT_MODULE_NETSHOP_CART_CHECKOUT = '�������� �����';

const NETCAT_MODULE_NETSHOP_NO_RIGTHS = '� ��� ��� ���� ��� ������� � ������ ����������';

const NETCAT_MODULE_NETSHOP_SOURCES = '���������';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_SOURCE = '������ �������������� ��������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_NOT_SELECTED = '�� �� ������� �� ������ ���������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETED = '��������� ������� �������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCES_DELETE_ERROR = '��������� ������ ��� �������� ����������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_SAVED = '��������� ���������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NOT_SAVED = '��������� ������ ��� ���������� ��������';
const NETCAT_MODULE_NETSHOP_SOURCES_MAPPING_SAVED = '������������ ���������';
const NETCAT_MODULE_NETSHOP_SOURCES_MAPPING_NOT_SAVED = '��������� ������ ��� ���������� ������������';
const NETCAT_MODULE_NETSHOP_SOURCES_NOT_EXISTS_STORE = '������ �������������� �����';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE_NAME = '�������� ���������';
const NETCAT_MODULE_NETSHOP_SOURCES_CATALOGUE_ID = 'ID �����';
const NETCAT_MODULE_NETSHOP_SOURCES_GOODS_IMPORTED = '������������� �������';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_IMPORTED = '������������� �������';
const NETCAT_MODULE_NETSHOP_SOURCES_LAST_SYNC = '��������� �������������';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT_MAPPING = '�������������<br>������������';
const NETCAT_MODULE_NETSHOP_SOURCES_EDIT = '�������������';
const NETCAT_MODULE_NETSHOP_SOURCES_FIELD_NOT_SELECTED = '�� �������';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SOURCE = '������� ��������';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES = '��� ����������';
const NETCAT_MODULE_NETSHOP_SOURCES_NO_SOURCES_MESSAGE = '�� ���� �������� ������������ ��������� ��������� ������ ������� � 1�, �������� � ������� ���������, ��������������� ����� ������� � ������� CommerceML.<br>
��� �������� ������ ��������� ��������� � ������: ';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_SELECTED = '������� ���������';
const NETCAT_MODULE_NETSHOP_SOURCES_SAVE = '���������';
const NETCAT_MODULE_NETSHOP_SOURCES_REALLY_WANT_TO_DELETE_SOURCES = '�� ������������� ������� ������� ��������� ���������?';
const NETCAT_MODULE_NETSHOP_SOURCES_BACK = '�����';
const NETCAT_MODULE_NETSHOP_SOURCES_CANCEL = '������';
const NETCAT_MODULE_NETSHOP_SOURCES_DELETE_CONFIRM = '����������� ��������';
const NETCAT_MODULE_NETSHOP_SOURCES_SOURCE = '��������';
const NETCAT_MODULE_NETSHOP_SOURCES_SETTINGS = '���������';
const NETCAT_MODULE_NETSHOP_SOURCES_MANUAL_SYNC = '������ ��� ������ �������������';
const NETCAT_MODULE_NETSHOP_SOURCES_OWNER = '��������';
const NETCAT_MODULE_NETSHOP_SOURCES_ID = '�������������';
const NETCAT_MODULE_NETSHOP_SOURCES_NAME = '������������';
const NETCAT_MODULE_NETSHOP_SOURCES_OFFICIAL_NAME = '����������� ������������';
const NETCAT_MODULE_NETSHOP_SOURCES_ADDRESS = '�����';
const NETCAT_MODULE_NETSHOP_SOURCES_INN = '���';
const NETCAT_MODULE_NETSHOP_SOURCES_KPP = '���';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION_NOT_AVAILABLE = '���������� ����������';
const NETCAT_MODULE_NETSHOP_SOURCES_INFORMATION = '����������';
const NETCAT_MODULE_NETSHOP_SOURCES_IMPORTED_STORES = '��������������� ������';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_SOURCES_1C_ID = '������������� CommerceML';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN_GOODS = '������� �������';
const NETCAT_MODULE_NETSHOP_SOURCES_VIEW_GOODS = '���������� ������';
const NETCAT_MODULE_NETSHOP_SOURCES_STORES_NOT_IMPORTED = '�� ������������� �� ������ ������';
const NETCAT_MODULE_NETSHOP_SOURCES_GO_BACK = '��������� �����';
const NETCAT_MODULE_NETSHOP_SOURCES_STORE_REMAIN = '������� �� ������';
const NETCAT_MODULE_NETSHOP_SOURCES_ITEM = '�����';
const NETCAT_MODULE_NETSHOP_SOURCES_REMAIN = '�������';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_CATALOGUE = '�������������� ������� � ���� CommerceML2';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_OFFERS = '�������������� ����������� � ���� CommerceML2';
const NETCAT_MODULE_NETSHOP_SOURCES_EXPORT_ORDERS = '�������������� ������ � ���� CommerceML2';

const NETCAT_MODULE_NETSHOP_SETUP = '��������� ������ �� ����';
const NETCAT_MODULE_NETSHOP_SETUP_ON_SITE = '�� ����� ���� �� ������ ���������� ��������-�������?';
const NETCAT_MODULE_NETSHOP_SETUP_EVERYWHERE = '��������-������� ���������� �� ���� ������ � �������.';
const NETCAT_MODULE_NETSHOP_SETUP_SHOP_SETTINGS_REDIRECT = '����� ������� ������ &laquo;OK&raquo; �� ������ �������������� �� �������� �������������� �������� ��������-��������. ����������, ��������� ��� ����������� ���� � ������� ������ &laquo;��������&raquo;, ����� ������ �� ����� �������� �� ��������� �����.';

const NETCAT_MODULE_NETSHOP_PREV_ORDERS_SUM = '����� ����. �������';
const NETCAT_MODULE_NETSHOP_NOT_REGISTERED_USER = '�������������������� ������������';

const NETCAT_MODULE_NETSHOP_NETSHOP = '��������-�������';
const NETCAT_MODULE_NETSHOP_GOODS_CATALOGUE = '������� �������';
const NETCAT_MODULE_NETSHOP_CART = '�������';
const NETCAT_MODULE_NETSHOP_MAKE_ORDER = '���������� ������';
const NETCAT_MODULE_NETSHOP_EURO = '����, ����, ����, M';
const NETCAT_MODULE_NETSHOP_EUROCENT = '��������, ���������, ����������, M';
const NETCAT_MODULE_NETSHOP_USD = '������, �������, ��������, M';
const NETCAT_MODULE_NETSHOP_CENT = '����, �����, ������, M';
const NETCAT_MODULE_NETSHOP_RUR = '�����, �����, ������, M';
const NETCAT_MODULE_NETSHOP_COPECK = '�������, �������, ������, F';
const NETCAT_MODULE_NETSHOP_CB_RATES = '����� ����� ��';
const NETCAT_MODULE_NETSHOP_PRICE_GROUPS = '���� ��� ������ ����� �������������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHODS = '������� ��������';
const NETCAT_MODULE_NETSHOP_BY_COURIER = '��������';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHODS = '������� ������';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD = '����������� �����';
const NETCAT_MODULE_NETSHOP_CREDIT_CARD_DESCRIPTION = 'VISA, MasterCard, EuroCard, JCB, DCL (����� ������� ASSIST)';
const NETCAT_MODULE_NETSHOP_YANDEX_MONEY = '������.������';
const NETCAT_MODULE_NETSHOP_RBK_MONEY = 'RBK Money';
const NETCAT_MODULE_NETSHOP_WEBMONEY = 'Webmoney';
const NETCAT_MODULE_NETSHOP_CASHLESS = '����������� ������';
const NETCAT_MODULE_NETSHOP_SBERBANK = '����� ��������';
const NETCAT_MODULE_NETSHOP_CASH = '���������';
const NETCAT_MODULE_NETSHOP_EMAIL_TEMPLATES = '������� �����';
const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_HEADER = '��� ����� � %SHOP_SHOPNAME%';
const NETCAT_MODULE_NETSHOP_STORES = '������';
const NETCAT_MODULE_NETSHOP_MAIN_STORE = '�������� �����';

const NETCAT_MODULE_NETSHOP_UNITS = '������� ���������';
const NETCAT_MODULE_NETSHOP_PCS = '��';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS = '������ ������';
const NETCAT_MODULE_NETSHOP_ACCEPTED = '������';
const NETCAT_MODULE_NETSHOP_REJECTED = '��������';
const NETCAT_MODULE_NETSHOP_PAYED = '�������';
const NETCAT_MODULE_NETSHOP_DONE = '��������';

const NETCAT_MODULE_NETSHOP_FULL_NAME = '���';


const NETCAT_MODULE_NETSHOP_ORDER_EMAIL_BODY = '��������� %CUSTOMER_CONTACTNAME%!

��� ����� ������ � ���������.

%CART_CONTENTS%
%CART_DISCOUNTS%
%CART_DELIVERY%%CART_PAYMENT%

�����: %CART_COUNT% �� ����� %CART_SUM%

��� ����, ����� �������� ��� �����, � ���� � ����� ��������� ����� ��������
���� ���������.


� ���������,                     ���.: %SHOP_PHONE%
%SHOP_SHOPNAME%';


const NETCAT_MODULE_NETSHOP_NO_PREV_ORDERS_STATUS_ID = '� ���������� ������ &quot;��������-�������&quot; �� ���������� �������� PREV_ORDERS_SUM_STATUS. ��������� ��. � ������������ �� ������.';

const NETCAT_MODULE_NETSHOP_MONTHS_GENITIVE = '/������/�������/�����/������/���/����/����/�������/��������/�������/������/�������';

const NETCAT_MODULE_NETSHOP_1C_ID = '��';
const NETCAT_MODULE_NETSHOP_1C_CLASSIFICATOR_ID = '����������������';
const NETCAT_MODULE_NETSHOP_1C_NAME = '������������';
const NETCAT_MODULE_NETSHOP_1C_PRICE = '����';
const NETCAT_MODULE_NETSHOP_1C_PRICES = '����';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE = '�������';
const NETCAT_MODULE_NETSHOP_1C_PRICES_TYPE = '�������';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_UNIT = '�������';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TAG_COEFFICIENT = '�����������';
const NETCAT_MODULE_NETSHOP_1C_STORES = '������';
const NETCAT_MODULE_NETSHOP_1C_STORE = '�����';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID = '�������';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY = '�����������������';
const NETCAT_MODULE_NETSHOP_1C_STORE_ID_2 = '��������';
const NETCAT_MODULE_NETSHOP_1C_STORE_QTY_2 = '������������������';
const NETCAT_MODULE_NETSHOP_1C_STORE_REMAIN = '����������������';
const NETCAT_MODULE_NETSHOP_1C_REMAIN = '�������';
const NETCAT_MODULE_NETSHOP_1C_PRICE_TYPE_ID = '����������';
const NETCAT_MODULE_NETSHOP_1C_PRICE_UNIT = '�������������';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY = '������';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY_DEFAULT = '���';
const NETCAT_MODULE_NETSHOP_1C_CURRENCY_DEFAULT_2 = '�';
const NETCAT_MODULE_NETSHOP_1C_GROUP = '������';
const NETCAT_MODULE_NETSHOP_1C_GROUPS = '������';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHARS = '��������������������';
const NETCAT_MODULE_NETSHOP_1C_PRODUCT_CHAR = '��������������������';
const NETCAT_MODULE_NETSHOP_1C_VALUE = '��������';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUES = '������������������';
const NETCAT_MODULE_NETSHOP_1C_REC_VALUE = '�����������������';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUES = '���������������';
const NETCAT_MODULE_NETSHOP_1C_PROPERTIES_VALUE = '����������������';
const NETCAT_MODULE_NETSHOP_1C_TAX = '������������';
const NETCAT_MODULE_NETSHOP_1C_TAXES = '�������������';
const NETCAT_MODULE_NETSHOP_1C_RATE = '������';
const NETCAT_MODULE_NETSHOP_1C_BASE_UNIT = '��������������';
const NETCAT_MODULE_NETSHOP_1C_IMG = '��������';
const NETCAT_MODULE_NETSHOP_1C_QTY = '����������';
const NETCAT_MODULE_NETSHOP_1C_OFFICIAL_NAME = '�����������������������';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS = '����������������';
const NETCAT_MODULE_NETSHOP_1C_ADDRESS_VIEW = '�������������';
const NETCAT_MODULE_NETSHOP_1C_INN = '���';
const NETCAT_MODULE_NETSHOP_1C_KPP = '���';

const NETCAT_MODULE_NETSHOP_RESPONSE_STAT_MESSAGE = '������ ������ � �������';
const NETCAT_MODULE_NETSHOP_RESPONSE_COMMENT = '���������������� �����������';
const NETCAT_MODULE_NETSHOP_ORDERS_NUMBER = '����� �';
const NETCAT_MODULE_NETSHOP_TRANSACTION_NUMBER = '����� ���������� � �������';
const NETCAT_MODULE_NETSHOP_TELEPHONE_NUMBER = '������� ����� ������ �������� � ������� QIWI';
const NETCAT_MODULE_NETSHOP_NO_PAYMENT_SYSTEM = '��������� ������� �� �������';

const NETCAT_MODULE_NETSHOP_ERROR_ASSIST = '������� ������������� � ASSIST';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_MAIL = '��������� ���� Paypal Log-in Email � �������� ������ ��������';
const NETCAT_MODULE_NETSHOP_ERROR_PAYPAL_RATES = '���������� �������� ��������� �����';
const NETCAT_MODULE_NETSHOP_ERROR_QIWI = '������� ����� �������� � ������ � ������� QIWI';
const NETCAT_MODULE_NETSHOP_ERROR_MAIL = '������� ����� ��������, ���� �������� � ����������������� ��� �� ����� � ������� ������@mail.ru';
const NETCAT_MODULE_NETSHOP_ERROR_ROBOKASSA = '������� �����, ������ #1 � ������ #2 � ������� Robokassa';
const NETCAT_MODULE_NETSHOP_ERROR_WEBMONEY = '������� ������� �������� � secret key � ������� Webmoney';
const NETCAT_MODULE_NETSHOP_ERROR_YANDEX = '��������� ��������� ������-������';
const NETCAT_MODULE_NETSHOP_ERROR_PAYMASTER = '������� ������������� �������� � ��������� ����� � ������� Paymaster';

const NETCAT_MODULE_NETSHOP_SBERBANK_PRINT_BILL = '����������� ���������';
const NETCAT_MODULE_NETSHOP_SBERBANK_NOTICE = '���������';
const NETCAT_MODULE_NETSHOP_SBERBANK_CASHIER = '������';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_RECEIVER = '���������� �������';
const NETCAT_MODULE_NETSHOP_SBERBANK_INN = '���';
const NETCAT_MODULE_NETSHOP_SBERBANK_RS = '�/c';
const NETCAT_MODULE_NETSHOP_SBERBANK_KS = '����.��.';
const NETCAT_MODULE_NETSHOP_SBERBANK_KPP = '���';
const NETCAT_MODULE_NETSHOP_SBERBANK_BIK = '���';
const NETCAT_MODULE_NETSHOP_SBERBANK_NAME_ADDR = '�������, �. �., �����';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYMENT_TYPE = '��� �������';
const NETCAT_MODULE_NETSHOP_SBERBANK_DATE = '����';
const NETCAT_MODULE_NETSHOP_SBERBANK_AMOUNT = '�����';
const NETCAT_MODULE_NETSHOP_SBERBANK_PAYER = '����������';
const NETCAT_MODULE_NETSHOP_SBERBANK_RECEIPT = '���������';

const NETCAT_MODULE_NETSHOP_BANK_PRINT_BILL = '����������� ����';
const NETCAT_MODULE_NETSHOP_BANK_ADDRESS = '�����';
const NETCAT_MODULE_NETSHOP_BANK_PHONE = '���.';
const NETCAT_MODULE_NETSHOP_BANK_EXAMPLE = '������� ���������� ���������� ���������';
const NETCAT_MODULE_NETSHOP_BANK_INN = '���';
const NETCAT_MODULE_NETSHOP_BANK_KPP = '���';
const NETCAT_MODULE_NETSHOP_BANK_BILL = '��.';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER = '����������';
const NETCAT_MODULE_NETSHOP_BANK_RECEIVER_BANK = '���� ����������';
const NETCAT_MODULE_NETSHOP_BANK_BIK = '���';
const NETCAT_MODULE_NETSHOP_BANK_BILL_FULL = '����';
const NETCAT_MODULE_NETSHOP_BANK_BILL_SUFFIX = '/�';
const NETCAT_MODULE_NETSHOP_BANK_FROM = '��';
const NETCAT_MODULE_NETSHOP_BANK_YEAR = '�.';
const NETCAT_MODULE_NETSHOP_BANK_CUSTOMER = '��������';
const NETCAT_MODULE_NETSHOP_BANK_PAYER = '����������';
const NETCAT_MODULE_NETSHOP_BANK_GOODS_TITLE = '������������<br>������';
const NETCAT_MODULE_NETSHOP_BANK_UNIT = '�������<br>���������';
const NETCAT_MODULE_NETSHOP_BANK_AMOUNT = '����������';
const NETCAT_MODULE_NETSHOP_BANK_PRICE = '����';
const NETCAT_MODULE_NETSHOP_BANK_SUM = '�����';
const NETCAT_MODULE_NETSHOP_BANK_SHIPPING = '��������';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL = '�����';
const NETCAT_MODULE_NETSHOP_BANK_VAT_INCLUDED = '� ��� ����� ���';
const NETCAT_MODULE_NETSHOP_BANK_VAT_NOT_INCLUDED = '��� �� ������������';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_SUM = '����� � ������';
const NETCAT_MODULE_NETSHOP_BANK_TOTAL_TITLES = '����� ������������';
const NETCAT_MODULE_NETSHOP_BANK_WITH_SUM = '�� �����';
const NETCAT_MODULE_NETSHOP_BANK_TIP = '������ � ������ �� ����� �� �� �� ���� ����������� �����';

const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_DATA_SECTION = '���������� ������ � ����� ��������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_DATA_SECTION = '������ ���������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CUSTOMER_ADDRESS_SECTION = '����� ��������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEMS_SECTION = '������ ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_METHOD_SECTION = '������ ��������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_METHOD_SECTION = '������ ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_AND_PAYMENT_METHOD_SECTION = '������� �������� � ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_DELIVERY_METHODS = '�� ������� ��������� ������ �������� ������ ������ �� ���������� ������. ��� ��������� ������� �������� � ���� �������� ��������� ������ ��������.';
const NETCAT_MODULE_NETSHOP_ADMIN_NO_AVAILABLE_DELIVERY_METHODS = '�� ������� ��������� ������ �������� ������ �� ���������� ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR = '�� ������� ��������� ��������� � ����� ��������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_ERROR_NO_RESPONSE = '�� ������� ����� �� �������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE = '���������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_PRICE_UNKNOWN = '����������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATE = '��������� ���� ��������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_DATES = '��������� ���� ��������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_ESTIMATE_LOADING = ' (������ �����������) ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS = '�� ������� ��������� ������ ������ ��� ������ ������. ��� ��������� ������� ������ � ���� �������� ��������� ������ ��������.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NO_AVAILABLE_PAYMENT_METHODS_ADMIN = '��� ����������� ������� ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_EXTRA_CHARGE = '�������������� ����: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CONFIRMATION_SECTION = '������������� ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PLEASE_REVIEW_ORDER = '����������, ��������� ������������ ��������� ������.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_TOTALS_SECTION = '�����';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CART_TOTALS = '��������� �������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ITEM_TOTALS = '��������� ���� �������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_ORDER_TOTALS = '����� ����� � ������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BUTTON = '�������� �����';
const NETCAT_MODULE_NETSHOP_CHECKOUT_PREV_PAGE_BUTTON = '�����';
const NETCAT_MODULE_NETSHOP_CHECKOUT_NEXT_PAGE_BUTTON = '�����';
const NETCAT_MODULE_NETSHOP_CHECKOUT_CHANGE_BUTTON = '��������';

const NETCAT_MODULE_NETSHOP_CHECKOUT_DELIVERY_INCORRECT_METHOD = '������: ������ ����������� ��� ������ ������ ������ ��������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_METHOD = '������ �������� ������: ';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_DELIVERY_POINT = '����� ������ ������: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_PAYMENT_INCORRECT_METHOD = '������: ������ ����������� ��� ������ ������ ������ ������';
const NETCAT_MODULE_NETSHOP_CHECKOUT_SELECTED_PAYMENT_METHOD = '������ ������ ������: ';

const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_YES = '��';
const NETCAT_MODULE_NETSHOP_CHECKOUT_BOOLEAN_FIELD_NO = '���';

const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_DELIVERY_METHOD = '������ ������������ ������ ��������.';
const NETCAT_MODULE_NETSHOP_CHECKOUT_INCORRECT_PAYMENT_METHOD = '������ ������������ ������ ������.';

const NETCAT_MODULE_NETSHOP_ITEM_CANNOT_BE_ORDERED = '����� �%s� � ��������� ����� ���������� ��� ������.';
const NETCAT_MODULE_NETSHOP_ITEM_QTY_CHANGED = '���������� ������ �%s� � ����� ������� ���� ��������, ��� ��� ���������� ������ �� ������ ����� ���������� ����.';

const NETCAT_MODULE_NETSHOP_NO_PAYMENT_MODULE = '���������� � ��������� ��������� ���������, ��������� � ����� �������� ������� ����������� ������ ����� ��������';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_PAYMENT_SYSTEM = '�������� �������';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_NO_PAYMENT_SYSTEM_OPTION = '-- ��� --';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_ABSOLUTE = '�������������� ���� (���������� ��������)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_EXTRA_CHARGE_RELATIVE = '�������������� ���� (������� �� ����� ��������� ������)';
const NETCAT_MODULE_NETSHOP_PAYMENT_METHOD_DELIVERY = '����������� � ��������� ������ ��� ��������� ���������� ������ ��������';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD = '������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE = '������ ��������������� ������� ��������� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_NO_SERVICE_OPTION = '-- ��� --';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_ABSOLUTE = '�������������� ���� (���������� ��������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_EXTRA_CHARGE_RELATIVE = '�������������� ���� (������� �� ����� ��������� ������)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_COST = '���������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_CALCULATED = '�������������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MIN_DAYS = '����������� ����� ���� ��� �������� (���� ���� �������� �������������� �������������, ������������ � ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MAX_DAYS = '������������ ����� ���� ��� �������� (���� ���� �������� �������������� �������������, ������������ � ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SHIPMENT_DAYS = '���, �� ������� ������������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SAME_DAY_SHIPMENT_TIME = '�����, �� �������� �������� �������� � ��� �� ����';

const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FROM_CITY = '����� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_REGION = '������ (�������) ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_DISTRICT = '����� ������� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_CITY = '����� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ADDRESS = '����� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_ZIP_CODE = '������ ����������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_STREET = '����� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSE = '��� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_HOUSING = '������ (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_BUILDING = '�������� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_TO_FLAT = '��������/���� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FULL_NAME = '�.�.�. �������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_LAST_NAME = '������� ������� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_FIRST_NAME = '��� ������� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_MIDDLE_NAME = '�������� ������� (���� ����� ���� ����)';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_ID = '������ ������������ ������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_INCORRECT_METHOD_ID = '������ ������������ ������ ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_WEIGHT = '��� ������� ��� ���������� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_RECIPIENT_ADDRESS = '�� ������� ����� ����� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_SENDER_ADDRESS = '�� ������� ����� ����� ��������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_INCORRECT_REMOTE_SERVER_RESPONSE = '������ � ������ ��������� �������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_SERVICE_NO_REMOTE_SERVER_RESPONSE = '�� ������� ����� �� ��������� �������';
const NETCAT_MODULE_NETSHOP_DELIVERY_METHOD_MISSING_SETTING = '� ���������� ������� �������� �� ������� �������� �%s�';

const NETCAT_MODULE_NETSHOP_DELIVERY_FREE_OF_CHARGE = '���������';
const NETCAT_MODULE_NETSHOP_DELIVERY_DISCOUNT_STRING = '(������: %s)';


const NETCAT_MODULE_NETSHOP_GENITIVE_DAY_FORMAT = 'j'; // English: "jS"  (format as specified for the date() function)
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT = '%s %s � %s %s'; // day 1, month1, day 2, month 2. English: '%2$s, %1$2 to %3$s %2$s'
const NETCAT_MODULE_NETSHOP_DATE_RANGE_FORMAT_ONE_MONTH = '%s&#x200A;�&#x200A;%s %s'; // day 1, day 2, month. English: '%3$s, %1$s � %3$s, %2$s'
const NETCAT_MODULE_NETSHOP_DAY_AND_MONTH_FORMAT = '%s %s'; // day, month. English: '%2$s, %1$s'
const NETCAT_MODULE_NETSHOP_SHORT_DAY_OF_WEEK_RANGE = '%s�%s'; // dow-dow
const NETCAT_MODULE_NETSHOP_DATE_TODAY = '�������';
const NETCAT_MODULE_NETSHOP_DATE_TOMORROW = '������';

// (Common)

const NETCAT_MODULE_NETSHOP_DATETIME_FORMAT = 'd.m.Y H:i';
const NETCAT_MODULE_NETSHOP_DATE_FORMAT = 'd.m.Y';

const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS = '�������� ������';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANT = '�������� ����';
const NETCAT_MODULE_NETSHOP_ADD_ITEM_VARIANTS = '�������� ���������';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ENABLE_ALL = '�������� ���';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DISABLE_ALL = '��������� ���';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_EDIT_ALL = '������������� ���';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_DELETE_ALL = '������� ��� ��������';
const NETCAT_MODULE_NETSHOP_ITEM_PARENT = '�������� ������� ������';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRIORITY = '���������� ��� ��������� �������, � ������� ��������� ��������';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_PRICE_RANGE = "��&nbsp;<span class='tpl-value'>%s</span> ��&nbsp;<span class='tpl-value'>%s</span>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_HEADER = '���������� ��������� ������ �%s�';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_ADD_MULTIPLE_DESCRIPTION =
    "�������� ����, �� ������� ���������� �������� ������, � ������� �������� ��� ��������� ����� ����� ����� � �������.<br>
    ���� ������� ��������� �����, ����� ������� ������ �� ����� ���������� ����������� ��������� �������������.<br>
    ���� � ���� ������� ������ ���� ��������, ��� ����� ����������� � ���� ����������� ��������� ������.<br>
    ��������� �������� ����� ����� ������������� �� ��������� �������� ������.<br>
    �������� ��������� ����� ������������� ������������� �� ������ ��������� �������� ����� (���� �� ���� ������� �������� ��� ���� ��������� ��������). ������� ����� ������ �� ������� ������������ �������� � �������� ��������.<br>";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_SELECT_PROPERTY = '�������� �������� ������';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE = '��������� ���� �%s�';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_FILL_ARTICLE_COMMENT = "�������� ���� �%s� � ����������� ��������� ������� ����� ������������ �� �������� ���� �%1\$s� ��������� ������ � ����������� ������ ��������, ���������� �������";
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_CREATE = '�������';
const NETCAT_MODULE_NETSHOP_ITEM_VARIANTS_COUNT = '���������� ����������� ��������� ������:';

const NETCAT_MODULE_NETSHOP_LIST_ACTIONS_HEADER = '��������';
const NETCAT_MODULE_NETSHOP_ACTION_EDIT = '�������������';
const NETCAT_MODULE_NETSHOP_ACTION_DELETE = '�������';
const NETCAT_MODULE_NETSHOP_LIST_PREVIOUS_PAGE = '���������� ��������';
const NETCAT_MODULE_NETSHOP_LIST_NEXT_PAGE = '��������� ��������';

const NETCAT_MODULE_NETSHOP_NAME_FIELD = '��������';
const NETCAT_MODULE_NETSHOP_DESCRIPTION_FIELD = '��������';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD = '�������';
const NETCAT_MODULE_NETSHOP_NAME_AND_CONDITIONS_HEADER = '��������, �������';
const NETCAT_MODULE_NETSHOP_UTM_FIELD = 'UTM �����';

const NETCAT_MODULE_NETSHOP_BUTTON_ADD = '��������';
const NETCAT_MODULE_NETSHOP_BUTTON_BACK = '�����';
const NETCAT_MODULE_NETSHOP_BUTTON_SAVE = '���������';
const NETCAT_MODULE_NETSHOP_BUTTON_APPLY_FILTER = '���������';
const NETCAT_MODULE_NETSHOP_BUTTON_CLOSE_DIALOG = '�������';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE_SELECTED = '������� ���������';
const NETCAT_MODULE_NETSHOP_BUTTON_DELETE = '�������';

const NETCAT_MODULE_NETSHOP_UNABLE_TO_SAVE_RECORD = "������ ��� ���������� ������. <a href='javascript:history:back()'>��������� � ��������������</a>";

// Settings
const NETCAT_MODULE_NETSHOP_SHOP_SETTINGS_TAB = '�����������';
const NETCAT_MODULE_NETSHOP_EXTRA_SETTINGS_TAB = '���������';
const NETCAT_MODULE_NETSHOP_PRICE_RULES_TAB = '����';

const NETCAT_MODULE_NETSHOP_SETTINGS_NO_CURRENCIES_ON_SITE = '�� ��������� ����� �� ������� �� ���� ������.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_OFFICIAL_RATES_ON_SITE = '�� ��������� ����� ��� ���������� �� ����������� ������ �����.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PRICE_RULES_ON_SITE = '�� ��������� ����� �� ������ ������� ������ ���.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_PAYMENT_METHODS_ON_SITE = '�� ��������� ����� �� ������� ������� ������.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_METHODS_ON_SITE = '�� ��������� ����� �� ������� ������� ��������.';
const NETCAT_MODULE_NETSHOP_SETTINGS_NO_DELIVERY_POINTS_ON_SITE = '�� ��������� ����� ������ ������ ������� ���� �� ���������.';

const NETCAT_MODULE_NETSHOP_CURRENCY = '������';
const NETCAT_MODULE_NETSHOP_CURRENCY_SETTINGS_TAB = '���������';
const NETCAT_MODULE_NETSHOP_CURRENCY_RATE = '���� �� ��������� � �������� ������ �� (���.)';
const NETCAT_MODULE_NETSHOP_CURRENCY_SHORT_NAME = '����������� ������������ ������';
const NETCAT_MODULE_NETSHOP_CURRENCY_FULL_NAME = '������ �������� ������ (��.�. ��., ��.�. ���., ��.�. ���.)';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_PART_NAME = '������������ ������� ����� ������';
const NETCAT_MODULE_NETSHOP_CURRENCY_FORMAT_RULE = '������ ������';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_POINTS = '���������� ������ ����� �������';
const NETCAT_MODULE_NETSHOP_CURRENCY_DECIMAL_SEPARATOR = '����������� ������� � ����� �����';
const NETCAT_MODULE_NETSHOP_CURRENCY_THOUSANDS_SEPARATOR = '����������� ����� ��������';
const NETCAT_MODULE_NETSHOP_DAYS_TO_KEEP_CURRENCY_RATES = '������� ���� ������� ����������� ����� �����';
const NETCAT_MODULE_NETSHOP_RULE = '�������';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_NAME = '�������� �������';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_PRICE_COLUMN = '������� ���';
const NETCAT_MODULE_NETSHOP_PRICE_RULE_CONFIRM_DELETE = '������� ������� �%s�?';
const NETCAT_MODULE_NETSHOP_ORDERS_COMPONENT = '��������� �������';
const NETCAT_MODULE_NETSHOP_DEFAULT_FULL_NAME_TEMPLATE = '������ ������� �������� ������ (FullName) �� ���������';
const NETCAT_MODULE_NETSHOP_ORDERS_SUM_STATUS = '������� ������� ��� ������� ����� �������';
const NETCAT_MODULE_NETSHOP_1C_EXPORT_ORDERS_STATUS = '������� ������� ��� �������� � 1�, ��������';
const NETCAT_MODULE_NETSHOP_PAID_ORDER_STATUS = '������, � ������� ��������� ����� � ������ �������� ������';
const NETCAT_MODULE_NETSHOP_REJECTED_ORDER_STATUS = '������, � ������� ��������� ����� � ������ ������ ������';

// _MAILER_

const NETCAT_MODULE_NETSHOP_MAILER_ROOT = '������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATES = '������ �����';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_MAIL = '������ ��������';
const NETCAT_MODULE_NETSHOP_MAILER_MANAGER_MAIL = '������ ����������';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATES = '������'; // ������ ������� �����
const NETCAT_MODULE_NETSHOP_MAILER_NO_MASTER_TEMPLATES = '������ ����� ��� ��������-�������� �� ��������� ����� �����������.';
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER = '����� �����'; // ������ ������ ������� ��� ���������� ������
const NETCAT_MODULE_NETSHOP_MAILER_CUSTOMER_ORDER_REGISTER = '����� � �����������';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_CHANGE_ITEMS = '��������� �������';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS = '������ &laquo;%s&raquo;';
const NETCAT_MODULE_NETSHOP_MAILER_ORDER_STATUS_SHORT = '&laquo;%s&raquo;';

const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_HEADER_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_IS_USED = '���������� ������� ������ �����, ��������� �� ������������ � �������� �����';
const NETCAT_MODULE_NETSHOP_MAILER_MASTER_TEMPLATE_CONFIRM_DELETE = '������� ����� ����� �%s�?';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SUBJECT = '��������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_BODY = '���� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_PARENT_TEMPLATE = '����� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_NO_PARENT_TEMPLATE = '��� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_IS_ENABLED = '�������� ������ ��� �������� ������ � ������ ������';

const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW = '��������������� �������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_TO = '����:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SUBJECT = '����:';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_NO_SUBJECT = '��� ����';
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SEND_PROMPT = "������� �����, �� ������� ������� ������� ����� ������� ������.\n(����� ������� ��������� ������� ����� �������.)";
const NETCAT_MODULE_NETSHOP_MAILER_MESSAGE_PREVIEW_SENT = '������ ����������';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_CHILD_TEMPLATE = '�������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_INSERT_VARIABLES = '�������� ��������...';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SITE_VARIABLES = '����';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_SHOP_VARIABLES = '��������� ��������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_USER_VARIABLES = '������������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_VARIABLES = '�����';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_CART_VARIABLES = '������ � �������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_COUPON_VARIABLES = '�����';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_URL = '����� �������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_PRICE_AS_DEFINED = '������� ���� (��� ������� � ���� Price ������)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ITEM_NON_FORMATTED_VALUE = ' (��� ��������������)';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DATE = '���� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ITEM_PRICE = '��������� ������� ��� ������ �� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE = '��������� �������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_PRICE_WITHOUT_DISCOUNT = '��������� ������� ��� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_ITEMS_DISCOUNT = '����� ������ �� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_ORDER_DISCOUNT = '����� ������ �� ����� (������, ��������)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_CART_DISCOUNT = '����� ������ �� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DELIVERY_DISCOUNT = '����� ������ �� ��������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_PRICE = '����� � ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_TOTAL_DISCOUNT = '����� ����� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_NAME = '�������� ������� ��������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_METHOD_VARIANT_NAME = '������ ��������� �������� ������� �������� (� ��������� �� ��������)';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_ADDRESS = '����� �������� ��� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_NAME = '�������� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_DESCRIPTION = '���������� � ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_ADDRESS = '����� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_PHONES = '�������� ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_POINT_SCHEDULE = '����� ������ ������ ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_DATES = '��������� ���� ��������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE = '��������� �������� ��� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_DELIVERY_PRICE_WITH_DISCOUNT = '��������� �������� � ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_METHOD_NAME = '�������� ������� ������';
const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_PAYMENT_CHARGE = '�������������� ���� �� ������ ������';

const NETCAT_MODULE_NETSHOP_MAILER_TEMPLATE_ORDER_ID = '������������� ������';

const NETCAT_MODULE_NETSHOP_MAILER_RULES = '�������������� ������ ����������';
const NETCAT_MODULE_NETSHOP_MAILER_RULE_ADDRESS = '����� ����������� �����';
const NETCAT_MODULE_NETSHOP_MAILER_NO_RULES_ON_SITE = '�� ��������� ����� �� ������� �� ���� ������� ������� ������� ����������.';
const NETCAT_MODULE_NETSHOP_MAILER_RULES_CONFIRM_DELETE = '������� ������� �%s�?';

// _CONDITION_

// ��������� ��� ����������� ���������� �������� �������
const NETCAT_MODULE_NETSHOP_OP_EQ = '%s';
const NETCAT_MODULE_NETSHOP_OP_EQ_IS = '� %s';
const NETCAT_MODULE_NETSHOP_OP_NE = '�� %s';
const NETCAT_MODULE_NETSHOP_OP_GT = '����� %s';
const NETCAT_MODULE_NETSHOP_OP_GE = '�� ����� %s';
const NETCAT_MODULE_NETSHOP_OP_LT = '����� %s';
const NETCAT_MODULE_NETSHOP_OP_LE = '�� ����� %s';
const NETCAT_MODULE_NETSHOP_OP_GT_DATE = '������� %s';
const NETCAT_MODULE_NETSHOP_OP_GE_DATE = '�� ����� %s';
const NETCAT_MODULE_NETSHOP_OP_LT_DATE = '����� %s';
const NETCAT_MODULE_NETSHOP_OP_LE_DATE = '������� %s';
const NETCAT_MODULE_NETSHOP_OP_CONTAINS = '�������� �%s�';
const NETCAT_MODULE_NETSHOP_OP_NOTCONTAINS = '�� �������� �%s�';
const NETCAT_MODULE_NETSHOP_OP_BEGINS = '���������� � �%s�';

const NETCAT_MODULE_NETSHOP_COND_QUOTED_VALUE = '�%s�';
const NETCAT_MODULE_NETSHOP_COND_OR = ', ��� '; // spaces are important
const NETCAT_MODULE_NETSHOP_COND_AND = '; ';
const NETCAT_MODULE_NETSHOP_COND_OR_SAME = ', ';
const NETCAT_MODULE_NETSHOP_COND_AND_SAME = ' � ';
const NETCAT_MODULE_NETSHOP_COND_DUMMY = '(��� �������, ����������� � ������� �������� ������)';
const NETCAT_MODULE_NETSHOP_COND_CART_COUNT = '���������� ������������ � ������ �';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEM = '����� ��������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT = '����� ��������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMCOMPONENT_FROM = '����������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB = '����� ��������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM = '�� �������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPARENTSUB_FROM_DESCENDANTS = '� ��� �����������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB = '����� ��������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMSUB_FROM = '�� �������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY = '����� ��������';
const NETCAT_MODULE_NETSHOP_COND_CART_ITEMPROPERTY_WITH = ', � �������';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMAX = '������������ �������� �� ���� �%s� � ������ �';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYMIN = '����������� �������� �� ���� �%s� � ������ �';
const NETCAT_MODULE_NETSHOP_COND_CART_PROPERTYSUM = '����� �� ���� �%s� (� ������ ����������) � ������ �';
const NETCAT_MODULE_NETSHOP_COND_CART_TOTALPRICE = '��������� �������';
const NETCAT_MODULE_NETSHOP_COND_CART_SUM = '��������� ������� (��� ������ �� ������)';
const NETCAT_MODULE_NETSHOP_COND_ITEM = '�� �����';
const NETCAT_MODULE_NETSHOP_COND_ITEM_COMPONENT = '�� ������';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB = '�� ������ �������';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_NE = '�� ������ �� �� �������';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PARENTSUB_DESCENDANTS = '� ��� �����������';
const NETCAT_MODULE_NETSHOP_COND_ITEM_PROPERTY = '�� ������, � �������';
const NETCAT_MODULE_NETSHOP_COND_ORDER_DELIVERYMETHOD = '������ �������� �';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PAYMENTMETHOD = '������ ������ �';
const NETCAT_MODULE_NETSHOP_COND_ORDER_PROPERTY = '������, � �������';
const NETCAT_MODULE_NETSHOP_COND_ORDER_STATUS = '������ ������ �';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COMPONENT = '������ ����� ������� ������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_COUNT = '���������� ����������� ������� �';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM = '������ ��������� �����';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_ITEM_UNITS = '��. �������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUM = '����� �������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMDATES = '����� �������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD = '����� �������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_DAY = '���� ��� ����';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_WEEK = '������ ������ ������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_MONTH = '����� ������ �������';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_YEAR = '��� ���� ���';
const NETCAT_MODULE_NETSHOP_COND_ORDERS_SUMPERIOD_FOR = '��';
const NETCAT_MODULE_NETSHOP_COND_USER = '������������ �';
const NETCAT_MODULE_NETSHOP_COND_USER_CREATED = '���� ����������� ������������ �';
const NETCAT_MODULE_NETSHOP_COND_USER_GROUP = '������ ������������ �';
const NETCAT_MODULE_NETSHOP_COND_USER_PROPERTY = '��� �������������, � �������';
const NETCAT_MODULE_NETSHOP_COND_DATE_FROM = '�';
const NETCAT_MODULE_NETSHOP_COND_DATE_TO = '��';
const NETCAT_MODULE_NETSHOP_COND_TIME_INTERVAL = '%s&#x200A;�&#x200A;%s';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_TRUE = '�������';
const NETCAT_MODULE_NETSHOP_COND_BOOLEAN_FALSE = '������';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_ON_LIST = '� �����������/�� �������/� �����/� �������/� �������/� �������/� �����������';
const NETCAT_MODULE_NETSHOP_COND_DAYOFWEEK_EXCEPT_LIST = '����� ������������/����� ��������/����� �����/����� ��������/����� �������/����� �������/����� �����������';
const NETCAT_MODULE_NETSHOP_COND = '�������: ';

const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_COMPONENT = '[�������������� ���������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_FIELD = '[������ � �������: ���� �� ����������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_VALUE = '[�������������� ��������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_SUB = '[�������������� ������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_ITEM = '[�������������� �����]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER_GROUP = '[�������������� ������ �������������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_USER = '[�������������� ������������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_DELIVERY_METHOD = '[�������������� ������ ��������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_PAYMENT_METHOD = '[�������������� ������ ������]';
const NETCAT_MODULE_NETSHOP_COND_NONEXISTENT_STATUS = '[�������������� ������ ������]';

// ������, ������������ � �������� ��������� �������
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_NOTICE = '������ �� �������� �� �������� � ������������� �������� ������.';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_FROM = '����� ������ ��';
const NETCAT_MODULE_NETSHOP_SIMPLE_CONDITION_CART_TOTALPRICE_TO = '��';

// ������, ������������ � ��������� �������
const NETCAT_MODULE_NETSHOP_CONDITION_NO_ADVANCED = '������ �� �������� �� �������� � ������� �������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_AND = '�';
const NETCAT_MODULE_NETSHOP_CONDITION_OR = '���';
const NETCAT_MODULE_NETSHOP_CONDITION_AND_DESCRIPTION = '��� ������� �����:';
const NETCAT_MODULE_NETSHOP_CONDITION_OR_DESCRIPTION = '����� �� ������� �����:';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP = '������� ������ �������';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION = '������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_ALL_CONFIRMATION = '������� ��� �������?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_GROUP_CONFIRMATION = '������� ������ �������?';
const NETCAT_MODULE_NETSHOP_CONDITION_REMOVE_CONDITION_CONFIRMATION = '������� ������� �%s�?';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD = '��������...';
const NETCAT_MODULE_NETSHOP_CONDITION_ADD_GROUP = '�������� ������ �������';

const NETCAT_MODULE_NETSHOP_CONDITION_EQUALS = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_EQUALS = '�� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_THAN = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_LESS_OR_EQUALS = '�� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_THAN = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_GREATER_OR_EQUALS = '�� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_CONTAINS = '��������';
const NETCAT_MODULE_NETSHOP_CONDITION_NOT_CONTAINS = '�� ��������';
const NETCAT_MODULE_NETSHOP_CONDITION_BEGINS_WITH = '���������� �';
const NETCAT_MODULE_NETSHOP_CONDITION_TRUE = '��';
const NETCAT_MODULE_NETSHOP_CONDITION_FALSE = '���';
const NETCAT_MODULE_NETSHOP_CONDITION_INCLUSIVE = '������������';

const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_CONDITION_TYPE = '�������� ��� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_SEARCH_NO_RESULTS = '�� �������: ';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_GOODS = '��������� ������'; // '�������� ������'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COMPONENT = '���������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_COMPONENT = '�������� ���������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM = '�������� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_ITEM = '(�������������� �����)';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_WITHOUT_NAME = '����� ��� ��������';
const NETCAT_MODULE_NETSHOP_CONDITION_ITEM_SELECTION = '����� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_CANCEL_BUTTON = '������';
const NETCAT_MODULE_NETSHOP_CONDITION_DIALOG_SELECT_BUTTON = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_SUBDIVISION_HAS_LIST_NO_COMPONENTS_OR_OBJECTS = '� ��������� ������� ����������� ���������� ��� ������� �������.';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION = '������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SUBDIVISION_DESCENDANTS = '������ � ��� ����������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_SUBDIVISION = '�������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ITEM_FIELD = '�������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_COMMON_FIELDS = '��� ����������';
const NETCAT_MODULE_NETSHOP_CONDITION_FIELD_BELONGS_TO_ALL_COMPONENTS = '��� ����������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ITEM_FIELD = '�������� �������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_VALUE = '...'; // sic

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_USER = '��������� ������������'; // '�������� ������������'

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER = '������������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_GROUP = '������ ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_CREATED = '���� ����������� ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FIELD = '�������� ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER = '�������� ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_NONEXISTENT_USER = '�������������� ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_SELECTION = '����� ������������';
const NETCAT_MODULE_NETSHOP_CONDITION_USER_LIST_NO_RESULTS = '� ��������� ������ ��� �������������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_GROUP = '�������� ������ �������������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_USER_PROPERTY = '�������� ����';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_CART = '������� (������ ������)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM_WITH_ITEM_DISCOUNTS = '����� ��������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_SUM = '����� ��������� ������� ��� ����� ������ �� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_POSITION_COUNT = '���������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_POSITION_COUNT = '���������� ������� � �������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COMPONENT = '���������� ������� �� ����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION = '���������� ������� �� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_SUBDIVISION_DESCENDANTS = '���������� ������� �� ������� � �����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_COUNT = '���������� ������������ ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_ITEM_FIELD = '���������� ������� � ����������� ���������';

const NETCAT_MODULE_NETSHOP_CONDITION_CART_CONTAINS = '������� ��������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_COMPONENT = '��. ������� �� ����������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION = '��. ������� �� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF_ITEMS_FROM_SUBDIVISION_DESCENDANTS = '��. ������� �� ������� � �����������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_PIECES_OF = '��. ������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_ITEM_FIELD = '��. ������, � ������� ��������';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_SUM = '����� �� ���� ������� (� ������ ����������)';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_SUM = '����� �� ���� ������� � ������� �� ���� (� ������ ����������)';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MIN = '������� �� ���� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MIN = '����������� �������� ����� ���� ������� � ������� �� ����';

const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_CART_FIELD_MAX = '�������� �� ���� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_CART_FIELD_MAX = '������������ �������� ����� ���� ������� � ������� �� ����';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDER = '��������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_FIELD = '�������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_PROPERTY = '�������� ����';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_DELIVERY_METHOD = '������ ��������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_DELIVERY_METHOD = '�������� ������ ��������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_PAYMENT_METHOD = '������ ������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_PAYMENT_METHOD = '�������� ������ ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_STATUS = '������ ������';
const NETCAT_MODULE_NETSHOP_CONDITION_SELECT_ORDER_STATUS = '�������� ������';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_ORDERS = '����������� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_ALL_TIME = '����� ������� �� �� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_PERIOD = '����� ������� �� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_FOR_LAST = '����� ������� �� ���������';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_DAYS = '����';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_WEEKS = '������';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_MONTHS = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_LAST_X_YEARS = '���';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_SUM_DATES = '����� ������� �� ����';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_FROM = '����� ������� �';
const NETCAT_MODULE_NETSHOP_CONDITION_ORDER_SUM_DATE_TO = '��';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDER_COUNT = '���������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_ITEM = '������ �������� �����';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_ORDERS_CONTAIN_COMPONENT = '������ �������� ����� �� ����������';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_DATETIME = '���� � �����';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DATE_INTERVAL = '����';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_FROM = '����:�����';
const NETCAT_MODULE_NETSHOP_CONDITION_DATE_TO = '��';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_DAY_OF_WEEK = '���� ������';
const NETCAT_MODULE_NETSHOP_CONDITION_DAY_OF_WEEK = '���� ������:';
const NETCAT_MODULE_NETSHOP_CONDITION_MONDAY = '�����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TUESDAY = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_WEDNESDAY = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_THURSDAY = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_FRIDAY = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_SATURDAY = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_SUNDAY = '�����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_TIME_INTERVAL = '�����';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_FROM = '�����:�����';
const NETCAT_MODULE_NETSHOP_CONDITION_TIME_TO = '��';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_VALUEOF = '����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_COOKIE_VALUE = '�������� cookie';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_SESSION_VALUE = '�������� ���������� � ������';

const NETCAT_MODULE_NETSHOP_CONDITION_GROUP_EXTENSION = '����������';
const NETCAT_MODULE_NETSHOP_CONDITION_TYPE_USER_FUNCTION = '��������� ���������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_CALL = '�������';
const NETCAT_MODULE_NETSHOP_CONDITION_FUNCTION_RETURNS_TRUE = '���������� �������� �������';
const NETCAT_MODULE_NETSHOP_CONDITION_VALUE_REQUIRED = '���������� ������� �������� ������� ��� ������� ������� �%s�';

// _PROMOTION_

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNTS = '������ � ������';

const NETCAT_MODULE_NETSHOP_PROMOTION_ITEM_DISCOUNTS = '������ �� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_ITEM_DISCOUNTS = '������ �� ������ �� ��������� ����� �����������';

const NETCAT_MODULE_NETSHOP_PROMOTION_CART_DISCOUNTS = '������ �� �������';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_CART_DISCOUNTS = '������ �� ������� �� ��������� ����� �����������';

const NETCAT_MODULE_NETSHOP_PROMOTION_DELIVERY_DISCOUNTS = '������ �� ��������';
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_DELIVERY_DISCOUNTS = '������ �� �������� �� ��������� ����� �����������';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_AMOUNT = '������';
const NETCAT_MODULE_NETSHOP_PROMOTION_LIST_EDIT_HEADER = '��������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_COUPONS = '������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE_SHORT = '�����������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION_SHORT = '������������ �������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONFIRM_DELETE = '������� ������ �%s�?';

const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_VALUE = '������ ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_CUMULATIVE = '����������� � ������� �������� ����� ����';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CONDITIONS = '������� ���������� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_COUPON_CODE = '��������� �� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_CREATE_COUPONS_AFTER_SAVING = '������� ������ ����� ���������� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_NUMBER_OF_COUPONS = '�������: %s (��������������: %s)';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_GENERATE_COUPONS = '�������� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_REQUIRES_ITEM_ACTIVATION = '������������ ��� ������������ �����������';
const NETCAT_MODULE_NETSHOP_PROMOTION_DISCOUNT_IS_ENABLED = '������ �������';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_ITEM_HEADER = '������ ��� ������ �� ������ �%s�'; // "DISCOUNT_ITEM": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_CART_HEADER = '������ ��� ������ �� ������� �%s�'; // "DISCOUNT_CART": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPONS_FOR_DISCOUNT_DELIVERY_HEADER = '������ ��� ������ �� �������� �%s�'; // "DISCOUNT_DELIVERY": sic (depends on discount class name)
const NETCAT_MODULE_NETSHOP_PROMOTION_NO_COUPONS = '������ �����������.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE = '��� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES = '���������� �������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USAGES_OUT_OF = '��';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_TILL = '���� ��������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_VALID_INDEFINITELY = '�� ���������';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATE_COUPONS_BUTTON = '�������� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DISCOUNT_LIST = '� ������ ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_BACK_TO_DEAL_LIST = '� ������ �����������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CSV_LINK = '������� � ������� CSV';


const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SEND_CODES_TO_USERS = '������� ���� ������������� �� ����������� �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_USERS_SELECTION = '������� �������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NUMBER_OF_USERS_SELECTED = '������� �������������: ';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_SHOW_SELECTED_USERS = '������� ������ ��������� �������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_NO_USERS = '�������� �������� �� ������������� �� ���� ������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_NUMBER_OF_COUPONS_TO_GENERATE = '���������� �������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE = '��� ������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_PREFIX = '������� ����� �������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS = '�������, ������������ � ������������ ����� ����:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_SYMBOLS_DEFAULT_VALUE = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_LENGTH = '����� ������������ �����:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL = '���� �������� ������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_INDEFINITELY = '�� ���������';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_CODE_VALID_TILL_DATE = '�� ����';
const NETCAT_MODULE_NETSHOP_PROMOTION_GENERATED_COUPON_MAX_USAGES = '������������ ���������� ������������� ������� ������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_USER_EMAIL_FIELD = '���� ������������ � ������� ����������� �����:';
const NETCAT_MODULE_NETSHOP_PROMOTION_PREVIEW_EMAIL = '���������� ������ ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_WITH_THIS_CODE_ALREADY_EXISTS = '����� � ����� ����� ��� ����������!';
const NETCAT_MODULE_NETSHOP_PROMOTION_CREATE_COUPONS = '�������';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_CREATE_COUPON = '���������� ������� �����: ������ ������������ ��� ��� ������������ ���';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_GENERATE_COUPONS = '���������� ������� ��������� ���������� ������� � ���������� �����������.
    <ul><li>��������� ����� ������������ ����� ���� ������.</li>
    <li>��������� ����� ��������, ������� ����� �������������� � ����� �������.</li>
    <li>�������� ������ ������� ��� ���� �������.</li>
    </ul>';
const NETCAT_MODULE_NETSHOP_PROMOTION_CANNOT_SEND_COUPONS = '���������� ������� ������ �������������. 
    ��������� ������������ �������� ��������, ��������� � ������������� �����: ����, ���� ������, ���� ������������ � ������� ����������� �����.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_MAX_USAGES = '������������ ���������� �������������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_ENABLED = '����� �������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_TITLE = '�������� �������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_PLEASE_WAIT = '�� ���������� ��� ���� �� ��������� ��������.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_1 = '��������� �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_2 = '�������� �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_STEP_FINISHED = '� &nbsp;���������.';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_ERROR_CAPTION = '��� �������� ������� �������� ������:';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_GENERATION_DIALOG_CLOSE = '�������';

const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CODE_IS_INVALID = '����� &laquo;%s&raquo; �� ������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_EXPIRED = '���� �������� ������ &laquo;%s&raquo; ����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_NOT_VALID_ON_THIS_SITE = '����� &laquo;%s&raquo; �� ��������� �� ������� �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_USED_UP = '����� &laquo;%s&raquo; ��� ������������';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_IS_REMOVED_FROM_SESSION = '����� &laquo;%s&raquo; �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_ONLY_ONE_OF_ITS_KIND_IS_ALLOWED = '����� &laquo;%s&raquo; �� ��� ��������, ��� ��� ��� �������� ������ ����� ����� ����';
const NETCAT_MODULE_NETSHOP_PROMOTION_COUPON_CANNOT_BE_APPLIED_TO_ANY_ITEM = '����� &laquo;%s&raquo; �� ��������� �� �� ���� ����� � �������';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_IS_APPLIED_TO_CART = '����� &laquo;%s&raquo; ������� � ����� ������� � ������� �� �����';
const NETCAT_MODULE_NETSHOP_PROMOTION_REGISTERED_COUPON_CODE_WILL_BE_APPLIED_TO_CART = '����� &laquo;%s&raquo; ����� ������� � ����� ������� � ������� �� �����';

const NETCAT_MODULE_NETSHOP_1C_SECRET_NAME = '��� ������������ ��� ������ CommerceML (1�, ��������)';
const NETCAT_MODULE_NETSHOP_1C_SECRET_KEY = '������ ��� ������ CommerceML (1�, ��������)';
const NETCAT_MODULE_NETSHOP_SECRET_KEY = '��������� ���� ��� ������� ��������� �����';

const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_SECRET_KEY = '������� �����: ��������� ����';
const NETCAT_MODULE_NETSHOP_EXTERNAL_ORDER_IP_LIST = '������� �����: ������ ����������� IP (�� ������ � ������ ������)';

const NETCAT_MODULE_NETSHOP_ORDER_STATUSES = '������� �������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_CAMPAIGN_NUMBER = '����� ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_AUTH_TOKEN = '��������������� �����';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_ID = 'ID OAuth-����������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_OAUTH_APP_TOKEN = '����� OAuth-����������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_CANCELLED = 'CANCELLED � ����� �������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERED = 'DELIVERED � ����� ������� �����������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_DELIVERY = 'DELIVERY � ����� ������� � ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PICKUP = 'PICKUP � ����� ��������� � ����� ����������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_PROCESSING = 'PROCESSING � ����� ��������� � ���������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_RESERVED = 'RESERVED � ����� � ������� (��������� ������������� �� ������������)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_STATUS_UNPAID = 'UNPAID � ����� ��������, �� ��� �� ������� (���� ������� ����� ��� ����������)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_SETTINGS_SAVED = '��������� ������� ���������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_FILL_SETTINGS = '��� ��������� ����������� ������ �� ������.������� ���������� ��������� ��� ���������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_STATUSES = '���������� ������������ ������� � ���������� �������� �������:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_COMPARE_PAYMENT_METHODS = '���������� ������������ ������� � ���������� �������� ������:';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_PREPAID = '���������� �� ������.�������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CASH = '���������� (��������� ��� ���������)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_PAYMENT_POSTPAID_CARD = '���������� (������ ��� ���������)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_ONLINE_PAYMENT_CHECKED = '���������� ������ �� ������.������� ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_ORDER_NO_DATA_YET = '-��������� ������-';
const NETCAT_MODULE_NETSHOP_ORDER_STATUS_CHANGE_SEQUENCES = '���������� ������� �������� ������ �� ������ ������� � ������.';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_EXPORT = '�������� �������';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_ORDERS = '����� �� �������';

const NETCAT_MODULE_NETSHOP_ALLOW_ZERO_PRICE = 'C������ ���� ��� ���������� ������ �� 0';

const NETCAT_MODULE_NETSHOP_IGNORE_STOCK_UNITS_VALUE = '�� ��������� �������� ���� �������� �� ������ ��� ���������� ������ � �������';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_STATUS = '������� �������, ��� ������� ���������� ���������� �������� ���� �������� �� ������';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_STATUS = '������� �������, ��� ������� ���������� ������� ������� �� ����� (���������� �������� ���� �������� �� ������)';
const NETCAT_MODULE_NETSHOP_STOCK_RESERVE_FIELD = '������ ������� �� ������� �� ������';
const NETCAT_MODULE_NETSHOP_STOCK_RETURN_FIELD = '������ ���������� � ������� �� �����';

const NETCAT_MODULE_NETSHOP_DEFAULT_PACKAGE_SIZE = '������ �������� ������ �� ���������';
const NETCAT_MODULE_NETSHOP_LENGTH_CM = '��';

const NETCAT_MODULE_NETSHOP_ITEM_INDEX_FIELDS = '���� �������, ������������ ��� ������ � ������ ����������';

const NETCAT_MODULE_NETSHOP_MARKETS = '�������� ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET = '������.������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES = '������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ADD = '���������� ������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_EDIT = '�������������� ������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_UPDATED = '��������';
const NETCAT_MODULE_NETSHOP_YANDEX_CONFIRM_DELETE = '������� ������ �%s�?';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE = '��� ������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_SIMPLE = '���������� ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_TYPE_FULL = '������������ ����� (�����������)';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EDIT_FIELDS = '������������� ������������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLES_EXPORT_URL = 'URL ��� ��������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_BUNDLE_DELIVERY_COURIER = '�������� ����� ��������, ���������� �� �������� ����� ���������� ��� �������� ��������� � ������ ���������� ��������';

const NETCAT_MODULE_NETSHOP_GOOGLE_MERCHANT = 'Google Merchant';
const NETCAT_MODULE_NETSHOP_MARKET_YANDEX_NO_BUNDLES = '������ ��� �������� � ������.������ �� ��������� ����� �����������';
const NETCAT_MODULE_NETSHOP_MARKET_GOOGLE_NO_BUNDLES = '������ ��� �������� � Google Merchant �� ��������� ����� �����������';

const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_NAME = '���';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_UNITS = '������� ���������';
const NETCAT_MODULE_NETSHOP_YANDEX_MARKET_MULTI_FIELD = '����';

const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES = '������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ADD = '���������� ������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_EDIT = '�������������� ������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_UPDATED = '��������';
const NETCAT_MODULE_NETSHOP_GOOGLE_CONFIRM_DELETE = '������� ������ �%s�?';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE = '��� ������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLE_TYPE_SIMPLE = '���������� ��������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EDIT_FIELDS = '������������� ������������';
const NETCAT_MODULE_NETSHOP_GOOGLE_MARKET_BUNDLES_EXPORT_URL = 'URL ��� ��������';

const NETCAT_MODULE_NETSHOP_MAILRU = '������@Mail.Ru';
const NETCAT_MODULE_NETSHOP_MARKET_MAIL_NO_BUNDLES = '������ ��� �������� � ������@Mail.Ru �� ��������� ����� �����������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES = '������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ADD = '���������� ������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_EDIT = '�������������� ������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_UPDATED = '��������';
const NETCAT_MODULE_NETSHOP_MAIL_CONFIRM_DELETE = '������� ������ �%s�?';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_ID = 'ID';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE = '��� ������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLE_TYPE_SIMPLE = '���������� ��������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EDIT_FIELDS = '������������� ������������';
const NETCAT_MODULE_NETSHOP_MAIL_BUNDLES_EXPORT_URL = 'URL ��� ��������';

const NETCAT_MODULE_NETSHOP_MAIL_MULTI_NAME = '���';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_UNITS = '������� ���������';
const NETCAT_MODULE_NETSHOP_MAIL_MULTI_FIELD = '����';

const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE = '����������� ����� �������';
const NETCAT_MODULE_NETSHOP_CONFIRM_STATUS_CHANGE_TO = '�������� ������ ������ �� �%s�?';

const NETCAT_MODULE_NETSHOP_NO_ORDERS = '� ��� ��� �� ������ ������';

const NETCAT_MODULE_NETSHOP_EXCHANGE = '����� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_HAS_NO_OBJECTS = '�� ��������� ����� �� �������� ����� �������! ������� �� ������ <b>����������</b>, ����� ��������� ������ ��������� ������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NO_FIELD = '�� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_NEW_FIELD = '����� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAKE_FIELD_PARENT_FIELD = '����, ����������� �� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_IMPORT = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_EXPORT = '�������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_MANUAL = '������/������������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MODE_AUTOMATED = '��������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_ERROR = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CRITICAL_ERROR = '����������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_TYPE_CONVERSION = '�������������� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_LIST_INSERTION = '���������� �������� � ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REPORT_HAS_BEEN_SENT = '�������� ������ �� Email';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FILE_NOT_FOUND = '���� �� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_ADDED = '������ ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_ADDED = '������ �� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_UPDATED = '������ ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_OBJECT_NOT_UPDATED = '������ �� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_SECTION_HAS_CHILD_WITH_THIS_KEYWORD = '� ���������� ������������� ������� ��� ���� ��������� � ����� �������� ������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_COMPONENT_WITH_THIS_KEYWORD = '��������� � ������ �������� ������ ��� ����������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NEW_FIELD_CANT_BE_NAMED_AS = '�������� ������ ���� �� ����� ��������� �%s�!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_BASE_COMPONENT_HAS_FIELDS_WITH_THIS_NAME = '� ������� ���������� ��� ���������� ���� � �������: %s!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_HAS_NO_LIST_WITH_NAME = '����� ������ �� ����������: �%s�!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_IS_REQUIRED = '���� �%s� ����������� ��� ����������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_WRONG_FORMAT = '���� �%s� ����� �������� ������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_FIELD_DOES_NOT_MATCH_ANY = '�%s� �� ��������� �� � ���� �����!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_ATTACH_FILES_OR_SET_URL = '���������� ����� ������ ��� ������� URL, ������ ������� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_CHOOSE_MODE = '�������� ����� ������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_INFO_ALREADY_HAS_FILES = '� ����� ������ ��� ���� ����� ����������� �����! ��� ����� �������������� ��� ��������� ������������ � ��� ������.<br>���� ������ ��������� ����� � ���������� ����� ��� ������� URL ����� � ����� ����.<br>����� �������� ���� �������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_FOR_OBJECT = '��������� ��� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SETTINGS_SAVED = '��������� ���������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_WIZARD = '��������� ������ ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_PERIODICAL_RUN = '��������� ������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_FREQUENCY = '������� ������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_MINUTES = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_HOURS = '����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PERIODICAL_RUN_DAYS = '���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_DOWNLOAD_REMOTE_FILE_BY_URL = '�������� ���� ��� ����� ����� ������ ������� � ��������� URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REMOTE_FILE_URL = 'URL-����� ����� ��� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SAVE_OBJECT = '��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_SEND_REPORT = '���������� ����� �� Email';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REPORT = '����� �� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_WHEN = '����� ���������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ALWAYS = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_ON_ERROR = '��� ������������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEND_REPORT_NEVER = '�������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NAME = '�������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_TYPE = '��� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_FORMAT = '������ ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_STATUS = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_MODE = '����� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_EMAIL = 'Email ��� �������� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_NOT_CONFIGURED = '������ ����� �� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUNNING_EXCHANGE = '������ ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RUN_EXCHANGE = '��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_IN_EXCHANGE_FOLDER = '����� � ����� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES = '�����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MAIN_FILES = '�������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OTHER_FILES = '��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_FOUND = '�� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_NOT_FOUND = '�����, ����������� ��� ������, �� ���� �������.<br> ��� ������� ������ ����������� ����� ����� ��������� ����������: <b>%s</b>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SHOW_ALL = '�������� ���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOADING_FILES = '�������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILES = '�������� ����� ���������� ������� ��� zip-����� � ������� ������� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_FILES_URL = '��� ������� ���� URL �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_REMOVE_OLD_FILES = '������� ������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILES_UPLOADED = '����� ������� ���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_COMPONENT = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SUBDIVISION = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFOBLOCK = '��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ALL_LOGS_HAVE_BEEN_DELETED = '���� ������� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOG = '���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS = '���������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_START = '���� � ����� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_DATE_END = '���� � ����� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS = '���������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION = '�������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATISTICS_ACTION_COUNT = '���-�� ���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_DATE_TIME = '���� � �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MSG = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE = '����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LOGS_NOT_FOUND = '����� ��� ������� ������ �� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD = '������ ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WIZARD_CURRENT_STEP = '������� ���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_FILE_OR_ARCHIVE = '�������� ���� ���������� ������� ��� zip-����� � ������� ������� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OR_SET_URL = '��� ������� ���� URL �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_COMPONENT = '����� ����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT_THAT_EXISTS = '�������� ������������ ���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_COMPONENT_BASED_ON_ANOTHER = '������� ����� ��������� �� ������ �������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_NAME = '�������� ������ ����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_COMPONENT_KEYWORD = '�������� ����� ������ ����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECTING_SUBDIVISION = '����� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_SUBDIVISION_THAT_EXISTS = '�������� ������������ ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_CREATE_SUBDIVISION = '������� ����� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_SUBDIVISION = '�������� ������������ ������ ��� ������ �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_NAME = '�������� ������ �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_SUBDIVISION_KEYWORD = '�������� ����� ������ �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_MATCHING_FIELDS = '������������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_IN_COMPONENT = ' ���� � ����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIRST_STRING_IN_FILE = '������ ������ � �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SECOND_STRING_IN_FILE = '������ ������ � �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_THIRD_STRING_IN_FILE = '������ ������ � �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_FIELD = '����� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EDIT_FIELD = '�������������� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME = '�������� ���� (���������� �������)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_EXAMPLE = '����������� ������� �Property_�, ���� ���� ������ ������������ � ������ �������������. ��������, Property_Size.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION = '�������� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_DESCRIPTION_EXAMPLE = '��������: ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_TYPE = '��� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT = '�������� ������ (���������� �������)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_FORMAT_EXAMPLE = '��������: Region';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_SELECT_PLACEHOLDER = '�������� ������ ����...';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NOT_FOUND = '���� �� ������� �� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SAVE = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS = '����, ���������� �������� ������� ���� �� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS = '����, �� ������� �������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANTS_FIELDS_NOT_SET = '������� ����� ������� ����, ���������� �������� ������� ���� �� �����, �� �� ������ �� ���� ����!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELDS_NOT_SET = '������� ����� ������� ����, �� ������� �������� �����, �� �� ������ �� ���� ����!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_VARIANT_FIELD = '����, ���������� �������� �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SEARCH_FIELD = '����, ���������� ����������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS = '������ ����� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SET_THIS_FIELDS_IN_THE_END = '<b>��������!</b> ��������� ��� ���� � ����� �����, ����� ��������� ������������ ����� � ������ ����������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_FIX_ERROR = '����������, ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_REQUIRED_FIELDS_NOT_MATCHED = '�� ��������� ������������ ��� ������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_COMPONENT = '�������� ��������� ��� ������� ���� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_PARENT_COMPONENT = '�������� ������������ ��������� ��� ������� ���� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE = '����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PHASE_OUT_OF = '��';
const NETCAT_MODULE_NETSHOP_EXCHANGE_GOOD = '�����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_START = '������ ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FINISH = '����� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TRYING_TO_LOAD_FILES_BY_URL = '������� ��������� ����� �� ���������� URL';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FAILED_TO_LOAD_FILES_BY_URL = '�� ������� ��������� �����, ��� �� ���������� URL ����� ������������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_CONFIGURED = '����� �� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_EXCHANGE_FOLDER_IS_EMPTY = '����� ������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_NOT_FOUND = '���� �� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_START_FILE_PROCESSING = '������ ��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FINISH_FILE_PROCESSING = '����� ��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_IS_EMPTY = '���� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_ADDED_TO_LIST = '���� "%s" (������ "%s"): ������ ��� �������� � ������ [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_CASTING_FOR_FIELD = '���������� ���� ��� ���� "%s": "%s" => "%s"';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_HAS_NOT_BEEN_FOUND = '���� "%s": ���� �� ��� ������ [%s]';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FILE_PATH_HAS_NOT_BEEN_FOUND = '���� "%s": ���� � ����� �� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_UPDATED = '������ ��� ������� (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_UPDATED = '�� ������� �������� ������ (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_BEEN_ADDED = '������ ��� �������� (ID: %s; %s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_ADDED = '�� ������� �������� ������ (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT = '��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_TYPE_PRICE = '���� � �������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_GOOD_DATA_OR_COMPONENT_NOT_MATCHED = '��� ������� ������� ��� ������ � �������, ���� ������ ����, �� �� �������� ��������� � ��� ����.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ARTICLE = '�������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_ITEM_ID = '�� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_PRICE = '����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FIELD_NAME_STOCK_UNITS = '���������� �� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ERROR_NO_DATA_FOR_SUBDIVISION = '��� ������� ������� ��� ������ � �������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_OBJECT_HAS_NOT_BEEN_FOUND = '������ �� ��� ������ �� � ����� �������� ���������� (%s: %s;)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_GO_BACK = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SUBMIT = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_NEXT = '�����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_CONTINUE = '����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_SAVE = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_FINISH = '���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE = '�������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_REMOVE_SELECTED = '������� ���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ACTION_RUN_EXCHANGE = '��������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_TYPE_AND_FORMAT = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_SELECTION = '����� �������� ��� �������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_MATCHING = '������������ �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_CML = '��������� ��������������� ������ � 1C/��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STEP_FINISH = '����������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NEW_EXCHANGE_NAME = '����� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_FOUND_NOT_FINISHED_OBJECT = '������ ������������� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT = '����������, ���������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_PLEASE_WAIT_EXCHANGE_FINISH = '����������, ���������<br>��������� �������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ZIP_EXTENSION_NOT_FOUND = 'PHP-���������� LibZip �� �������! ������������� ������� ����������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_UPLOAD_INFO = '��������� ������ �������:<br>
� ����������� ��������� ���������� ����������� ������ �� ���: %s<br>
� ������������ ��������� ������ ����������� ������: %s<br>
� ������������ ������ ������ ������������ �����: %s<br>';
const NETCAT_MODULE_NETSHOP_EXCHANGE_SKIP_FIRST = '���������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ROWS_IN_FILE = '����� � �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV = '���� <b>"%s"</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_PRICE', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV);
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_XLS', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', ���� <b>�%s�</b>');
const NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML = '������ <b>�%s�</b>';
define('NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_YML', NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CSV . ', ' . NETCAT_MODULE_NETSHOP_EXCHANGE_ITEM_KEY_INFO_CML);
const NETCAT_MODULE_NETSHOP_EXCHANGE_SELECT_AT_LEAST_ONE_OBJECT_FOR_MATCHING = '�������� ���� �� ���� ������ ��� �������������!';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOT_MATCHED = '�� ������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_NOTIFICATION_FOR_AUTOMATED_MODE = '� ������ ������ ����� ����� ��������� ������������� �� 1�/��������.<br>�� ��������� ���� ��� ����� ���������� ���������� ��� ��������� ������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNING_LARGE_FILE_SIZE = '������ ����� <b>�%s�</b> ��������� ����������. ��� ��������� ������� �����, ��������, ����� ���������� ��������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_1 = '��� 1: �������� ����� 1C/�������� � ������, ��������� ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_URL = 'URL ��� 1C/��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_LOGIN = '�����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_EXTERNAL_PASSWORD = '������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_2 = '��� 2: ��������� ����� �� ������� 1C/�������� �������, ��������� ��������� ��������, ����� ��������� � ���, ��� ����� ��������� �� �����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS = '������ ������ ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS = '����� ����';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_HAS_NOT = '������ ���� ���';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILE_STATUS_REFRESH = '�������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3 = '��� 3: ���������� ����������� ������� ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_WAIT = '���������� ���� ������, �.�. ����� ��� ������� �� ���� �������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_HELP_STEP_3_DETAILS_CONTINUE = '������� ������, ����� ����������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_AUTOMATED_FILES_NOT_FOUND_PLEASE_WAIT = '����� ������� �� �������! ����������, ��������� �� ���������.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_IS_AUTOMATED_MODE_ACTIVE = '��������� �������������� ������ ��� ��������� ������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_WARNINGS = '��������������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_LIMITS_WARNING = '������������ ����������� �������� �������� ������������� <b><code>memory_limit</code></b> � <b><code>max_execution_time</code></b>.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_IN_PROCESS = '� �������� (%s%%)';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_FINISHED = '���������<br> %s';
const NETCAT_MODULE_NETSHOP_EXCHANGE_STATUS_NOT_STARTED = '�� ��������';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_IMPORTING_RIGHT_NOW = '��������! � ������ ������ ���������� �������������� ������. ��������� ��: %s%%.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_INFO_EXCHANGE_STUCK = '������, ��� ����� �������� ������ ��������. ��������, ����� ��������� �� ����������� ��������. ����� ����� �������� ������� ���������� �������� ��������� ������� � ��������� <i>��� ��������</i>.';
const NETCAT_MODULE_NETSHOP_EXCHANGE_RESET_STATUS = '�������� ��������� �������';

// �������� ��������, ����������� �� ���������
const NETCAT_MODULE_NETSHOP_CART_SUBDIVISION_NAME = '�������';
const NETCAT_MODULE_NETSHOP_ORDER_SUCCESS_SUBDIVISION_NAME = '����� ��������';
const NETCAT_MODULE_NETSHOP_ORDER_LIST_SUBDIVISION_NAME = '��� ������';
const NETCAT_MODULE_NETSHOP_COMPARE_SUBDIVISION_NAME = '��������� �������';
const NETCAT_MODULE_NETSHOP_FAVORITES_SUBDIVISION_NAME = '��������� ������';
const NETCAT_MODULE_NETSHOP_DELIVERY_SUBDIVISION_NAME = '������� �������� � ��������';