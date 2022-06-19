<?php

global $ADMIN_PATH;

const NETCAT_MODULE_AUTH_DESCRIPTION = '������ ��� ������ � ��������������. ����������� ����������� ������� ������ �������������, ��������� ����������� ������, ������, �������������� ������. ������ ������ ����� ��������������� � ������� �������� �������.';
const NETCAT_MODULE_AUTH_REG_OK = '����������� ������������.';
const NETCAT_MODULE_AUTH_REG_ERROR = '������! ����������� �� ������������.';
const NETCAT_MODULE_AUTH_REG_INVALIDLINK = '������������ ������.';
const NETCAT_MODULE_AUTH_ERR_NEEDAUTH = '���������� ��������������.';
const NETCAT_MODULE_AUTH_CHANGEPASS_NOTEQUAL = '������ �� ���������. ���������� ��� ���.';
const NETCAT_MODULE_AUTH_ERR_NOFIELDSET = '���� ��� Email �� ����������.';
const NETCAT_MODULE_AUTH_ERR_NOUSERFOUND = '������������ �� ������';
const NETCAT_MODULE_AUTH_MSG_FILLFIELD = '��������� ���� �� �����';
const NETCAT_MODULE_AUTH_MSG_BADEMAIL = '������������ E-mail';
const NETCAT_MODULE_AUTH_MSG_NEWPASSSENDED = '�������������� ������ ���� ������� �� ��� email. ��� ����������� ��������� �������������� ������ �������� ������, ����������� � ������.';
const NETCAT_MODULE_AUTH_MSG_INVALID_LOGIN_FORMAT = '�������� ������ ���� &laquo;�����&raquo;, ����������� �����, �����, ���� �������������, ����� ��� ������.';
const NETCAT_MODULE_AUTH_MSG_INVALID_EMAIL_FORMAT = '�������� ������ ���� &laquo;Email&raquo;, ����������� �����, �����, ���� �������������, ����� � �����.';
const NETCAT_MODULE_AUTH_NEWPASS_SUCCESS = '������ ������� �������.';
const NETCAT_MODULE_AUTH_NEWPASS_ERROR = '������ ��� ��������� ������.';

const NETCAT_MODULE_AUTH_FORM_AND_MAIL_TEMPLATES = '������� ���� � �����';
const NETCAT_MODULE_AUTH_EXTERNAL_AUTH = '����������� ����� ������� �������';

const NETCAT_MODULE_AUTH_LOGIN = '�����';
const NETCAT_MODULE_AUTH_ENTER = '����';
const NETCAT_MODULE_AUTH_REGISTER = '������������������';
const NETCAT_MODULE_AUTH_INCORRECT_LOGIN_OR_RASSWORD = '������� ������ ����� ��� ������';
const NETCAT_MODULE_AUTH_AUTHORIZATION_UPPER = '�����������';
const NETCAT_MODULE_AUTH_AUTHORIZATION = '�����������';
const NETCAT_MODULE_AUTH_FORGOT = '������?';
const NETCAT_MODULE_AUTH_PASSWORD = '������';
const NETCAT_MODULE_AUTH_PASSWORD_CONFIRMATION = '������� ������ ��� ���';
const NETCAT_MODULE_AUTH_FIRST_NAME = '���';
const NETCAT_MODULE_AUTH_LAST_NAME = '�������';
const NETCAT_MODULE_AUTH_NICKNAME = '���';
const NETCAT_MODULE_AUTH_PHOTO = '����������';
const NETCAT_MODULE_AUTH_SAVE = '��������� ����� � ������';
const NETCAT_MODULE_AUTH_REMEMBER_ME = '��������� ����';
const NETCAT_MODULE_AUTH_NOT_NEW_MESSAGE = '����� ��������� ���';
const NETCAT_MODULE_AUTH_NEW_MESSAGE = '����� ���������';
const NETCAT_MODULE_AUTH_HELLO = '������������';
const NETCAT_MODULE_AUTH_LOGOUT = '��������� �����';
const NETCAT_MODULE_AUTH_BY_TOKEN = '����� �� ������';

const NETCAT_MODULE_AUTH_LOGIN_WAIT = '����������, ���������';
const NETCAT_MODULE_AUTH_LOGIN_FREE = '����� ��������';
const NETCAT_MODULE_AUTH_LOGIN_BUSY = '����� �����';
const NETCAT_MODULE_AUTH_LOGIN_INCORRECT = '����� �������� ����������� �������';

const NETCAT_MODULE_AUTH_PASS_LOW = '������';
const NETCAT_MODULE_AUTH_PASS_MIDDLE = '�������';
const NETCAT_MODULE_AUTH_PASS_HIGH = '�������';
const NETCAT_MODULE_AUTH_PASS_VHIGH = '����� �������';
const NETCAT_MODULE_AUTH_PASS_EMPTY = '������ �� ����� ���� ������';
const NETCAT_MODULE_AUTH_PASS_SHORT = '������ ������� ��������';

const NETCAT_MODULE_AUTH_PASS_COINCIDE = '������ ���������';
const NETCAT_MODULE_AUTH_PASS_N_COINCIDE = '������ �� ���������';

const NETCAT_MODULE_AUTH_PASS_RELIABILITY = '���������:';

const NETCAT_MODULE_AUTH_CP_NEWPASS = '����� ������';
const NETCAT_MODULE_AUTH_CP_CONFIRM = '��������� ���� ������';
const NETCAT_MODULE_AUTH_CP_DOBUTT = '������� ������';

const NETCAT_MODULE_AUTH_PRF_LOGIN = '������� �����';
const NETCAT_MODULE_AUTH_PRF_EMAIL = '��� Email';
const NETCAT_MODULE_AUTH_PRF_EMAIL_2 = 'Email';
const NETCAT_MODULE_AUTH_PRF_DOBUTT = '������������ ������';

const NETCAT_MODULE_AUTH_BUT_AUTORIZE = '��������������';
const NETCAT_MODULE_AUTH_BUT_BACK = '���������';
const NETCAT_MODULE_AUTH_MSG_AUTHISOK = '����������� ������ �������.';
const NETCAT_MODULE_AUTH_MSG_AUTHUPISOK = '����� ��������.';

const NETCAT_MODULE_AUTH_MSG_SESSION_CLOSED = "����� ��������. <a href='%s'>���������</a>";
const NETCAT_MODULE_AUTH_MSG_AUTH_SUCCESS = "����������� ������ �������. <a href='%s'>���������</a>";

const NETCAT_MODULE_AUTH_ADMIN_MAIN_SETTINGS_TITLE = '�������� ���������';
const NETCAT_MODULE_AUTH_ADMIN_SAVE_OK = '��������� ������� ��������';

define("NETCAT_MODULE_AUTH_ADMIN_INFO", "�� ������ ��������� ����������� ������ �������������, � ����� ��������� ������� \"������������\" � ������� \"<a href=" . $ADMIN_PATH . "field/system.php>��������� �������</a>\".<br/>");

// �������� ��������
const NETCAT_MODULE_AUTH_ADMIN_TAB_INFO = '����������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_REGANDAUTH = '����������� � �����������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_TEMPLATES = '������� ������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_MAIL = '������� �����';
const NETCAT_MODULE_AUTH_ADMIN_TAB_SETTINGS = '���������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_CLASSIC = '�� ������ � ������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_EXAUTH = '����� ������� �������';
const NETCAT_MODULE_AUTH_ADMIN_TAB_GENERAL = '�����';
const NETCAT_MODULE_AUTH_ADMIN_TAB_SYSTEM = '���������';

// ����������
const NETCAT_MODULE_AUTH_ADMIN_INFO_USER_COUNT = '����� ���������� �������������';
const NETCAT_MODULE_AUTH_ADMIN_INFO_USER_COUNT_UNCHECKED = '����������� �������������';
const NETCAT_MODULE_AUTH_ADMIN_INFO_USER_COUNT_UNCONFIRMED = '���������� �������������, ��� �� ������������� �����������';
const NETCAT_MODULE_AUTH_ADMIN_INFO_NONE = '���';

// �� ������ � ������
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_DENY_REG = '��������� ��������������� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_DENY_RECOVERY = '��������� �������������� ��������������� ������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_ALLOW_CYRILLIC = '��������� ��������� � �������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_ALLOW_SPECIALCHARS = '��������� ����������� � �������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_ALLOW_CHANGE_LOGIN = '��������� ������ ����� ����� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_BING_TO_CATALOGUE = '����������� ������������ � �����';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_WITH_SUBDOMAIN = '�������������� �� ����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_AUTH_CAPTCHA = '��������� CAPTCHA ��� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_PASS_MIN = '����������� ����� ������ %input ��������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_REGISTRATION_FORM = '����� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CHECK_LOGIN = '������������� ��������� ����������� ������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CHECK_PASS = '������������� ��������� ������� ������������ ������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CHECK_PASS2 = '������������� ��������� ���������� �������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CHECK_AGREED = '��������� ���������� � ���������������� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_FIELDS_IN_REG_FORM = '���� � ����� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_FIELDS_IN_REG_FORM_ALL = '���';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_FIELDS_IN_REG_FORM_CUSTOM = '���������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_ACTIVATION = '���������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CONFIRM = '��������� ������������� ����� �����';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CONFIRM_AFTER_MAIL = '���������� �������������� ������ ����� ��������� ������������� �����������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_PREMODARATION = '������������ ���������������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_NOTIFY_ADMIN = '���������� ������ �������������� ��� ����������� ������������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_AUTHAUTORIZE = '����������� ������������ ����� ����� �������������';
const NETCAT_MODULE_AUTH_ADMIN_CLASSIC_CONFIRM_TIME = '������� ������������, ���� �� �� ���������� ����������� � ������� %input �����';

// ����� ������� �������
const NETCAT_MODULE_AUTH_ADMIN_EX_CURL_REQUIRED = "��� ����������� ����� ������� ������� ���������� ���������� <a href='http://www.php.net/manual/ru/book.curl.php'>cURL</a>";
const NETCAT_MODULE_AUTH_ADMIN_EX_JSON_REQUIRED = "��� ����������� ����� ������� ������� ���������� ���������� <a href='http://ru2.php.net/manual/en/book.json.php'>JSON</a>";
const NETCAT_MODULE_AUTH_ADMIN_EX_VK = '���������';
const NETCAT_MODULE_AUTH_ADMIN_EX_FB = 'Facebook';
const NETCAT_MODULE_AUTH_ADMIN_EX_TWITTER = 'Twitter';
const NETCAT_MODULE_AUTH_ADMIN_EX_OPENID = 'OpenID';
const NETCAT_MODULE_AUTH_ADMIN_EX_OAUTH = 'OAuth';
const NETCAT_MODULE_AUTH_ADMIN_EX_VK_ENABLED = '�������� ����������� ����� vkontakte.ru';
const NETCAT_MODULE_AUTH_ADMIN_EX_FB_ENABLED = '�������� ����������� ����� facebook.com';
const NETCAT_MODULE_AUTH_ADMIN_EX_OPENID_ENABLED = '�������� ����������� ����� OpenID';
const NETCAT_MODULE_AUTH_ADMIN_EX_OAUTH_ENABLED = '�������� ����������� ����� OAuth';
const NETCAT_MODULE_AUTH_ADMIN_EX_TWITTER_ENABLED = '�������� ����������� ����� twitter.com';
const NETCAT_MODULE_AUTH_ADMIN_EX_DATA_VK = '������ �� ���������';
const NETCAT_MODULE_AUTH_ADMIN_EX_DATA_FB = '������ �� Facebook';
const NETCAT_MODULE_AUTH_ADMIN_EX_DATA_TWITTER = '������ �� Twitter';
const NETCAT_MODULE_AUTH_ADMIN_EX_DATA_OPENID = '������ �� OpenID';
const NETCAT_MODULE_AUTH_ADMIN_EX_DATA_OAUTH = '������ �� OAuth';

// ����� ���������
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_AUTH_SITE = '������� ����������� �� �����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_AUTH_ADMIN = '������� ����������� � ������� �����������������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_METHOD_LOGIN = '�� ������ � ������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_METHOD_TOKEN = '�� usb-������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_METHOD_HASH = '�� ����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_METHOD_EX = '����� ������� �������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PM = '������ ���������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PM_ALLOW = '��������� ���������� ������ ���������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PM_NOTIFY = '��������� ������������ �� email � ����� ���������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_FRIEND_BANNED = '������ � �����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_FRIEND_ALLOW = '��������� ��������� ������������� � ������';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_BANNED_ALLOW = '��������� ��������� ������������� �� �����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PA = '������ ����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PA_ALLOW = '������ ������ ����';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PA_CURRENCY = '������� ��������� %input';
const NETCAT_MODULE_AUTH_ADMIN_GENERAL_PA_START = '��������� ����� ������������������ %input ������';

// ������
const NETCAT_MODULE_AUTH_ADMIN_MAIL_SUBJECT = '��������� ������';
const NETCAT_MODULE_AUTH_ADMIN_MAIL_BODY = '���� ������';
const NETCAT_MODULE_AUTH_ADMIN_MAIL_HTML = 'HTML-������';

// ��������� ���������
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_COMPONENTS_SUBS = '����������, ������� � ����';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_COMPONENT_FRIENDS = '��������� ������� ������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_COMPONENT_PM = '��������� ��� ������ ����������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_COMPONENT_PA = '��������� ��� ������� �����';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_FIELD_PA = '���� c �������� ��� ������� �����';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_SUB_MATERIALS = '������ � ����������� ������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_SUB_MODIFY = '������� ��� ��������� ������, ����� �������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_CC_USER_LIST = '�������� � ������� �� ������� �������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_PSEUDO = '������������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_PSEUDO_ALLOW = '�������� ������������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_PSEUDO_CHECK_IP = '��������� IP';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_PSEUDO_GROUP = '������ �������������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_PSEUDO_FIELD = '����, �� �������� ���� �������������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_HASH = '���-�����������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_HASH_DELETE = '������� ��� ����� �����������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_HASH_EXPIRE = '����� ����� ���� � ����� %input';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_HASH_DISABLED_SUBS = '������ ��������, ��� ��������� ���-�����������, ����� ������� %input';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_OTHER = '������';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_OTHER_ONLINE = '�����, � ������� �������� ������������ ��������� online � �������� %input';
const NETCAT_MODULE_AUTH_ADMIN_SYSTEM_OTHER_IP = '������� �������� IP-������ (0-4) %input';

const NETCAT_MODULE_AUTH_SELFREG_DISABLED = '��������������� ����������� ���������';



const NETCAT_MODULE_AUTH_FORM_TEMPLATES = '������� ����';
const NETCAT_MODULE_AUTH_FORM_AUTH = '����� �����������';
const NETCAT_MODULE_AUTH_RESTORE_DEF = '������������ �������� �� ���������';
const NETCAT_MODULE_AUTH_FORM_DISABLED = '�� ���������� ����� ��� ��������� ������� �����������';
const NETCAT_MODULE_AUTH_FORM_CHG_PASS = '����� ��������� ������';
const NETCAT_MODULE_AUTH_FORM_CHG_PASS_AFTER = '�����, ��������� ����� ����� ������';
const NETCAT_MODULE_AUTH_FORM_REC_PASS_AFTER = '�����, ��������� ����� �������� ������';
const NETCAT_MODULE_AUTH_FORM_CHG_PASS_WARNBLOCK = '���� ������ ������';
const NETCAT_MODULE_AUTH_FORM_CHG_PASS_DENY = '�����, ��������� ��� ������� �������������� ������';
const NETCAT_MODULE_AUTH_FORM_REC_PASS = '����� �������������� ������';
const NETCAT_MODULE_AUTH_FORM_CONFIRM_AFTER = '�����, ��������� ��� �������� ������������� �����������';
const NETCAT_MODULE_AUTH_FORM_CONFIRM_AFTER_WARNBLOCK = '���� ������ ������ ��� ������������� �����������';
const NETCAT_MODULE_AUTH_MAIL_TEMPLATES = '������� �����';
const NETCAT_MODULE_AUTH_REG_CONFIRM = '������������� �����������';
const NETCAT_MODULE_AUTH_REG_CONFIRM_AFTER = '����������� ����� ������������� �����������';
const NETCAT_MODULE_AUTH_AS_HTML = 'HTML �����';
const NETCAT_MODULE_AUTH_RECOVERY = '�������������� ������';
const NETCAT_MODULE_AUTH_ADMIN_MAIL_NOTIFY = '���������� �������������� � ����������� ������������';

const NETCAT_MODULE_AUTH_ADD_FRIEND = '�������� � ������';
const NETCAT_MODULE_AUTH_REMOVE_FRIEND = '������� �� ������';

// OpenID
const NETCAT_MODULE_AUTH_OPEN_ID_ERROR = '����������� OpenID';
const NETCAT_MODULE_AUTH_OPEN_ID_INVALID = '������������ OpenID';
const NETCAT_MODULE_AUTH_OPEN_ID_ALREADY_EXIST_IN_BASE = '����� OpenID ��� ��������������� � ����';
const NETCAT_MODULE_AUTH_OPEN_ID_COULD_NOT_REDIRECT_TO_SERVER = 'Could not redirect to server: %s';
const NETCAT_MODULE_AUTH_OPEN_ID_CHECK_CANCELED = '�������� ��������';
const NETCAT_MODULE_AUTH_OPEN_ID_AUTH_FAILED = 'OpenID ����������� �� �������: %s';
const NETCAT_MODULE_AUTH_OPEN_ID_AUTH_COMPLETE_NAME = "�� ������� �������������� ��� <a href='%s'>%s</a> ";
const NETCAT_MODULE_AUTH_OPEN_ID_AUTH_COMPLETE_LOGIN = '��� ����� �� �����: %s';


const NETCAT_MODULE_AUTH_SETUP_PROFILE = '������ �������';
const NETCAT_MODULE_AUTH_SETUP_REGISTRATION = '�����������';
const NETCAT_MODULE_AUTH_SETUP_PASSWORD_RECOVERY = '�������������� ������';
const NETCAT_MODULE_AUTH_SETUP_MODIFY = '��������� ������';
const NETCAT_MODULE_AUTH_SETUP_PASSWORD = '��������� ������';
const NETCAT_MODULE_AUTH_SETUP_PM = '������ ���������';


const NETCAT_MODULE_AUTH_APPLICATION_ID = 'ID ����������';
const NETCAT_MODULE_AUTH_APPLICATION_ID_VK = 'ID ����������';
const NETCAT_MODULE_AUTH_APPLICATION_ID_FB = 'ID ���������� (Application ID)';
const NETCAT_MODULE_AUTH_APPLICATION_ID_TWITTER = 'ID ���������� (Consumer key)';
const NETCAT_MODULE_AUTH_SECRET_KEY = '���������� ����';
const NETCAT_MODULE_AUTH_PUBLIC_KEY = '��������� ����';
const NETCAT_MODULE_AUTH_SECRET_KEY_VK = '���������� ����';
const NETCAT_MODULE_AUTH_SECRET_KEY_FB = '���������� ���� (Application Secret)';
const NETCAT_MODULE_AUTH_SECRET_KEY_TWITTER = '���������� ���� (Consumer secret)';

const NETCAT_MODULE_AUTH_GROUPS_WHERE_USER_WILL_BE = '������, ���� ������ ������������';
const NETCAT_MODULE_AUTH_GROUPS_WHERE_USER_WILL_BE_EMPTY = '�� ������� �� ����� ������!';
const NETCAT_MODULE_AUTH_ACTION_BEFORE_FIRST_AUTHORIZATION = '�������� �� ������ ����������� ������������';
const NETCAT_MODULE_AUTH_ACTION_AFTER_FIRST_AUTHORIZATION = '�������� ����� ������ ����������� ������������';
const NETCAT_MODULE_AUTH_ACTION_FIELDS_MAPPING = '������������ �����';
const NETCAT_MODULE_AUTH_ACTION_FIELDS_MAPPING_ADD = '�������� ������������';
const NETCAT_MODULE_AUTH_PROVIDER_ADD = '�������� ����������';
const NETCAT_MODULE_AUTH_PROVIDER = '���������';
const NETCAT_MODULE_AUTH_PROVIDER_ICON = '������ ����������';


const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_CONFIRM_SUBJECT = '������������� ����������� �� ����� %SITE_NAME';
const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_CONFIRM_BODY =
"������������, %USER_LOGIN

�� ������� ������������������ �� ����� <a href='%SITE_URL'>%SITE_NAME</a>
��� �����: 	%USER_LOGIN
��� ������: 	%PASSWORD

����� ������������ ��� ������� ��������, ����������, ������ ������:

<a href='%CONFIRM_LINK'>%CONFIRM_LINK</a>

�� �������� ��� ���������, ������ ��� ��� email ����� ��� ��������������� �� ����� %SITE_URL
���� �� �� ���������������� �� ���� �����, ����������, �������������� ��� ������.

� ���������� �����������, ������������� ����� <a href='%SITE_URL'>%SITE_NAME</a>.
";

const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_CONFIRM_AFTER_SUBJECT = '����������� �� ����� %SITE_NAME ������� ������������';
const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_CONFIRM_AFTER_BODY =
"������������, %USER_LOGIN

��� ������� ������� �����������, ������ �� ������ � ������ ���� ������������ ������� ������ �����.

� ���������� �����������, ������������� ����� <a href='%SITE_URL'>%SITE_NAME</a>.
";

const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_PASSWORDRECOVERY_SUBJECT = '�������������� ������ �� ����� %SITE_NAME';
const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_PASSWORDRECOVERY_BODY =
"������������, %USER_LOGIN

��� �������������� ������ ��� ������������ %USER_LOGIN �� ����� <a href='%SITE_URL'>%SITE_NAME</a> ��������, ����������, ������ ������:

<a href='%CONFIRM_LINK'>%CONFIRM_LINK</a>

���� �� �� ����������� �������������� ������, ����������, �������������� ��� ������.

� ���������� �����������, ������������� ����� <a href='%SITE_URL'>%SITE_NAME</a>.
";
const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_ADMIN_NOTIFY_SUBJECT = '����� ������������ �� ����� %SITE_NAME';
const NETCAT_MODULE_AUTH_ADMIN_DEF_MAIL_ADMIN_NOTIFY_BODY =
"������������, �������������.

�� ����� <a href='%SITE_URL'>%SITE_NAME</a> ��������������� ����� ������������ � ������� %USER_LOGIN

� ���������� �����������, ���� <a href='%SITE_URL'>%SITE_NAME</a>.
";
const NETCAT_MODULE_AUTH_USER_AGREEMENT = "� �������� ������� <a href='%USER_AGR' target='_blank'>����������������� ����������</a>";
const NETCAT_MODULE_AUTH_AUTHENTICATION_FAILED = '�������� ������ �� ����� ��������������.';
const NETCAT_MODULE_AUTH_RETRY = '����������, �������� �������� � ���������� ��� ���, ������ ��� �����.';

// �������� ����������� ��������
const NETCAT_MODULE_AUTH_PROFILE_SUBDIVISION_NAME = '������ �������';
const NETCAT_MODULE_AUTH_EDIT_PROFILE_SUBDIVISION_NAME = '��� �������';
const NETCAT_MODULE_AUTH_CHANGE_PASS_SUBDIVISION_NAME = '������� ������';
const NETCAT_MODULE_AUTH_RECOVERY_PASS_SUBDIVISION_NAME = '�������������� ������';
const NETCAT_MODULE_AUTH_REGISTRATION_SUBDIVISION_NAME = '�����������';
