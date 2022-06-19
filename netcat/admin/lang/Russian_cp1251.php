<?php

/**
 * ������� �������� ������� ���� � ��������
 *
 * @param string $text ������;
 * @param bool $use_url_rules ������������ ������ ��� URL;
 * @return string ������;
 */
function nc_transliterate($text, $use_url_rules = false) {

    $tr = array("�" => "A", "�" => "a", "�" => "B", "�" => "b",
            "�" => "V", "�" => "v", "�" => "G", "�" => "g",
            "�" => "D", "�" => "d", "�" => "E", "�" => "e",
            "�" => "E", "�" => "e", "�" => "Zh", "�" => "zh",
            "�" => "Z", "�" => "z", "�" => "I", "�" => "i",
            "�" => "Y", "�" => "y", "��" => "X", "��" => "x",
            "�" => "K", "�" => "k", "�" => "L", "�" => "l",
            "�" => "M", "�" => "m", "�" => "N", "�" => "n",
            "�" => "O", "�" => "o", "�" => "P", "�" => "p",
            "�" => "R", "�" => "r", "�" => "S", "�" => "s",
            "�" => "T", "�" => "t", "�" => "U", "�" => "u",
            "�" => "F", "�" => "f", "�" => "H", "�" => "h",
            "�" => "Ts", "�" => "ts", "�" => "Ch", "�" => "ch",
            "�" => "Sh", "�" => "sh", "�" => "Sch", "�" => "sch",
            "�" => "Y", "�" => "y", "�" => "'", "�" => "'",
            "�" => "E", "�" => "e", "�" => "'", "�" => "'",
            "�" => "Yu", "�" => "yu", "�" => "Ya", "�" => "ya");

    $tr_text = strtr($text, $tr);
    if ($use_url_rules) {
      $tr_text = strtolower(trim($tr_text));
      $tr_text = preg_replace('/[^\w\-\ ]/', '', $tr_text);
      $tr_text = str_replace(' ', '-', $tr_text);
      $tr_text = preg_replace('/\-{2,}/', '-', $tr_text);
    }

    return $tr_text;
}

// Include deprecated strings if $NC_DEPRECATED_DISABLED is set to 0
if (isset($NC_DEPRECATED_DISABLED) && $NC_DEPRECATED_DISABLED==0) {
	$deprecated_file = preg_replace('/\.php/', '_old.php', __FILE__);
	if (file_exists($deprecated_file)) {
		include_once $deprecated_file;
	}
}
# MAIN
const MAIN_DIR = 'ltr';
const MAIN_LANG = 'ru';
const MAIN_NAME = 'Russian';
define("MAIN_ENCODING", $nc_core->NC_CHARSET);
define("MAIN_EMAIL_ENCODING", $nc_core->NC_CHARSET);

const CMS_SYSTEM_NAME = 'Netcat';
const CMS_SYSTEM_NAME_GLOBAL = 'Netcat';
const NETCAT_TREE_SITEMAP = '����� �����';
const NETCAT_TREE_MODULES = '������ � �������';
const NETCAT_TREE_USERS = '������������';

const NETCAT_TREE_PLUS_TITLE = '�������� ������';
const NETCAT_TREE_MINUS_TITLE = '�������� ������';

const NETCAT_TREE_QUICK_SEARCH = '������� �����';

// Tabs
const NETCAT_TAB_REFRESH = '��������';

const STRUCTURE_TAB_SUBCLASS_ADD = '�������� ��������';
const STRUCTURE_TAB_INFO = '����������';
const STRUCTURE_TAB_SETTINGS = '���������';
const STRUCTURE_TAB_USED_SUBCLASSES = '���������';
const STRUCTURE_TAB_EDIT = '��������������';
const STRUCTURE_TAB_PREVIEW = '�������� &rarr;';
const STRUCTURE_TAB_PREVIEW_SITE = '������� �� ���� &rarr;';


const CLASS_TAB_INFO = '���������';
const CLASS_TAB_EDIT = '�������������� ����������';
const CLASS_TAB_CUSTOM_ACTION = '������� ��������';
const CLASS_TAB_CUSTOM_ADD = '����������';
const CLASS_TAB_CUSTOM_EDIT = '���������';
const CLASS_TAB_CUSTOM_DELETE = '��������';
const CLASS_TAB_CUSTOM_SEARCH = '�����';

# BeginHtml
const BEGINHTML_TITLE = '�����������������';
const BEGINHTML_USER = '������������';
const BEGINHTML_VERSION = '������';
const BEGINHTML_PERM_GUEST = '�������� ������';
const BEGINHTML_PERM_DIRECTOR = '��������';
const BEGINHTML_PERM_SUPERVISOR = '����������';
const BEGINHTML_PERM_CATALOGUEADMIN = '������������� �����';
const BEGINHTML_PERM_SUBDIVISIONADMIN = '������������� �������';
const BEGINHTML_PERM_SUBCLASSADMIN = '������������� ���������';
const BEGINHTML_PERM_CLASSIFICATORADMIN = '������������� ������';
const BEGINHTML_PERM_MODERATOR = '���������';

const BEGINHTML_LOGOUT = '����� �� �������';
const BEGINHTML_LOGOUT_OK = '����� ��������.';
const BEGINHTML_LOGOUT_RELOGIN = '����� ��� ������ ������';
const BEGINHTML_LOGOUT_IE = '��� ���������� ������ �������� ��� ���� ��������.';


const BEGINHTML_ALARMON = '������������� ��������� ���������';
const BEGINHTML_ALARMOFF = '��������� ���������: ������������� ���';
const BEGINHTML_ALARMVIEW = '�������� ���������� ���������';
const BEGINHTML_HELPNOTE = '���������';

# EndHTML
define("ENDHTML_NETCAT", CMS_SYSTEM_NAME === 'Netcat' ? "<div class='bottom_line'><div class='left'>&copy; 1999&#8212;" . date("Y") . " <a href='https://netcat.ru'>Netcat</a></div></div>" : '');

# Common
const NETCAT_ADMIN_DELETE_SELECTED = '������� ���������';
const NETCAT_SELECT_SUBCLASS_DESCRIPTION = '� ������� �%s� ������� ��������� ����������� ���� �%s�.<br />
  �������� ��������� �������, � ������� ����� ��������� ������, ����� �� �������� ����������.';

# INDEX PAGE
const SECTION_INDEX_SITES_SETTINGS = '��������� ������';
const SECTION_INDEX_MODULES_MUSTHAVE = '�� �������������';
const SECTION_INDEX_MODULES_DESCRIPTION = '��������';
const SECTION_INDEX_MODULES_TRANSITION = '������� �� ������� ��������';
const DASHBOARD_WIDGET = '������ ��������';
const DASHBOARD_ADD_WIDGET = '�������� ������';
const DASHBOARD_DEFAULT_WIDGET = '������� �� ���������';
const DASHBOARD_WIDGET_SYS_NETCAT = '� �������';
const DASHBOARD_WIDGET_MOD_AUTH = '���������� ��';
const DASHBOARD_UPDATES_EXISTS = '���� ����������';
const DASHBOARD_UPDATES_DONT_EXISTS = '��� ����������';
const DASHBOARD_DONT_ACTIVE = '����������������';
const DASHBOARD_TODAY = '�������';
const DASHBOARD_YESTERDAY = '�����';
const DASHBOARD_PER_WEEK = '� ������';
const DASHBOARD_WAITING = '����';


# MODULES LIST
const NETCAT_MODULE_DEFAULT = '��������� ������������';
const NETCAT_MODULE_AUTH = '������ �������';
const NETCAT_MODULE_SEARCH = '����� �� �����';
const NETCAT_MODULE_SERCH = '����� �� ����� (������ ������)';
const NETCAT_MODULE_POLL = '����������� (��������)';
const NETCAT_MODULE_ESHOP = '��������-������� (������)';
const NETCAT_MODULE_STATS = '���������� ���������';
const NETCAT_MODULE_SUBSCRIBE = '�������� � ��������';
const NETCAT_MODULE_BANNER = '���������� ��������';
const NETCAT_MODULE_FORUM = '�����';
const NETCAT_MODULE_FORUM2 = '����� v2';
const NETCAT_MODULE_NETSHOP = '��������-�������';
const NETCAT_MODULE_LINKS = '���������� ��������';
const NETCAT_MODULE_CAPTCHA = '������ ���� ���������';
const NETCAT_MODULE_TAGSCLOUD = '������ �����';
const NETCAT_MODULE_BLOG = '���� � ����������';
const NETCAT_MODULE_CALENDAR = '���������';
const NETCAT_MODULE_COMMENTS = '�����������';
const NETCAT_MODULE_LOGGING = '�����������';
const NETCAT_MODULE_FILEMANAGER = '����-��������';
const NETCAT_MODULE_CACHE = '�����������';
const NETCAT_MODULE_MINISHOP = '�����������';
const NETCAT_MODULE_ROUTING = '�������������';
const NETCAT_MODULE_AIREE = '���� CDN';

const NETCAT_MODULE_NETSHOP_MODULEUNCHECKED = '������ ���������-������� �� ���������� ��� ��������!';
# /MODULES LIST

const SECTION_INDEX_USER_STRUCT_CLASSIFICATOR = '������';

const SECTION_INDEX_USER_RIGHTS_TYPE = '��� ����';
const SECTION_INDEX_USER_RIGHTS_RIGHTS = '�����';

const SECTION_INDEX_USER_USER_MAIL = '�������� �� ����';
const SECTION_INDEX_USER_SUBSCRIBERS = '�������� ������������';

const SECTION_INDEX_DEV_CLASSES = '����������';
const SECTION_INDEX_DEV_CLASS_TEMPLATES = '������� ����������';
const SECTION_INDEX_DEV_TEMPLATES = '������ �������';


const SECTION_INDEX_ADMIN_PATCHES_INFO = '��������� ����������';
const SECTION_INDEX_ADMIN_PATCHES_INFO_VERSION = '������ �������';
const SECTION_INDEX_ADMIN_PATCHES_INFO_REDACTION = '�������� �������';
const SECTION_INDEX_ADMIN_PATCHES_INFO_LAST_PATCH = '��������� ����������';
const SECTION_INDEX_ADMIN_PATCHES_INFO_LAST_PATCH_DATE = '��������� �������� ����������';
const SECTION_INDEX_ADMIN_PATCHES_INFO_CHECK_PATCH = '��������� ������� ����������';

const SECTION_INDEX_REPORTS_STATS = '����� ���������� �������';
const SECTION_INDEX_REPORTS_SYSTEM = '��������� ���������';



# SECTION CONTROL
const SECTION_CONTROL_CONTENT_CATALOGUE = '�����';
const SECTION_CONTROL_CONTENT_FAVORITES = '������� ��������������';
const SECTION_CONTROL_CONTENT_CLASSIFICATOR = '������';

# SECTION USER
const SECTION_CONTROL_USER = '������������';
const SECTION_CONTROL_USER_LIST = '������ �������������';
const SECTION_CONTROL_USER_PERMISSIONS = '������������ � �����';
const SECTION_CONTROL_USER_GROUP = '������ �������������';
const SECTION_CONTROL_USER_MAIL = '�������� �� ����';

# SECTION CLASS
const SECTION_CONTROL_CLASS = '����������';
const CONTROL_CLASS_USE_CAPTCHA = '�������� ����� ���������� ���������';
const CONTROL_CLASS_CACHE_FOR_AUTH = '����������� �� �����������';
const CONTROL_CLASS_CACHE_FOR_AUTH_NONE = '�� ������������';
const CONTROL_CLASS_CACHE_FOR_AUTH_USER = '��������� ������� ������������';
const CONTROL_CLASS_CACHE_FOR_AUTH_GROUP = '��������� �������� ������ ������������';
const CONTROL_CLASS_CACHE_FOR_AUTH_DESCRIPTION = '���� � ���������� ����� �������� ������ ���������� ��� ������� ������������, ��� ��������� �������� ������� ��������� �������.';
const CONTROL_CLASS_ADMIN = '�����������������';
const CONTROL_CLASS_CONTROL = '����������';
const CONTROL_CLASS_FIELDSLIST = '������ �����';
const CONTROL_CLASS_CLASS_GOTOFIELDS = '������� � ������ ����� ����������';
const CONTROL_CLASS_CLASSFORM_ADDITIONAL_INFO = '�������������� ����������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SORTNOTE = '��������_����_1[ DESC][, ��������_����_2[ DESC]][, ...]<br>DESC - ���������� �� ��������';
const CONTROL_CLASS_CLASS_SHOW_VAR_FUNC_LIST = '�������� ������ ���������� � �������';
const CONTROL_CLASS_CLASS_SHOW_VAR_LIST = '�������� ������ ����������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_AUTODEL = '������� ������� �����';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_AUTODELEND = '���� ����� ����������';
const CONTROL_CLASS_CLASS_FORMS_YES = '��';
const CONTROL_CLASS_CLASS_FORMS_NO = '���';
// NB: ��������� CONTROL_CLASS_CLASS_* ����� ������������ � nc_tpl_fields / nc_tpl_component_view, �� ����� defined(),
// ������� IDE �� ����� ������ �� �������������
const CONTROL_CLASS_CLASS_FORMS_ADDFORM = '�������������� ����� ���������� �������';
const CONTROL_CLASS_CLASS_FORMS_ADDFORM_GEN = '������������� ��� �����';
const CONTROL_CLASS_CLASS_FORMS_ADDRULES = '������� ���������� �������';
const CONTROL_CLASS_CLASS_FORMS_ADDCOND_GEN = '������������� ��� �������';
const CONTROL_CLASS_CLASS_FORMS_ADDLASTACTION = '�������� ����� ���������� �������';
const CONTROL_CLASS_CLASS_FORMS_ADDACTION_GEN = '������������� ��� ��������';
const CONTROL_CLASS_CLASS_FORMS_EDITFORM = '�������������� ����� ��������� �������';
const CONTROL_CLASS_CLASS_FORMS_EDITFORM_GEN = '������������� ��� �����';
const CONTROL_CLASS_CLASS_FORMS_EDITRULES = '������� ��������� �������';
const CONTROL_CLASS_CLASS_FORMS_EDITCOND_GEN = '������������� ��� �������';
const CONTROL_CLASS_CLASS_FORMS_EDITLASTACTION = '�������� ����� ��������� �������';
const CONTROL_CLASS_CLASS_FORMS_EDITACTION_GEN = '������������� ��� ��������';
const CONTROL_CLASS_CLASS_FORMS_ONONACTION = '�������� ����� ��������� � ���������� �������';
const CONTROL_CLASS_CLASS_FORMS_CHECKACTION_GEN = '������������� ��� ��������';
const CONTROL_CLASS_CLASS_FORMS_DELETEFORM = '�������������� ����� �������� �������';
const CONTROL_CLASS_CLASS_FORMS_DELETERULES = '������� �������� �������';
const CONTROL_CLASS_CLASS_FORMS_ONDELACTION = '�������� ����� �������� �������';
const CONTROL_CLASS_CLASS_FORMS_DELETEACTION_GEN = '������������� ��� ��������';
const CONTROL_CLASS_CLASS_FORMS_QSEARCH = '����� ������ ����� ������� ��������';
const CONTROL_CLASS_CLASS_FORMS_QSEARCH_GEN = '������������� ��� �����';
const CONTROL_CLASS_CLASS_FORMS_SEARCH = '����� ������������ ������ (�� ��������� ��������)';
const CONTROL_CLASS_CLASS_FORMS_SEARCH_GEN = '������������� ��� �����';
const CONTROL_CLASS_CLASS_FORMS_MAILRULES = '������� ��� ��������';
const CONTROL_CLASS_CLASS_FORMS_MAILTEXT = '������ ������ ��� �����������';
define("CONTROL_CLASS_CLASS_FORMS_QSEARCH_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_QSEARCH."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_SEARCH_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_SEARCH."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_ADDFORM_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_ADDFORM."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_EDITFORM_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_EDITFORM."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_ADDCOND_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_ADDRULES."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_EDITCOND_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_EDITRULES."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_ADDACTION_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_ADDLASTACTION."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_EDITACTION_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_EDITLASTACTION."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_CHECKACTION_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_ONONACTION."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
define("CONTROL_CLASS_CLASS_FORMS_DELETEACTION_GEN_WARN", "���� \\\"".CONTROL_CLASS_CLASS_FORMS_ONDELACTION."\\\" �� ������! �������� ����� � ���� ���� �� �����?");
const CONTROL_CLASS_CUSTOM_SETTINGS_ISNOTSET = '��������� ����������� ���������� ������� �����������.';
const CONTROL_CLASS_CUSTOM_SETTINGS_INHERIT_FROM_PARENT = '��������� ����������� ������� ���������� �������� � ����� ����������.';

# SECTION WIDGET
const WIDGETS = '�������';
const WIDGETS_LIST_IMPORT = '������';
const WIDGETS_LIST_ADD = '��������';
const WIDGETS_PARAMS = '���������';
const SECTION_INDEX_DEV_WIDGET = '������-����������';
const CONTROL_WIDGETCLASS_ADD = '�������� ������';
const WIDGET_LIST_NAME = '��������';
const WIDGET_LIST_CATEGORY = '���������';
const WIDGET_LIST_ALL = '���';
const WIDGET_LIST_GO = '�������';
const WIDGET_LIST_FIELDS = '����';
const WIDGET_LIST_DELETE = '�������';
const WIDGET_LIST_DELETE_WIDGETCLASS = '������-���������:';
const WIDGET_LIST_DELETE_WIDGET = '�������:';
const WIDGET_LIST_EDIT = '��������������';
const WIDGET_LIST_AT = '������� ��������';
const WIDGET_LIST_ADDWIDGET = '�������� ������-���������';
const WIDGET_LIST_DELETE_SELECTED = '������� ���������';
const WIDGET_LIST_ERROR_DELETE = '������� �������� ������-���������� ��� ��������';
const WIDGET_LIST_INSERT_CODE = '��� ��� �������';
const WIDGET_LIST_INSERT_CODE_CLASS = '��� ��� ������� � �����/���������';
const WIDGET_LIST_INSERT_CODE_TEXT = '��� ��� ������� � �����';
const WIDGET_LIST_LOAD = '��������...';
const WIDGET_LIST_PREVIEW = '������';
const WIDGET_LIST_EXPORT = '�������������� ������-��������� � ����';
const WIDGET_ADD_CREATENEW = '������� ����� ������-��������� &quot;� ����&quot;';
const WIDGET_ADD_CONTINUE = '����������';
const WIDGET_ADD_CREATENEW_BASICOLD = '������� ����� ������-��������� �� ������ �������������';
const WIDGET_ADD_NAME = '��������';
const WIDGET_ADD_KEYWORD = '�������� �����';
const WIDGET_ADD_UPDATE = '��������� ������� ������ N ����� (0 - �� ���������)';
const WIDGET_ADD_NEWGROUP = '����� ������';
const WIDGET_ADD_DESCRIPTION = '�������� ������-����������';
const WIDGET_ADD_OBJECTVIEW = '������ �����������';
const WIDGET_ADD_PAGEBODY = '����������� �������';
const WIDGET_ADD_DOPL = '�������������';
const WIDGET_ADD_DEVELOP = '� ����������';
const WIDGET_ADD_SYSTEM = '��������� ���������';
const WIDGETCLASS_ADD_ADD = '�������� ������-���������';
const WIDGET_ADD_ADD = '�������� ������';
const WIDGET_ADD_ERROR_NAME = '������� �������� ������-����������';
const WIDGET_ADD_ERROR_KEYWORD = '������� �������� �����';
const WIDGET_ADD_ERROR_KEYWORD_EXIST = '�������� ����� ������ ���� ����������';
const WIDGET_ADD_WK = '������-���������';
const WIDGET_ADD_OK = '������ ������� ��������';
const WIDGET_ADD_DISALLOW = '��������� ����������� � ������';
const WIDGET_IS_STATIC = '��������� ������';
const WIDGET_EDIT_SAVE = '��������� ���������';
const WIDGET_EDIT_OK = '��������� ���������';
const WIDGET_INFO_DESCRIPTION = '�������� ������-����������';
const WIDGET_INFO_DESCRIPTION_NONE = '�������� �����������';
const WIDGET_INFO_PREVIEW = '������';
const WIDGET_INFO_INSERT = '��� ��� ������� � �����/���������';
const WIDGET_INFO_INSERT_TEXT = '��� ��� ������� � �����';
const WIDGET_INFO_GENERATE = '������ ���������� ��� ������������ ������� � �����/���������';
const WIDGET_DELETE_WARNING = '��������: ������-���������%s � ��� � ���%s ��������� ����� �������.';
const WIDGET_DELETE_CONFIRMDELETE = '����������� ��������';
const WIDGET_DELETE = '��������: ������ ����� �����.';
const WIDGET_ACTION_ADDFORM = '�������������� ����� ���������� �������';
const WIDGET_ACTION_EDITFORM = '�������������� ����� ��������� �������';
const WIDGET_ACTION_BEFORE_SAVE = '�������� ����� ����������� �������';
const WIDGET_ACTION_AFTER_SAVE = '�������� ����� ���������� �������';
const WIDGET_IMPORT = '�������������';
const WIDGET_IMPORT_TAB = '������';
const WIDGET_IMPORT_CHOICE = '�������� ����';
const WIDGET_IMPORT_ERROR = '������ ���������� �����';
const WIDGET_IMPORT_OK = '������-��������� ������� ������������';

const SECTION_CONTROL_WIDGET = '�������';
const SECTION_CONTROL_WIDGETCLASS = '������-����������';
const SECTION_CONTROL_WIDGET_LIST = '������ ��������';
const CONTROL_WIDGET_ACTIONS_EDIT = '��������������';
const CONTROL_WIDGET_NONE = '� ������� ��� �� ������ ������-����������';
const TOOLS_WIDGET = '�������';
const CONTROL_WIDGET_ADD_ACTION = '���������� �������';
const CONTROL_WIDGETCLASS_ADD_ACTION = '���������� ������-����������';
const SECTION_INDEX_DEV_WIDGETS = '�������';
const CONTROL_WIDGETCLASS_IMPORT = '������ �������';
define("CONTROL_WIDGETCLASS_FILES_PATH", "����� ������-���������� ��������� � ����� <a href='%s'>%s</a>");

const WIDGET_TAB_INFO = '����������';
const WIDGET_TAB_EDIT = '�������������� ������-����������';
const WIDGET_TAB_CUSTOM_ACTION = '������� ��������';
const NETCAT_REMIND_SAVE_TEXT = '����� ��� ����������?';
const NETCAT_REMIND_SAVE_SAVE = '���������';
const SECTION_SECTIONS_INSTRUMENTS_WIDGETS = '�������';

# SECTION TEMPLATE
const SECTION_CONTROL_TEMPLATE_SHOW = '������ �������';

# SECTIONS OPTIONS
const SECTION_SECTIONS_OPTIONS = '��������� �������';
const SECTION_SECTIONS_OPTIONS_MODULE_LIST = '���������� ��������';
const SECTION_SECTIONS_OPTIONS_WYSIWYG = '��������� WYSIWYG';
const SECTION_SECTIONS_OPTIONS_SYSTEM = '��������� �������';
const SECTION_SECTIONS_OPTIONS_SECURITY = '������������';

# SECTIONS OPTIONS
const SECTION_SECTIONS_INSTRUMENTS_SQL = '��������� ������ SQL';
const SECTION_SECTIONS_INSTRUMENTS_TRASH = '������� ��������� ��������';
const SECTION_SECTIONS_INSTRUMENTS_CRON = '���������� ��������';
const SECTION_SECTIONS_INSTRUMENTS_HTML = 'HTML-��������';

# SECTIONS MODDING
const SECTION_SECTIONS_MODDING_ARHIVES = '������ �������';

# REPORTS
const SECTION_REPORTS_TOTAL = '����� ���������� �������';
const SECTION_REPORTS_SYSMESSAGES = '��������� ���������';

# SUPPORT

# ABOUT
const SECTION_ABOUT_TITLE = '� ���������';
const SECTION_ABOUT_HEADER = '� ���������';
const SECTION_ABOUT_BODY = "������� ���������� ������� Netcat <font color=%s>%s</font> ������ %s. ��� ����� ��������.<br><br>\n���-���� ������� Netcat: <a target=_blank href=https://netcat.ru>www.netcat.ru</a><br>\nEmail ������ ���������: <a href=mailto:support@netcat.ru>support@netcat.ru</a>\n<br><br>\n�����������: ��� �������<br>\nEmail: <a href=mailto:info@netcat.ru>info@netcat.ru</a><br>\n+7 (495) 783-6021<br>\n<a target=_blank href=https://netcat.ru>www.netcat.ru</a><br>";
const SECTION_ABOUT_DEVELOPER = '����������� �������';

// ARRAY-2-FORMS


# INDEX
const CONTROL_CONTENT_CATALOUGE_SITE = '�����';
const CONTROL_CONTENT_CATALOUGE_ONESITE = '����';
const CONTROL_CONTENT_CATALOUGE_ADD = '����������';
const CONTROL_CONTENT_CATALOUGE_SITEDELCONFIRM = '������������� �������� �����';
const CONTROL_CONTENT_CATALOUGE_ADDSECTION = '���������� �������';
const CONTROL_CONTENT_CATALOUGE_ADDSITE = '���������� �����';
const CONTROL_CONTENT_CATALOUGE_SITEOPTIONS = '��������� �����';

const CONTROL_CONTENT_CATALOUGE_ERROR_CASETREE_ONE = '�������� ����� �� ����� ���� ������!';
const CONTROL_CONTENT_CATALOUGE_ERROR_DUPLICATE_DOMAIN = '���� � ����� �������� ������ ��� ���������� � �������. ������� ������ �������� ���.';
const CONTROL_CONTENT_CATALOUGE_ERROR_CASETREE_THREE = '�������� ��� ����� ��������� ������ ��������� �����, �����, �������������, ����� � �����! ����� ������ ����������� � �������. �������� �������� �����.';
const CONTROL_CONTENT_CATALOUGE_ERROR_DOMAIN_NOT_SET = '�������� ��� �� �������';
const CONTROL_CONTENT_CATALOUGE_ERROR_INCORRECT_DOMAIN = '��������� �����';
define("CONTROL_CONTENT_CATALOUGE_ERROR_INCORRECT_DOMAIN_FULLTEXT", "���������, ��������� �� ������ �����. " . CMS_SYSTEM_NAME . " ������ ���� ���������� � �������� ����� ����� ������ (��� ��������)!");
const CONTROL_CONTENT_CATALOUGE_ERROR_CANNOT_CREATE_MORE = '�� ������ ����� ������ �������� ��� ���� ����. (��� ����������� ����������� � ���������� ������ �������.)';

const CONTROL_CONTENT_CATALOUGE_SUCCESS_ADD = '���� ������� ��������!';
const CONTROL_CONTENT_CATALOUGE_SUCCESS_EDIT = '��������� ����� ������� ��������!';
const CONTROL_CONTENT_CATALOUGE_SUCCESS_DELETE = '���� ������� ������!';

const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MAININFO = '�������� ����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NAME = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DOMAIN = '�����';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_CATALOGUEFORM_LANG = '���� ����� (ISO 639-1)';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MIRRORS = '������� (�� ������ �� �������)';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_OFFLINE = '����������, ����� ���� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ROBOTS = '���������� ����� Robots.txt';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ROBOTS_DONT_CHANGE = '�� ��������� ���������� ����� �������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ROBOTS_FILE_EXIST = '��������! ���� robots.txt ������������ � ����� �����. ������� ��� ���������� ��������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_TEMPLATE = '����� �������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_TITLEPAGE = '��������� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_TITLEPAGE_PAGE = '��������� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NOTFOUND = '�������� �� ������� (������ 404)';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NOTFOUND_PAGE = '�������� �� �������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_PRIORITY = '���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ON = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_HTTPS_ENABLED = '������������ HTTPS';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_STORE_VERSIONS = '������� ������ ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_REMOVE_VERSIONS = '��������: ���������� �� ������� ��������� �������� ����� �������!';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_LABEL_COLOR = '���� �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DEFAULT_CLASS = '��������� �� ���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_POLICY = '���������� �� ������������� �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_SEARCH = '�����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_AUTH_PROFILE = '������ �������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_AUTH_PROFILE_MODIFY = '��� �������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_AUTH_PROFILE_SIGNUP = '�����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_CART = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_ORDER_SUCCESS = '����� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_ORDER_LIST = '��� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_COMPARE = '��������� �������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_FAVORITES = '��������� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_NETSHOP_DELIVERY = '������� �������� � ��������';

const CONTROL_CONTENT_SITE_ADD_EMPTY = '����� ������ ����';
const CONTROL_CONTENT_SITE_ADD_WITH_CONTENT = '������� ����';
const CONTROL_CONTENT_SITE_CATEGORY = '���������';
const CONTROL_CONTENT_SITE_CATEGORY_ANY = '�����';
const CONTROL_CONTENT_SITE_ADD_DATA_ERROR = '�� ������� ��������� ������ ��������� ������� ������';
const CONTROL_CONTENT_SITE_ADD_PREVIEW = '����';
const CONTROL_CONTENT_SITE_ADD_DOWNLOADING = '������������ ���������� � ������������ �����';
const CONTROL_CONTENT_SITE_ADD_DOWNLOADING_ERROR = '�� ������� ��������� ����� � ������';

const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DISPLAYTYPE = '������ �����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DISPLAYTYPE_TRADITIONAL = '������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DISPLAYTYPE_SHORTPAGE = 'Shortpage';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DISPLAYTYPE_LONGPAGE_VERTICAL = 'Longpage';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_DISPLAYTYPE_LONGPAGE_HORIZONTAL = 'Longpage ��������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ACCESS = '������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_USERS = '������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_VIEW = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_COMMENT = '���������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_CHANGE = '���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_SUBSCRIBE = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_EXTFIELDS = '�������������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_SAVE = '���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_WARNING_SITEDELETE_I = '�';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_WARNING_SITEDELETE_U = '�';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_WARNING_SITEDELETE = '��������: ����%s � ��� � ���%s ��������� ����� �������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_CONFIRMDELETE = '����������� ��������';

const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_SETTINGS = '��������� �����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_SIMPLE = '������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE = '��������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_ADAPTIVE = '���������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_USE_RESS = '������������ ���������� RESS';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_FOR = '��������� ������ ��� �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_FOR_NOTICE = '�������� ������ ��� ��������� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_REDIRECT = '������������ �������������� �������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_NONE = '[���]';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_DELETE = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_CHANGE = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_CRITERION = '���������� ����������� ��: ';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_USERAGENT = 'User-agent';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_SCREEN_RESOLUTION = '���������� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_CATALOGUEFORM_MOBILE_ALL_CRITERION = '��� ��������������';

const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_CREATED = '���� �������� �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_UPDATED = '���� ��������� ���������� � �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_SECTIONSCOUNT = '���������� �����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_SITESTATUS = '������ �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_ON = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_OFF = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_ADD = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_USERS = '������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_READACCESS = '������ �� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_ADDACCESS = '������ �� ����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_EDITACCESS = '������ �� ���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_SUBSCRIBEACCESS = '������ �� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_PUBLISHACCESS = '���������� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_VIEW = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_ADDING = '����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_SEARCHING = '�����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_SUBSCRIBING = '��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_EDIT = '��������������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_DELETE = '������� ����';

const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_SITE = '����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_SUBSECTIONS = '����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_PRIORITY = '���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_GOTO = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_DELETE = '�������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_LIST = '������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_TOOPTIONS = '�������� ��������� �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_SHOW = '���������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_EDIT = '�������� ����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_NONE = '� ������� ��� �� ������ �����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_ADDSITE = '�������� ����';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_SAVE = '��������� ���������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_DBERROR = '������ ������� �� ����!';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWCATALOGUELIST_SECTIONWASCREATED = '������ ������ %s<br>';

# CONTROL CONTENT SUBDIVISION
const CONTROL_CONTENT_SUBDIVISION_FAVORITES_TITLE = '������� ��������������';
const CONTROL_CONTENT_SUBDIVISION_FULL_TITLE = '����� �����';

# CONTROL CONTENT SUBDIVISION
const CONTROL_CONTENT_SUBDIVISION_INDEX_SITES = '�����';
const CONTROL_CONTENT_SUBDIVISION_INDEX_SECTIONS = '�������';
const CONTROL_CONTENT_SUBDIVISION_CLASS = '��������';
const CONTROL_CONTENT_SUBDIVISION_INDEX_ADDSECTION = '���������� �������';
const CONTROL_CONTENT_SUBDIVISION_INDEX_OPTIONSECTION = '��������� �������';
const CONTROL_CONTENT_SUBDIVISION_INDEX_DELETECONFIRMATION = '������������� ��������';
const CONTROL_CONTENT_SUBDIVISION_INDEX_MOVESECTION = '������� �������';
const CONTROL_CONTENT_SUBDIVISION_INDEX_ERROR_THREE_NAME = '������� �������� �������!';
const CONTROL_CONTENT_SUBDIVISION_INDEX_ERROR_THREE_KEYWORD = '������ �������� ����� ��� ������������. ������� ������ �������� �����.';
const CONTROL_CONTENT_SUBDIVISION_INDEX_ERROR_THREE_PARENTSUB = '�� ������ ������������ ������!';
const CONTROL_CONTENT_SUBDIVISION_INDEX_ERROR = '������ ���������� �������';

const CONTROL_CONTENT_SUBDIVISION_SUCCESS_EDIT = '��������� ������� ���������';

const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_CLASSLIST_SECTION = '������ ����������� �������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_CLASSLIST_SITE = '������ ����������� �� �����';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ADDCLASS = '���������� ���������� � ������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_OPTIONSCLASS = '��������� ���������� �������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ADDCLASSSITE = '���������� ���������� �� ����';
const CONTROL_CONTENT_AREA_SUBCLASS_SETTINGS_TOOLTIP = '�������� ��������� ���������';

const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_NAME = '�������� ��������� �� ����� ���� ������!';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_KEYWORD_INVALID = '�������� ����� �������� ������������ �������, ���� ������� �������. ��� ����� ��������� ������ �����, ����� � ������ �������������, � �� ����� ���� ������� 64 ��������.';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_KEYWORD = '������ �������� ����� ��� ������ ����� �� ����������. ������� ������ �������� �����.';

const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_SUCCESS_ADD = '�������� ������� ��������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_ADD = '������ ���������� ��������� � ������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_SUCCESS_EDIT = '�������� ������� �������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_EDIT = '������ �������������� ���������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_ERROR_DELETE = '������ �������� ���������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_LIST_SUCCESS_EDIT = '������ ���������� ������� �������';
const CONTROL_CONTENT_SUBDIVISION_SUBCLASS_LIST_ERROR_EDIT = '������ �������������� ������ ����������';

const CONTROL_CONTENT_SUBDIVISION_FIRST_SUBCLASS = '� ������ ������� ��� �� ������ ���������.<br />��� ����, ����� ��������� ���������� � ������, ���������� �������� � ���� ���� �� ���� ��������.';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_SECTION = '������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_SUBSECTIONS = '����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_GOTO = '�������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_NOONEFAVORITES = '��� ��������� ��������.';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_TOOPTIONS = '�������� ��������� �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_TOOPTIONSSUBCLASS = '�������� ��������� ���������� � �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_TOVIEW = '���������� ��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_TOEDIT = '�������� ����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_PRIORITY = '���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_DELETE = '�������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_NONE = '���';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LIST = '������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ADD = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_NOSECTIONS = '� ������� ����� ��� �� ������ �������.';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_NOSUBSECTIONS = '� ������ ������� ��� �����������.';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ADDSECTION = '�������� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_CONTINUE = '����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_SELECT_ROOT_SECTION = '�������� ������, � ������� ������ �������� �����';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_SAVE = '��������� ���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ADDFAVOTITES = '���������� ������ � &quot;��������� ��������&quot;';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_USEEDITDESIGNTEMPLATE = '������������ ���� ����� ��� �������������� ��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA = '�������� ����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_NAME = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_KEYWORD = '�������� �����';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_EXTURL = '������� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_LANG = '���� ������� (ISO 639-1)';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DTEMPLATE = '����� �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DTEMPLATE_CS = '��������� ������ �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DTEMPLATE_EDIT = '������������� ��� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DTEMPLATE_N = '�����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_MAINAREA_MIXIN_SETTINGS = '��������� ����������� ������� �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_TURNON = '�������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_TURNOFF = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_A_ADDSUBSECTION = '�������� ���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_A_REMSITE = '������� ����';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_MULTI_SUB_CLASS = '��������� ���������� � �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE = '������ �����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE_INHERIT = '�����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE_TRADITIONAL = '������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE_SHORTPAGE = 'Shortpage';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE_LONGPAGE_VERTICAL = 'Longpage';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_MAINDATA_DISPLAYTYPE_LONGPAGE_HORIZONTAL = 'Longpage ��������������';

const CONTROL_TEMPLATE_CUSTOM_SETTINGS_NOT_AVAILABLE = '������ ����� ������� �� ����� �������������� ��������.';
const CONTROL_TEMPLATE_CUSTOM_SETTINGS = '��������� ����������� ������ ������� � �������';
const CONTROL_TEMPLATE_CUSTOM_SETTINGS_ISNOTSET = '��������� ����������� ������ ������� � ������� �����������';
const CONTROL_TEMPLATE_CUSTOM_SETTINGS_INHERITED_FROM_SITE = "�������� ����������, ������� �� ������ � ���������� ����� �������,
        ����� ����� �� <a href='%s' target='_top'>�������� ������ �����</a>.";
const CONTROL_TEMPLATE_CUSTOM_SETTINGS_INHERITED_FROM_FOLDER = "�������� ����������, ������� �� ������ � ���������� ����� �������,
        ����� ����� �� <a href='%s' target='_top'>�������� ������ ������� �%s�</a>.";

const CONTROL_CUSTOM_SETTINGS_INHERIT = '������������ ��������, �������� � ������������ �������';
const CONTROL_CUSTOM_SETTINGS_OFF = '���';
const CONTROL_CUSTOM_SETTINGS_ON = '��';

const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_A_EDIT = '�������� ����������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_A_KILL = '������� ���� ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_SHOWMENU_A_VIEW = '���������� ��������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_MSG_OK = '������ ������� ��������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_A_ADDCLASSTOSECTION = '�������� ��������� � ������';
const CONTROL_CONTENT_CATALOUGE_FUNCS_A_BACKTOSECTIONLIST = '��������� � ������ ��������';

const CONTROL_CONTENT_CATALOUGE_FUNCS_ERROR_NOCATALOGUE = '���� �� ����������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_ERROR_NOSUBDIVISION = '������ �� ����������.';
const CONTROL_CONTENT_CATALOUGE_FUNCS_ERROR_NOSUBCLASS = '��������� � ������� �� ����������.';

const CLASSIFICATOR_COMMENTS_DISABLE = '���������';
const CLASSIFICATOR_COMMENTS_ENABLE = '���������';
const CLASSIFICATOR_COMMENTS_NOREPLIED = '���������, ���� ��� �������';

const CONTROL_CONTENT_CATALOGUE_FUNCS_COMMENTS = '���������������';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_COMMENTS = '���������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_COMMENTS_ADD = '���������� ������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_COMMENTS_AUTHOR_EDIT = '�������������� ����� ������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_COMMENTS_AUTHOR_DELETE = '�������� ����� ������������';

const CONTROL_CONTENT_CATALOGUE_FUNCS_DEMO_MODE = '����-�����';
const CONTROL_CONTENT_CATALOGUE_FUNCS_DEMO_MODE_CHECKBOX = '���������������� ����� ������ �����';

const CONTROL_CONTENT_SUBCLASS_FUNCS_COMMENTS = '���������������';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS = '������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INHERIT = '�����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_PUBLISH = '���������� ��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INFO_READ = '������ �� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INFO_ADD = '������ �� ����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INFO_EDIT = '������ �� ���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INFO_SUBSCRIBE = '������ �� ��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_INFO_PUBLISH = '���������� ��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_USERS = '������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_VIEW = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_READ = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_COMMENT = '���������������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_ADD = '����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_WRITE = '����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_EDIT = '���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_CHECKED = '���������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_DELETE = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_SUBSCRIBE = '��������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_ACCESS_ADVANCEDFIELDS = '�������������� ����';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_OBJ_HOWSHOW = '��������� �����������';
const CONTROL_CONTENT_SUBDIVISION_CUSTOM_SETTINGS_TEMPLATE = '��������� ����������� ����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_OBJ_YES = '��';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_OBJ_NO = '���';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_INFO_UPDATED = '���� ��������� ���������� � �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_INFO_CLASS_COUNT = '���������� �����������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_INFO_STATUS = '������ �������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_INFO_SUBSECTIONS_COUNT = '���������� �����������';


const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_DELETE = '������� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_ROOT = '�������� ������';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_DELETE_CONFIRMATION = '����������� ��������';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_WARNING = '��������: ������%s � ��� � �%s ��������� ����� �������.';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_WARNING_ONE_MANY = '�';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_WARNING_ONE_ONE = '';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_WARNING_TWO_MANY = '���';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_WARNING_TWO_ONE = '��';
const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_ERR_NOONESITE = '���������� ����� �� ����������.';

const CONTROL_CONTENT_SUBDIVISION_SYSTEM_FIELDS = '���������';
const CONTROL_CONTENT_SUBDIVISION_SYSTEM_FIELDS_NO = '� ��������� ������� ��������� ��� �������������� �����';

const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_ALWAYS = '������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_HOURLY = '��������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_DAILY = '���������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_WEEKLY = '�����������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_MONTHLY = '����������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_YEARLY = '��������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ_NEVER = '�������';

const CONTROL_CONTENT_SUBDIVISION_SEO_META = '����-���� ��� SEO';
const CONTROL_CONTENT_SUBDIVISION_SEO_SMO_META = '����-���� ��� ���������� �����';
const CONTROL_CONTENT_SUBDIVISION_SEO_INDEXING = '��������������';
const CONTROL_CONTENT_SUBDIVISION_SEO_CURRENT_VALUE = '������� ��������';
define("CONTROL_CONTENT_SUBDIVISION_SEO_VALUE_NOT_SETTINGS", "�������� %s �� �������� �������� �� ����, ��� �� �������." . (CMS_SYSTEM_NAME === 'Netcat' ? " <a target='_blank' href='https://netcat.ru/developers/docs/seo/title-keywords-and-description/'>���������</a>." : ''));
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_HEADER = '��������� Last-Modified';
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_NONE = '�� ��������';
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_YESTERDAY = '���������� ����';
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_HOUR = '���������� ���';
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_CURRENT = '������� ����';
const CONTROL_CONTENT_SUBDIVISION_SEO_LAST_MODIFIED_ACTUAL = '���������� ����';
const CONTROL_CONTENT_SUBDIVISION_SEO_DISALLOW_INDEXING = '��������� ��������������';
const CONTROL_CONTENT_SUBDIVISION_SEO_DISALLOW_INDEXING_YES = '��';
const CONTROL_CONTENT_SUBDIVISION_SEO_DISALLOW_INDEXING_NO = '���';
const CONTROL_CONTENT_SUBDIVISION_SEO_INCLUDE_IN_SITEMAP = '�������� ������ � Sitemap';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_PRIORITY = 'Sitemap: ��������� ��������';
const CONTROL_CONTENT_SUBDIVISION_SEO_SITEMAP_CHANGEFREQ = 'Sitemap: ������� ��������� ��������';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_LINEADD_DELETE_SUCCESS = '�������� ��������� �������.';

const CONTROL_CONTENT_CLASS = '���������';
const CONTROL_CONTENT_SUBCLASS_CLASSNAME = '�������� �����';
const CONTROL_CONTENT_SUBCLASS_SHOW_ALL = '�������� ���';
const CONTROL_CONTENT_SUBCLASS_ONSECTION = '� �������';
const CONTROL_CONTENT_SUBCLASS_ONSITE = '�� �����';
const CONTROL_CONTENT_SUBCLASS_MSG_NONE = '� ������ ������� ��� ����������.';
const CONTROL_CONTENT_SUBCLASS_DEFAULTACTION = '�������� �� ���������';
const CONTROL_CONTENT_SUBCLASS_CREATIONDATE = '���� �������� ���������� %s';
const CONTROL_CONTENT_SUBCLASS_UPDATEDATE = '���� ��������� ���������� � ���������� %s';
const CONTROL_CONTENT_SUBCLASS_TOTALOBJECTS = '��������';
const CONTROL_CONTENT_SUBCLASS_CLASSSTATUS = '������ ����������';
const CONTROL_CONTENT_SUBCLASS_CHANGEPREFS = '�������� ��������� ���������� %s';
const CONTROL_CONTENT_SUBCLASS_DELETECLASS = '������� ��������� %s';
const CONTROL_CONTENT_SUBCLASS_ISNAKED = '�� ������������ ����� �������';
const CONTROL_CONTENT_SUBCLASS_SRCMIRROR = '�������� ������';
const CONTROL_CONTENT_SUBCLASS_SRCMIRROR_NONE = '[���]';
const CONTROL_CONTENT_SUBCLASS_SRCMIRROR_EDIT = '��������';
const CONTROL_CONTENT_SUBCLASS_SRCMIRROR_DELETE = '�������';
const CONTROL_CONTENT_SUBCLASS_TYPE = '��� ���������';
const CONTROL_CONTENT_SUBCLASS_TYPE_SIMPLE = '�������';
const CONTROL_CONTENT_SUBCLASS_TYPE_MIRROR = '����������';
const CONTROL_CONTENT_SUBCLASS_MIRROR = '���������� ��������';
const CONTROL_CONTENT_SUBCLASS_MULTI_TITLE = '������ ����������� ���������� �� ��������';
const CONTROL_CONTENT_SUBCLASS_MULTI_ONONEPAGE = '�������� �� ����� ��������';
const CONTROL_CONTENT_SUBCLASS_MULTI_ONTABS = '�������� �� ��������';
const CONTROL_CONTENT_SUBCLASS_MULTI_NONE = '�������� ������ ������ ��������';
const CONTROL_CONTENT_SUBCLASS_EDIT_IN_PLACE = "������ ����� ��������� ���������� ������������� �� �������� �<a href='%s'>%s</a>�";
const CONTROL_CONTENT_SUBCLASS_CONDITION_OFFSET = '������� �������� ���������� �� ������ �������';
const CONTROL_CONTENT_SUBCLASS_CONDITION_LIMIT = '������������ ���������� ������� � �������';
const CONTROL_CONTENT_SUBCLASS_FUNCS_SETTINGS_GOTO = '�������';
const CONTROL_CONTENT_SUBCLASS_CONTAINER = '���������';
const CONTROL_CONTENT_SUBCLASS_AREA = '������� �%s�';

const CONTROL_SETTINGSFILE_TITLE_ADD = '����������';
const CONTROL_SETTINGSFILE_TITLE_EDIT = '��������������';
const CONTROL_SETTINGSFILE_BASIC_REGCODE = '����� ��������';
const CONTROL_SETTINGSFILE_BASIC_MAIN = '�������� ����������';
const CONTROL_SETTINGSFILE_BASIC_MAIN_NAME = '�������� �������';

const CONTROL_SETTINGSFILE_BASIC_EDIT_TEMPLATE = '����� �������, ������������ ��� �������������� ��������';
const CONTROL_SETTINGSFILE_BASIC_EDIT_TEMPLATE_DEFAULT = '����� �������������� �������';

const CONTROL_SETTINGSFILE_SHOW_EXCURSION = '���������� ��������� ��� �������� ������������';

const CONTROL_SETTINGSFILE_BASIC_EMAILS = '��������';
const CONTROL_SETTINGSFILE_BASIC_EMAILS_FILELD = '���� (� �������� email) � ������� �������������';
const CONTROL_SETTINGSFILE_BASIC_EMAILS_FROMNAME = '��� �����������';
const CONTROL_SETTINGSFILE_BASIC_EMAILS_FROMEMAIL = 'Email �����������';
const CONTROL_SETTINGSFILE_BASIC_CHANGEDATA = '�������� ��������� �������';


const CONTROL_SETTINGSFILE_BASIC_USE_SMTP = '������������ SMTP';
const CONTROL_SETTINGSFILE_BASIC_USE_SENDMAIL = '������������ Sendmail';
const CONTROL_SETTINGSFILE_BASIC_USE_MAIL = '������������ ������� mail';
const CONTROL_SETTINGSFILE_BASIC_MAIL_PARAMETERS = '�������������� ��������� ��� sendmail (<code>%s</code> ��� ����������� ������ �����������)';
const CONTROL_SETTINGSFILE_BASIC_SMTP_HOST = 'SMTP ������';
const CONTROL_SETTINGSFILE_BASIC_SMTP_PORT = '����';
const CONTROL_SETTINGSFILE_BASIC_SMTP_AUTH_USE = '������������ �����������';
const CONTROL_SETTINGSFILE_BASIC_SMTP_USERNAME = '��� ������������';
const CONTROL_SETTINGSFILE_BASIC_SMTP_PASSWORD = '������';
const CONTROL_SETTINGSFILE_BASIC_SMTP_ENCRYPTION = '����������';
const CONTROL_SETTINGSFILE_BASIC_SMTP_NOENCRYPTION = '���';
const CONTROL_SETTINGSFILE_BASIC_SENDMAIL_COMMAND = "Sendmail ������� (�������� '/usr/sbin/sendmail -bs')";
const CONTROL_SETTINGSFILE_BASIC_MAIL_TRANSPORT_HEADER = '��� ����������';

const CONTROL_SETTINGSFILE_AUTOSAVE = '��������� ������� ���������';
const CONTROL_SETTINGSFILE_AUTOSAVE_USE = '������������ ������� ���������';
const CONTROL_SETTINGSFILE_AUTOSAVE_TYPE_KEYBOARD = '��������� �� ������� ������';
const CONTROL_SETTINGSFILE_AUTOSAVE_TYPE_TIMER = '��������� ������������';
const CONTROL_SETTINGSFILE_AUTOSAVE_PERIOD = '�������������, ���';
const CONTROL_SETTINGSFILE_AUTOSAVE_NO_ACTIVE = '��������� ������ ��� �����������';

const CONTROL_SETTINGSFILE_INLINE_IMAGE_CROP = '��������� �������������� �����������';
const CONTROL_SETTINGSFILE_INLINE_IMAGE_CROP_USE = '������������ ������� �������������� �����������';
const CONTROL_SETTINGSFILE_INLINE_IMAGE_CROP_DIMENSIONS = '����������������� ���������� (������ x ������)';

const CONTROL_SETTINGSFILE_DOCHANGE_ERROR_NAME = '�������� ������� �� ����� ���� ������!';

const NETCAT_AUTH_TYPE_LOGINPASSWORD = '���� �� ������/������';
const NETCAT_AUTH_TYPE_TOKEN = '���� �� e-token';
const CONTROL_AUTH_ON_ONE_SITE = '�������������� �� �����';
const CONTROL_AUTH_ON_ALL_SITES = '�� ���� ������';
const CONTROL_AUTH_HTML_LOGIN = '�����';
const CONTROL_AUTH_HTML_PASSWORD = '������';
const CONTROL_AUTH_HTML_PASSWORDCONFIRM = '������ ��� ���';
const CONTROL_AUTH_HTML_SAVELOGIN = '��������� ����� � ������';
const CONTROL_AUTH_HTML_LANG = '����';
const CONTROL_AUTH_HTML_AUTH = '��������������';
const CONTROL_AUTH_HTML_BACK = '���������';
define("CONTROL_AUTH_FIELDS_NOT_EMPTY", "���� \"".CONTROL_AUTH_HTML_LOGIN."\" � \"".CONTROL_AUTH_HTML_PASSWORD."\" �� ����� ���� �������!");
define("CONTROL_AUTH_LOGIN_NOT_EMPTY", "���� \"".CONTROL_AUTH_HTML_LOGIN."\" �� ����� ���� ������!");
const CONTROL_AUTH_LOGIN_OR_PASSWORD_INCORRECT = '��������������� ������ �������!';
const CONTROL_AUTH_PIN_INCORRECT = '������ �������� PIN ���!';
const CONTROL_AUTH_TOKEN_PLUGIN_DONT_INSTALL = '������ �� ����������';
const CONTROL_AUTH_KEYPAIR_INCORRECT = '������ ��� �������� �������� ����';
const CONTROL_AUTH_USB_TOKEN_NOT_INSERTED = 'USB-����� �����������';
const CONTROL_AUTH_TOKEN_CURRENT_TOKENS = '������� ����������� ������ ������������';
const CONTROL_AUTH_TOKEN_NEW = '��������� ����� �����';
const CONTROL_AUTH_TOKEN_PLUGIN_ERROR = "� �������� �� ���������� <a href='http://www.rutoken.ru/hotline/download/' target='_blank'>������ ��� ������ � �������</a>";
const CONTROL_AUTH_TOKEN_MISS = '����� �����������';
const CONTROL_AUTH_TOKEN_NEW_BUTTON = '���������';

const CONTROL_AUTH_JS_REQUIRED = '��� ������ � ������� ����������������� ���������� �������� ��������� javascript';

const NETCAT_MODULE_AUTH_INSIDE_ADMIN_ACCESS = '������ � ���� �����������������';
const CONTROL_AUTH_MSG_MUSTAUTH = '��� ����������� ���������� ������ ����� � ������.';


const CONTROL_FS_NAME_SIMPLE = '�������';
const CONTROL_FS_NAME_ORIGINAL = '�����������';
const CONTROL_FS_NAME_PROTECTED = '����������';

const CONTROL_CLASS_CLASS_TEMPLATE = '������ ������ ���������';
const CONTROL_CLASS_CLASS_TEMPLATE_CHANGE_LATER = '������ ��������� ��������� �� ������� �������� ����� ���������� �������.';
const CONTROL_CLASS_CLASS_TEMPLATE_DEFAULT = '������ �� ���������';
const CONTROL_CLASS_CLASS_TEMPLATE_EDIT_MODE = '������ ������ � ������ ��������������';
const CONTROL_CLASS_CLASS_TEMPLATE_ADMIN_MODE = '������ ������ � ������ �����������������';
const CONTROL_CLASS_CLASS_TEMPLATE_EDIT_MODE_DONT_USE = '-- �� ������������ ��������� ������ --';
const CONTROL_CLASS_CLASS_TEMPLATE_ADD = '�������� ������';
const CONTROL_CLASS_CLASS_DONT_USE_TEMPLATE = '-- �� ������������ ������ --';
const CONTROL_CLASS_CLASS_TEMPLATE_ERROR_NAME = '������� �������� ������� ����������';
const CONTROL_CLASS_CLASS_TEMPLATE_ERROR_NOT_FOUND = '������� ���������� �����������';
const CONTROL_CLASS_CLASS_TEMPLATE_DELETE_WARNING = '��������: ������ �������� ����� �������������� �������� ��������� �%s�.';
const CONTROL_CLASS_CLASS_TEMPLATE_NOT_FOUND = '������ � ��������������� %s �� ������!';
const CONTROL_CLASS_CLASS_TEMPLATE_ERROR_ADD = '������ ���������� ������� ����������';
const CONTROL_CLASS_CLASS_TEMPLATE_ERROR_EDIT = '������ �������������� ������� ����������';
const CONTROL_CLASS_CLASS_TEMPLATE_SUCCESS_ADD = '������ ���������� ������� ��������';
const CONTROL_CLASS_CLASS_TEMPLATE_SUCCESS_EDIT = '������ ���������� ������� �������';
const CONTROL_CLASS_CLASS_TEMPLATE_GROUP = '������� �����������';
const CONTROL_CLASS_CLASS_TEMPLATE_BUTTON_EDIT = '�������������';
const CONTROL_CLASS_CLASS_TEMPLATES = '������� ����������';
const CONTROL_CLASS_CLASS_TEMPLATE_RECORD_TEMPLATE_WARNING = '��������! ���� �� ������ ��������� � ���� ���� ��������, � �� �������� � ��� �������� �� ������ ������, �� �� ������� ������� �� �������� ������� ������ �������.<br>�������, ��� ������ ����������?';
const CLASS_TEMPLATE_TAB_EDIT = '�������������� �������';
const CLASS_TEMPLATE_TAB_DELETE = '�������� �������';
const CLASS_TEMPLATE_TAB_INFO = '���������';

const CONTROL_CLASS = '����������';
const CONTROL_CLASS_ADD_ACTION = '���������� ����������';
const CONTROL_CLASS_DELETECOMMIT = '������������� �������� ����������';
const CONTROL_CLASS_DOEDIT = '�������������� ����������';
const CONTROL_CLASS_CONTINUE = '����������';
const CONTROL_CLASS_NONE = '���������� �����������.';
const CONTROL_CLASS_ADD = '�������� ���������';
const CONTROL_CLASS_ADD_FS = '�������� ��������� 5.0';
const CONTROL_CLASS_CLASS = '���������';
const CONTROL_CLASS_SYSTEM_TABLE = '��������� �������';
const CONTROL_CLASS_ACTIONS = '������� ��������';
const CONTROL_CLASS_FIELD = '����';
const CONTROL_CLASS_FIELDS = '����';
const CONTROL_CLASS_FIELDS_COUNT = '�����';
const CONTROL_CLASS_CUSTOM = '���������������� ���������';
const CONTROL_CLASS_DELETE = '�������';
const CONTROL_CLASS_NEWCLASS = '����� ���������';
const CONTROL_CLASS_NEWTEMPLATE = '����� ������';
const CONTROL_CLASS_TO_FS = '����� � �������� �������';

const CONTROL_CLASS_FUNCS_SHOWCLASSLIST_ADDCLASS = '�������� ���������';
const CONTROL_CLASS_FUNCS_SHOWCLASSLIST_IMPORTCLASS = '������������� ���������';

const CONTROL_CLASS_ACTIONS_VIEW = '��������';
const CONTROL_CLASS_ACTIONS_ADD = '����������';
const CONTROL_CLASS_ACTIONS_EDIT = '���������';
const CONTROL_CLASS_ACTIONS_CHECKED = '���������';
const CONTROL_CLASS_ACTIONS_SEARCH = '�����';
const CONTROL_CLASS_ACTIONS_MAIL = '��������';
const CONTROL_CLASS_ACTIONS_DELETE = '��������';
const CONTROL_CLASS_ACTIONS_MODERATE = '������&shy;�������';
const CONTROL_CLASS_ACTIONS_ADMIN = '����������&shy;�������';

define("CONTROL_CLASS_INFO_ADDSLASHES", "���������� ���������, �� �������� <a href='#' onclick=\"window.open('".$ADMIN_PATH."template/converter.php', 'converter','width=600,height=410,status=no,resizable=yes'); return false;\">������������ �����������</a>.");
const CONTROL_CLASS_ERRORS_DB = '������ ������� �� ����!';
const CONTROL_CLASS_CLASS_NAME = '��������';
const CONTROL_CLASS_CLASS_KEYWORD = '�������� �����';
const CONTROL_CLASS_CLASS_OBJECT_NAME_LABEL = '����, ���������� �������� �������';
const CONTROL_CLASS_CLASS_OBJECT_NAME_NOT_SELECTED = '�� �������';
const CONTROL_CLASS_CLASS_OBJECT_NAME_SINGULAR = '�������� ������� � ������������ ����� ������������ ������ (��������� <em>���</em>?�)';
const CONTROL_CLASS_CLASS_OBJECT_NAME_PLURAL = '�������� ������� �� ������������� ����� ������������ ������ (�������� ��� <em>���</em>?�)';
const CONTROL_CLASS_CLASS_MAIN_CLASSTEMPLATE_LABEL = '�������� ������ ����������';
const CONTROL_CLASS_CLASS_GROUPS = '������ �����������';
const CONTROL_CLASS_CLASS_NO_GROUP = '��� ������';
const CONTROL_CLASS_CLASS_OBJECTSLIST = '������ ����������� ������ ��������';
const CONTROL_CLASS_CLASS_DESCRIPTION = '�������� ���������';
const CONTROL_CLASS_CLASS_SETTINGS = '��������� ���������';
const CONTROL_SCLASS_ACTION = '������� ��������';
const CONTROL_SCLASS_TABLE = '�������';
const CONTROL_SCLASS_TABLE_NAME = '�������� �������';
const CONTROL_SCLASS_LISTING_NAME = '�������� ������';
const CONTROL_CLASS_CLASSFORM_INFO_FOR_NEWCLASS = '���������� � ����������';
const CONTROL_CLASS_CLASSFORM_MAININFO = '�������� ����������';
const CONTROL_CLASS_CLASSFORM_TEMPLATE_PATH = "����� ���������� ��������� � ����� <a href='%s'>%s</a>";
const CONTROL_CLASS_SITE_STYLES = '����� ��� �����';
define("CONTROL_CLASS_SITE_STYLES_DISABLED_WARNING", "������ ��������� �������� � ������ ������������� � " . CMS_SYSTEM_NAME . " 5.6, ���������� CSS-������ � ������� ����������.");
const CONTROL_CLASS_SITE_STYLES_ENABLE_BUTTON = '�������� ����� ������� ����������';
const CONTROL_CLASS_SITE_STYLES_ENABLE_WARNING = '����� ���������� ������ ������������� ����� ����������� �������������� ��������
    (����-������ <code>&lt;div&gt;</code>) ��� ������ ������ � �������������� ������� �������:
    <ul><li>������� �������� �� ����������, 
    <li>�������� ����� �������� ������� ������ �������, 
    <li>���� ����������, ��������� � ������.</ul>
    � ����������� �� ������������ ������������ �� ������������ ������ CSS-������ ����� 
    ������������ ��������������� ��������� CSS-������.';
const CONTROL_CLASS_SITE_STYLES_DOCS_LINK = "��������� � ������ ����������� ��. <a href='%s' target='_blank'>� ������������</a>.";
const CONTROL_CLASS_MULTIPLE_MODE_SWITCH = '������������� ��� ������������� � ������ ����������� ���������� ������ �� ��������';
const CONTROL_CLASS_TEMPLATE_MULTIPLE_MODE_SWITCH = '������ ������������� ��� ������������� � ������ ����������� ���������� ������ �� ��������';
const CONTROL_CLASS_LIST_PREVIEW = '����� ����������� ������ �������� (.png)';
const CONTROL_CLASS_LIST_PREVIEW_NONE = '����� �����������';

const CONTROL_CLASS_KEYWORD_ONLY_DIGITS = '�������� ����� �� ����� �������� ������ �� ����';
const CONTROL_CLASS_KEYWORD_TOO_LONG = '����� ��������� ����� �� ����� ���� ����� %d ��������';
const CONTROL_CLASS_KEYWORD_INVALID_CHARACTERS = '�������� ����� ����� ��������� ������ ����� ���������� ��������, ����� � ������� �������������';
const CONTROL_CLASS_KEYWORD_NON_UNIQUE = '�������� ����� �%s� ��� ��������� ���������� �%s�';
const CONTROL_CLASS_KEYWORD_TEMPLATE_NON_UNIQUE = '�������� ����� �%s� ��� ��������� ������� �%s�';
const CONTROL_CLASS_KEYWORD_RESERVED = '���������� ������������ �%s� � �������� ��������� �����, ��� ��� ��� �������� �����������������';

const CONTROL_CLASS_CLASSFORM_CHECK_ERROR = '������ ���� � ���� �%s� ����������';

const CONTROL_CLASS_CLASS_OBJECTSLIST_PREFIX = '������� ������ ��������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_BODY = '������ � ������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SUFFIX = '������� ������ ��������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOW = '���������� ��';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ = '�������� �� ��������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOW_NUM = '���������� �������� �� ��������';
const CONTROL_CLASS_CLASS_MIN_RECORDS = '����������� ���������� �������� � ���������';
const CONTROL_CLASS_CLASS_MAX_RECORDS = '������������ ���������� �������� � ���������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SORT = '����������� ������� �� ���� (�����)';
const CONTROL_CLASS_CLASS_OBJECTSLIST_TITLE = '��������� ��������';

const CONTROL_CLASS_CLASS_OBJECTSLIST_WRONG_NC_CTPL = '� nc_object_list(%s, %s) ������� ��������� nc_ctpl - %s. ';
const CONTROL_CLASS_CLASS_OBJECTFULL_WRONG_NC_CTPL = '������� ��������� nc_ctpl - %s. ';

const CONTROL_CLASS_CLASS_OBJECTVIEW = '������ ����������� ������ ������� �� ��������� ��������';

const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_DOPL = '�������������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_CACHE = '�����������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_SYSTEM = '��������� ���������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_BR = '������� ������ � &lt;BR&gt;';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_HTML = '��������� HTML-����';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_PAGETITLE = '��������� ��������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_USEASALT = '������������ ��� ��������� �������������� ���������';
const CONTROL_CLASS_CLASS_OBJECTSLIST_SHOWOBJ_PAGEBODY = '����������� �������';
const CONTROL_CLASS_CLASS_CREATENEW_BASICOLD = '������� ����� ��������� �� ������ �������������';
const CONTROL_CLASS_CLASS_CREATENEW_CLEARNEW = '������� ����� ��������� &quot;� ����&quot;';
const CONTROL_CLASS_CLASS_DELETE_WARNING = '��������: ���������%s � ��� � ���%s ��������� ����� �������.';
const CONTROL_CLASS_CLASS_NOT_FOUND = '��������� � ��������������� %s �� ������!';

const CONTROL_CLASS_CUSTOM_SETTINGS_TEMPLATE = '��������� ����������� ���������� �������';
const CONTROL_CLASS_CUSTOM_SETTINGS_PARAMETER = '��������';
const CONTROL_CLASS_CUSTOM_SETTINGS_DEFAULT = '�� ���������';
const CONTROL_CLASS_CUSTOM_SETTINGS_VALUE = '��������';
const CONTROL_CLASS_CUSTOM_SETTINGS_HAS_ERROR = '���� ��� ��������� �������� ������� �����������. ����������, ��������� ������.';

const CONTROL_CLASS_IMPORT = '������ ����������';
const CONTROL_CLASS_IMPORTS = '������ �����������';
const CONTROL_CLASS_IMPORT_UPLOAD = '��������';
const CONTROL_CLASS_IMPORT_ERROR_NOTUPLOADED = '���� �� �������.';
const CONTROL_CLASS_IMPORT_ERROR_CANNOTBEINSTALLED = '��������� �� ����� ���� ����������.';
const CONTROL_CLASS_IMPORT_ERROR_VERSION_ID = '��������� ��� ������ %s, ������� ������ %s.';
const CONTROL_CLASS_IMPORT_ERROR_NO_VERSION_ID = '������ ������� �� ������� ��� �������� ������ �����.';
const CONTROL_CLASS_IMPORT_ERROR_NO_FILES = '����������� ������ ��� �������� ������ �������� ����������.';
const CONTROL_CLASS_IMPORT_ERROR_CLASS_IMPORT = '������ �������� ����������, ������ ���������� �� ���������.';
const CONTROL_CLASS_IMPORT_ERROR_CLASS_TEMPLATE_IMPORT = '������ �������� �������� ����������, ������ �������� �� ���������.';
const CONTROL_CLASS_IMPORT_ERROR_MESSAGE_TABLE = '������ �������� ������� ������ ����������.';
const CONTROL_CLASS_IMPORT_ERROR_FIELD = '������ �������� ����� ����������.';

const CONTROL_CLASS_CONVERT = '��������������� ����������';
const CONTROL_CLASS_CONVERT_BUTTON = '�������������� � 5.0';
const CONTROL_CLASS_CONVERT_BUTTON_UNDO = '�������� ���������������';
const CONTROL_CLASS_CONVERT_DB_ERROR = '������ ��������� ����������� � ����';
const CONTROL_CLASS_CONVERT_OK = '����������� �������';
const CONTROL_CLASS_CONVERT_OK_GOEDIT = '������� � �������������� ����������';
const CONTROL_CLASS_CONVERT_CLASSLIST_TITLE = '����� ��������������� ��������� ���������� � �� �������';
const CONTROL_CLASS_CONVERT_CLASSLIST_TITLE_UNDO = '����� �������� ����������� ��������� ����������� � �� ��������';
const CONTROL_CLASS_CONVERT_CLASSFOLDERS_TITLE = '����� ������� ����� � ������� �������� v5, ������� ����� ������� v4 � ������ class_40_backup.html';
const CONTROL_CLASS_CONVERT_CLASSFOLDERS_TITLE_UNDO = '���������� ����� ������� ����� � ������� �������� 5.0(�������������)';
const CONTROL_CLASS_CONVERT_NOTICE = '����� ����������� ���������� ����� ���������� ������ ���������� � ��� ��������!
                    ����������� ������� ���� �� ����� ���������.';
const CONTROL_CLASS_CONVERT_NOTICE_UNDO = '����� ������ ����������� ��������� �������� � ��������� �� �����������, ��� ��������� � ������ 5.0 ����������!';
const CONTROL_CLASS_CONVERT_UNDO_FILE_ERROR = '��� ������ ��� ��������������';

const CONTROL_CLASS_NEWGROUP = '����� ������';
const CONTROL_CLASS_EXPORT = '�������������� ��������� � ����';
const CONTROL_CLASS_AUXILIARY_SWITCH = '��������� ���������';
const CONTROL_CLASS_AUXILIARY = '(���������)';
const CONTROL_CLASS_BLOCK_MARKUP_SWITCH = "��������� <a href='https://netcat.ru/developers/docs/components/stylesheets/' target='_blank'>�������������� ��������</a>";
const CONTROL_CLASS_BLOCK_LIST_MARKUP_SWITCH = '��������� �������� ������ ������ �������� (����������� ����������� ���������� ������ ����� ����������)';
const CONTROL_CLASS_BLOCK_MARKUP_SWITCH_WARNING = '�������������� �������� ���������� ��� ��������� ������ ������� ���������� � ���������� ������ ���������� � ������ ��������������.';

const CONTROL_CLASS_COMPONENT_TEMPLATE_FOR_RSS_DOESNT_EXIST = 'Rss-����� %s�� ��������, ��������� ����������� ������ ���������� ��� rss';
const CONTROL_CLASS_COMPONENT_TEMPLATE_FOR_XML_DOESNT_EXIST = 'Xml-�������� %s�� ��������, ��������� ����������� ������ ���������� ��� xml';
const CONTROL_CLASS_COMPONENT_TEMPLATE_FOR_TRASH_DOESNT_EXIST = '����� ������� �� ��������, ��������� ����������� ������ ���������� ��� �������';

const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE = '���';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_CLASSTEMPLATE = '��� ������� ����������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_MULTI_EDIT = '������������� ��������������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_RSS = 'RSS';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_XML = 'XML-��������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_TRASH = '��� ������� ��������� ��������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_USEFUL = '�������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_INSIDE_ADMIN = '����� �����������������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_ADMIN_MODE = '����� ��������������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_TITLE = '��� ��������� ��������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_MOBILE = '���������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TYPE_RESPONSIVE = '����������';

const CONTROL_CLASS_COMPONENT_TEMPLATE_BASE_AUTO = '�������������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_BASE_EMPTY = '������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_ADD_PARAMETRS = '��������� ���������� ������� ����������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATE_BASE = '������� ������ ���������� �� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATE_FOR_TRASH = '������� ������ ��� �������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATE_FOR_RSS = '������� ������ ��� rss';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATE_FOR_XML = '������� ������ ��� xml';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TURN_ON_RSS = '�������� rss-�����';
const CONTROL_CLASS_COMPONENT_TEMPLATE_TURN_ON_XML = '�������� xml-��������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_VIEW = '����������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_EDIT = '���������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_ERROR = '������ �������� ������� ����������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_USEFUL = '������ ���������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_RSS = '������ ���������� ��� RSS ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_XML = '������ ���������� ������� ��� XML ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_TRASH = '������ ���������� ��� ������� ��������� �������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_INSIDE_ADMIN = '������ ���������� ��� ������ �������������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_ADMIN_MODE = '������ ���������� ��� ������ ����������������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_TITLE = '������ ���������� ��� ��������� �������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_MOBILE = '������ ���������� ��� ���������� ����� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_MULTI_EDIT = '������ ���������� ��� �������������� �������������� ������� ������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_CREATED_FOR_RESPONSIVE = '������ ���������� ��� ����������� ����� ������� ������';

const CONTROL_CLASS_COMPONENT_TEMPLATE_RETURN_TO_SUB = '���������</a> � ��������� �������';
const CONTROL_CLASS_COMPONENT_TEMPLATE_RETURN_TO_TRASH = '���������</a> � �������';
const CONTROL_CLASS_SHOW_AUX = '�������� ��������� ����������';
const CONTROL_CLASS_DEFAULT_CHANGE = '��������� �� ��������� ����� �������� � ���������� �����.';

const CONTROL_CONTENT_CLASS_SUCCESS_ADD = '��������� ������� ��������';
const CONTROL_CONTENT_CLASS_ERROR_ADD = '������ ���������� ����������';
const CONTROL_CONTENT_CLASS_ERROR_NAME = '������� �������� ����������';
const CONTROL_CONTENT_CLASS_GROUP_ERROR_NAME = '�������� ������ �� ������ ���������� � �����';
const CONTROL_CONTENT_CLASS_SUCCESS_EDIT = '��������� ������� �������';
const CONTROL_CONTENT_CLASS_ERROR_EDIT = '������ �������������� ����������';

#TYPE OF DATA
const CLASSIFICATOR_TYPEOFDATA_STRING = '������';
const CLASSIFICATOR_TYPEOFDATA_INTEGER = '����� �����';
const CLASSIFICATOR_TYPEOFDATA_TEXTBOX = '��������� ����';
const CLASSIFICATOR_TYPEOFDATA_LIST = '������';
const CLASSIFICATOR_TYPEOFDATA_BOOLEAN = '���������� ���������� (������ ��� ����)';
const CLASSIFICATOR_TYPEOFDATA_FILE = '����';
const CLASSIFICATOR_TYPEOFDATA_FLOAT = '����� � ��������� �������';
const CLASSIFICATOR_TYPEOFDATA_DATETIME = '���� � �����';
const CLASSIFICATOR_TYPEOFDATA_RELATION = '����� � ������ ��������';
const CLASSIFICATOR_TYPEOFDATA_MULTILIST = '������������� �����';
const CLASSIFICATOR_TYPEOFDATA_MULTIFILE = '������������� �������� ������';

const CLASSIFICATOR_TYPEOFFILESYSTEM = '��� �������� �������';

const CLASSIFICATOR_TYPEOFEDIT_ALL = '�������� ����';
const CLASSIFICATOR_TYPEOFEDIT_ADMINS = '�������� ������ ���������������';
const CLASSIFICATOR_TYPEOFEDIT_NOONE = '���������� ������';

const CLASSIFICATOR_TYPEOFMODERATION_RIGHTAWAY = '����� ����������';
const CLASSIFICATOR_TYPEOFMODERATION_MODERATION = '����� �������� ���������������';

const CLASSIFICATOR_USERGROUP_ALL = '���';
const CLASSIFICATOR_USERGROUP_REGISTERED = '������������������';
const CLASSIFICATOR_USERGROUP_AUTHORIZED = '��������������';

const CONTROL_TEMPLATE_CLASSIFICATOR = '������������� ������������';
const CONTROL_TEMPLATE_CLASSIFICATOR_EKRAN = '������������';
const CONTROL_TEMPLATE_CLASSIFICATOR_RES = '���������';

const CONTROL_FIELD_LIST_NAME = '�������� ����';
const CONTROL_FIELD_LIST_NAMELAT = '�������� ���� (���������� �������)';
const CONTROL_FIELD_LIST_DESCRIPTION = '��������';
const CONTROL_FIELD_LIST_ADD = '�������� ����';
const CONTROL_FIELD_LIST_CHANGE = '��������� ���������';
const CONTROL_FIELD_LIST_DELETE = '������� ����';
const CONTROL_FIELD_ADDING = '���������� ����';
const CONTROL_FIELD_EDITING = '�������������� ����';
const CONTROL_FIELD_DELETING = '�������� ����';
const CONTROL_FIELD_FIELDS = '����';
const CONTROL_FIELD_LIST_NONE = '� ������ ���������� ��� �� ������ ����.';
const CONTROL_FIELD_ONE_FORMAT = '������';
const CONTROL_FIELD_ONE_FORMAT_NONE = '���';
const CONTROL_FIELD_ONE_FORMAT_EMAIL = 'email';
const CONTROL_FIELD_ONE_FORMAT_URL = 'URL';
const CONTROL_FIELD_ONE_FORMAT_HTML = 'HTML-������';
const CONTROL_FIELD_ONE_FORMAT_PASSWORD = '������';
const CONTROL_FIELD_ONE_FORMAT_PHONE = '�������';
const CONTROL_FIELD_ONE_FORMAT_TAGS = '����';
const CONTROL_FIELD_ONE_PROTECT_EMAIL = '�������� ��� ������';
const CONTROL_FIELD_ONE_EXTENSION = '��������� ����';
const CONTROL_FIELD_ONE_MUSTBE = '����������� ��� ����������';
const CONTROL_FIELD_ONE_INDEX = '�������� ����� �� ������� ����';
const CONTROL_FIELD_ONE_IN_TABLE_VIEW = '������������ � ��������� ������ ��������';
const CONTROL_FIELD_ONE_INHERITANCE = '����������� �������� ����';
const CONTROL_FIELD_ONE_DEFAULT = '�������� �� ��������� (��������������� ��� ������, ���� ���� �� ���� ���������)';
define("CONTROL_FIELD_ONE_DEFAULT_NOTE", "��� ���� ����� ����� ����� &quot;".CLASSIFICATOR_TYPEOFDATA_TEXTBOX."&quot;, &quot;".CLASSIFICATOR_TYPEOFDATA_FILE."&quot;, &quot;".CLASSIFICATOR_TYPEOFDATA_DATETIME."&quot;, &quot;".CLASSIFICATOR_TYPEOFDATA_MULTILIST."&quot;");
const CONTROL_FIELD_ONE_FTYPE = '��� ����';
const CONTROL_FIELD_ONE_ACCESS = '��� ������� � ����';
const CONTROL_FIELD_ONE_RESERVED = '������ �������� ���� ���������������!';
const CONTROL_FIELD_NAME_ERROR = '�������� ���� ������ ��������� ������ ��������� ����� � �����!';
const CONTROL_FIELD_DIGIT_ERROR = '�������� ���� �� ����� ���������� � �����.';
const CONTROL_FIELD_DB_ERROR = '������ ������ � ��.';
const CONTROL_FIELD_EXITS_ERROR = '����� ���� ��� ����������.';
const CONTROL_FIELD_FORMAT_ERROR = '����� ������ ���� �� ��������.';
const CONTROL_FIELD_MSG_ADDED = '���� ��������� �������.';
const CONTROL_FIELD_MSG_EDITED = '���� ������� ��������.';
const CONTROL_FIELD_MSG_DELETED_ONE = '���� ������� �������.';
const CONTROL_FIELD_MSG_DELETED_MANY = '���� ������� �������.';
const CONTROL_FIELD_MSG_CONFIRM_REMOVAL_ONE = '��������: ���� ����� �������.';
const CONTROL_FIELD_MSG_CONFIRM_REMOVAL_MANY = '��������: ���� ����� �������.';
const CONTROL_FIELD_MSG_FIELDS_CHANGED = '���������� ����� ��������.';
const CONTROL_FIELD_CONFIRM_REMOVAL = '����������� ��������';
const CONTROL_FIELD__EDITOR_EMBED_TO_FIELD = '�������� �������� � ���� ��� ��������������';
const CONTROL_FIELD__TEXTAREA_SIZE = '������ ���������� �����';
const CONTROL_FIELD_HEIGHT = '������';
const CONTROL_FIELD_WIDTH = '������';
const CONTROL_FIELD_ATTACHMENT = '������������';
const CONTROL_FIELD_DOWNLOAD_COUNT = '������� ���������� ����������';
const CONTROL_FIELD_CAN_BE_AN_ICON = '����� ���� �������';
const CONTROL_FIELD_CAN_BE_ONLY_ICON = '������ �������';
const CONTROL_FIELD_PANELS = '������������ ����� ������� CKEditor';
const CONTROL_FIELD_PANELS_DEFAULT = '�� ���������';
const CONTROL_FIELD_TYPO = '���������������';
const CONTROL_FIELD_TYPO_BUTTON = '��������������� �����';
const CONTROL_FIELD_BBCODE_ENABLED = '��������� bb-����';
const CONTROL_FIELD_USE_CALENDAR = '������������ ��������� ��� ������ ����';
const CONTROL_FIELD_FILE_UPLOADS_LIMITS = '���� ������������ PHP ����� ��������� ����������� �� �������� ������:';
const CONTROL_FIELD_FILE_POSTMAXSIZE = '����������� ���������� ������ ������, ������������ ������� POST';
const CONTROL_FIELD_FILE_UPLOADMAXFILESIZE = '������������ ������ ������������� �����';
const CONTROL_FIELD_FILE_MAXFILEUPLOADS = '����������� ���������� ������������ ������������ ������';
const CONTROL_FIELD_MULTIFIELD_USE_IMAGE_RESIZE = '������������ ���������� �����������';
const CONTROL_FIELD_MULTIFIELD_USE_IMAGE_CROP = '������������ ������� �����������';
const CONTROL_FIELD_MULTIFIELD_CROP_IGNORE = '�� ��������, ���� ����������� ������ ���������� �������';
const CONTROL_FIELD_MULTIFIELD_USE_IMAGE_PREVIEW = '��������� ��������-������������(������)';
const CONTROL_FIELD_MULTIFIELD_USE_PREVIEW_RESIZE = '������������ ���������� ������';
const CONTROL_FIELD_MULTIFIELD_PREVIEW_USE_IMAGE_CROP = '������������ ������� ������';
const CONTROL_FIELD_MULTIFIELD_PREVIEW_CROP_IGNORE = '�� ��������, ���� ������ ������ ���������� �������';
const CONTROL_FIELD_MULTIFIELD_IMAGE_WIDTH = '������';
const CONTROL_FIELD_MULTIFIELD_IMAGE_HEIGHT = '������';
const CONTROL_FIELD_MULTIFIELD_CROP_CENTER = '�� ������';
const CONTROL_FIELD_MULTIFIELD_CROP_COORD = '�� �����������';
const CONTROL_FIELD_MULTIFIELD_MIN = '�������';
const CONTROL_FIELD_MULTIFIELD_MAX = '��������';
const CONTROL_FIELD_MULTIFIELD_MINMAX = '���������� ���������� ������ ��������� ��� ��������';
const CONTROL_FIELD_USE_TRANSLITERATION = '��������������';
const CONTROL_FIELD_TRANSLITERATION_FIELD = '���� ��� ������ ���������� ��������������';
const CONTROL_FIELD_USE_URL_RULES = '������������ ������� ��� URL';
const CONTROL_FIELD_FILE_WRONG_GD = '�� ������� �� �������� ���������� GD2, ���������� � ������� ����������� �������� �� �����';

# SYS
const TOOLS_SYSTABLE_SITES = '�����';
const TOOLS_SYSTABLE_SECTIONS = '�������';
const TOOLS_SYSTABLE_USERS = '������������';
const TOOLS_SYSTABLE_TEMPLATE = '������ �������';


#DATABACKUP
const TOOLS_DATA_BACKUP = '�������/������ ������';
const TOOLS_DATA_BACKUP_IMPORT_FILE = '���� ������� (*.tgz)';
const TOOLS_DATA_BACKUP_IMPORT_COMPLETE = '������ ������ ��������!';
const TOOLS_DATA_BACKUP_IMPORT_ERROR = '�� ����� ������� ������ ��������� ������!';
const TOOLS_DATA_BACKUP_IMPORT_DUPLICATE_KEY_ERROR = '������� � ������ ���������������� ��� ����������.';
const TOOLS_DATA_BACKUP_EXPORT_COMPLETE = '������� ������ ��������!';
define("TOOLS_DATA_BACKUP_INCOMPATIBLE_VERSION",       "���� ������� ����� ������, ������� �� �������������� � ������� ������ " . CMS_SYSTEM_NAME . ". ����������, �������� ���� ����� �������.");
const TOOLS_DATA_SAVE_IDS = '��������� �������������� ������������� ��������';
const TOOLS_DATA_BACKUP_SYSTEM = '���������';
const TOOLS_DATA_BACKUP_DATATYPE = '��� ������';
const TOOLS_DATA_BACKUP_INSERT_OBJECTS = '��������� ������� � ��';
const TOOLS_DATA_BACKUP_CREATE_TABLES = '������� ������ � ��';
const TOOLS_DATA_BACKUP_COPIED_FILES = '��������� ������/�����';
const TOOLS_DATA_BACKUP_SKIPPED_FILES = '��������� ������/�����';
const TOOLS_DATA_BACKUP_REPLACED_FILES = '�������� ������/�����';
const TOOLS_DATA_BACKUP_EXPORT_DATE = '���� ��������';
const TOOLS_DATA_BACKUP_USED_SPACE = '������������';
const TOOLS_DATA_BACKUP_SPACE_FROM = '��';

const TOOLS_DATA_BACKUP_DELETE_ALL_CONFIRMATION = '������� ��� �����?';

const TOOLS_EXPORT = '�������';
const TOOLS_IMPORT = '������';
const TOOLS_DOWNLOAD = '���������';
const TOOLS_DATA_BACKUP_GOTO_OBJECT = '������� � ���������������� �������';


const TOOLS_MODULES = '������';
const TOOLS_MODULES_LIST = '������ �������';
const TOOLS_MODULES_INSTALLEDMODULE = '���������� ������';
const TOOLS_MODULES_ERR_INSTALL = '��������� ������ ����������';
const TOOLS_MODULES_ERR_UNINSTALL = '�������� ������ ����������';
const TOOLS_MODULES_ERR_CANTOPEN = '���������� ������� ����';
const TOOLS_MODULES_ERR_PATCH = '�� ���������� ����������� ���� � �������';
const TOOLS_MODULES_ERR_VERSION = '������ �� ��� ������������ ������';
const TOOLS_MODULES_ERR_INSTALLED = '������ ��� ����������';
const TOOLS_MODULES_ERR_ITEMS = '������: ��������� �� ��� ����������� �������';
const TOOLS_MODULES_ERR_DURINGINSTALL = '������ ��� �����������';
const TOOLS_MODULES_ERR_NOTUPLOADED = '���� �� �������';
define("TOOLS_MODULES_ERR_EXTRACT", "������ ��� ���������� ������ c �������.<br />���������� ����������� ���������� ������ � ������� � ����� $TMP_FOLDER �� ����� ������� � ����� ��������� ��������� ��������� ������.");

const TOOLS_MODULES_MOD_NAME = '�������� ������';
const TOOLS_MODULES_MOD_PREFS = '���������';
const TOOLS_MODULES_MOD_GOINSTALL = '��������� ���������';
const TOOLS_MODULES_MOD_EDIT = '�������� ��������� ������';
const TOOLS_MODULES_MOD_LOCAL = '��������� ������ � ���������� �����';
const TOOLS_MODULES_MOD_INSTALL = '��������� ������';
const TOOLS_MODULES_MSG_CHOISESECTION = '��� ���������� ��������� ������ ���������� ������� �������������� �������. ��� ���������� ������� ������������ ������, ��� ����� ������� ����������� ����������.';
const TOOLS_MODULES_PREFS_SAVED = '��������� ������� ���������';
const TOOLS_MODULES_PREFS_ERROR = '������ �� ����� ���������� �������� ������';

# PATCH
const TOOLS_PATCH = '���������� �������';
const TOOLS_PATCH_INSTRUCTION_TAB = '����������';
const TOOLS_PATCH_INSTRUCTION = '���������� �� ��������� ����������';
const TOOLS_PATCH_CHEKING = '�������� ������� ����� ����������';
const TOOLS_PATCH_MSG_OK = '��� ����������� ���������� �����������.';
define("TOOLS_PATCH_MSG_NOCONNECTION", "�� ������� ����������� � �������� ����������." . (CMS_SYSTEM_NAME === 'Netcat' ? " � ������� ����� ���������� �� ������ ������ �� <a href='https://partners.netcat.ru/forclients/update/' target='_blank'>����� �����</a>." : ''));
const TOOLS_PATCH_ERR_CANTINSTALL = '����������� ����� ����������.';
const TOOLS_PATCH_INSTALL_LOCAL = '��������� ���������� � ���������� �����';
const TOOLS_PATCH_INSTALL_ONLINE = '��������� ���������� � ������������ �����';
const TOOLS_PATCH_INFO_NOTINSTALLED = '�� ����������� ����������';
const TOOLS_PATCH_INFO_LASTCHECK = '��������� �������� ���� ������������';
const TOOLS_PATCH_INFO_REFRESH = '�������� ��������';
const TOOLS_PATCH_INFO_DOWNLOAD = '�������';
define("TOOLS_PATCH_ERR_EXTRACT", "������ ��� ���������� ������ c �����������.<br />���������� ����������� ���������� ������ � ����������� � ����� $TMP_FOLDER �� ����� ������� � ����� ��������� ��������� ����������.");
const TOOLS_PATCH_ERROR_TMP_FOLDER_NOT_WRITABLE = '���������� ����� �� ������ ��� ����� %s.<br />(%s ���������� ��� ������)';
const TOOLS_PATCH_ERROR_FILELIST_NOT_WRITABLE = '��������� �����, ��������� ����������, ������ ����� ������������� ��������.';
const TOOLS_PATCH_ERROR_AUTOINSTALL = '�������������� ��������� ���������� ����������, ���������� ���������� �������, �������� ������������� ������������ ��� ������������ �� �����.';
define("TOOLS_PATCH_ERROR_UPDATE_SERVER_NOT_AVAILABLE", "�� ������� ����������� � �������� ����������, ��������� ������� �����.<br />" .
    "���� ������ � ���������� ���� ������ �������������� ����� ������-������, " .
    "<a href='{$nc_core->ADMIN_PATH}#system.edit' target='_top'>��������� ��� ���������</a>.");
const TOOLS_PATCH_ERROR_UPDATE_FILE_NOT_AVAILABLE = '���� ���������� �� ����� ���� �������, ��������� ������� �����. ���� ������ ����������, ���������� � ������ ���������.';
const TOOLS_PATCH_DOWNLOAD_LINK_DESCRIPTION = '������ �� ���� ����������';
const TOOLS_PATCH_IS_WRITABLE = '������ �� ������';

# patch after install information
const TOOLS_PATCH_INFO_FILES_COPIED = '[%COUNT] ������ �����������.';
const TOOLS_PATCH_INFO_QUERIES_EXEC = '[%COUNT] MySQL �������� ����������.';
const TOOLS_PATCH_INFO_SYMLINKS_EXEC = '[%COUNT] ������������� ������ �������.';

const TOOLS_PATCH_LIST_DATE = '���� ���������';
const TOOLS_PATCH_ERROR = '������';
const TOOLS_PATCH_ERROR_DURINGINSTALL = '������ ��� �����������';
const TOOLS_PATCH_INSTALLED = '���� ����������';
const TOOLS_PATCH_INVALIDVERSION = '���� �� ������������ ��� ������������ ������ �������, ������� ������ %EXIST, ���� ��� ������ %REQUIRE.';
const TOOLS_PATCH_ALREDYINSTALLED = '���� ��� ����������';

const TOOLS_PATCH_NOTAVAIL_DEMO = '�� �������� � ����-������';
const NETCAT_DEMO_NOTICE = '������� ���������� ������� Netcat %s DEMO';
const NETCAT_PERSONAL_MODULE_DESCRIPTION = "����������� ����������� �������������� ������� ���������� ������ � ����������� ������.<br />
    ������� ���������� ������������ ��� ������ �� ������ ����� ���������� ��� ��������, ��� �� �����������.<br />
    <a href='https://netcat.ru/products/editions/compare/' target='_blank'>�������</a> ��������� ��������. ";

#UPGRADE
const TOOLS_UPGRADE_ERR_NO_PRODUCTNUMBER = '� ������� ����������� ����� ��������';
const TOOLS_UPGRADE_ERR_INVALID_PRODUCTNUMBER = '����� �� ������ �������� �� �������������. ������������� ������������ ������ ����� ��������';
const TOOLS_UPGRADE_ERR_NO_MATCH_HOST = '������������ � ������� ���� ��������� �� ������ ��������. ����������� ������� �� ������ ������ �� �����������.';
const TOOLS_UPGRADE_ERR_NO_ORDER = '��� ������ �������� �� ��������� ������ ��� �������� ������� �� ������� ��������.';
const TOOLS_UPGRADE_ERR_NOT_PAID = '����� �� ������� ������� �� ������� �������� �� ������� �� netcat.ru.';

#ACTIVATION
const TOOLS_ACTIVATION = '��������� �������';
const TOOLS_ACTIVATION_INSTRUCTION = '���������� ��������� �������';
const TOOLS_ACTIVATION_VERB = '������������';
const TOOLS_ACTIVATION_OK = '��������� ������ �������';
const TOOLS_ACTIVATION_OK1 = "��������� ������ �������. �������� ������ ����-����!<br /><ul style='list-style-type:none'>";
const TOOLS_ACTIVATION_OK2 = "<li>- <a href='https://netcat.ru/' target='_blank'>�����������������</a> �� ����� netcat.ru</li>";
const TOOLS_ACTIVATION_OK3 = "<li>- <a href='https://netcat.ru/' target='_blank'>������� � ��� �������</a> �� ����� netcat.ru</li>";
const TOOLS_ACTIVATION_OK4 = "<li>- <a href='https://netcat.ru/forclients/want/zaregistrirovat-litsenziyu/?f_RegNum=%REGNUM&f_code=%REGCODE&f_SystemName=%SYSID' target='_blank'>��������� ��������</a> � ������ ��������, ������ ��������� ������:
    <ul style='list-style-type:none'><li>����� ��������: %REGNUM</li>
    <li>���� ���������: %REGCODE</li></ul></li></ul>
    ��� ���������� ��� ������������ (���� ��� ��� �����������), ��������� ������ ���������, ��������� ������������ � ���������� ������� �� ���������� ������.<br /><br />
    � �������, ��� �� ������� ������!";
const TOOLS_ACTIVATION_OWNER = '�������� ��������';
const TOOLS_ACTIVATION_LICENSE = '����� ��������';
const TOOLS_ACTIVATION_CODE = '���� ���������';
const TOOLS_ACTIVATION_ALREADY_ACTIVE = '������� ��� ������������';
const TOOLS_ACTIVATION_INPUT_KEY_CODE = '���������� ������ ����� �������� � ���� ���������';
const TOOLS_ACTIVATION_INVALID_KEY_CODE = '�������� ��� ���� ��������� �� ������ ��������';
const TOOLS_ACTIVATION_DAY = '���� �������� ����-������ �������� ����� %DAY ��.';
const TOOLS_ACTIVATION_FORM = "��� ��������� ������� ��� ����� ������ ����� �������� � ���� ���������, ������� �� �������� ����� <a href='https://netcat.ru/products/editions/' target='_blank'>�������</a>";
const TOOLS_ACTIVATION_DESC = '� ����������� ������:
<ul>
<li> ������ ���;</li>
<li> �������������� ���� �������� ��������;</li>
<li> ����������� ��������� �������� ����������� ������������ ����� �������� �� ������ ��������;</li>
<li> �������������� ��������� ����������;</li>
<li>������� ���������� ����������� ����������� ���������.</li>
</ul>';
//const TOOLS_ACTIVATION_DEMO_DISABLED = '����������� ���������� ���������� ������ � ����������� ������.<br />';
define("TOOLS_ACTIVATION_REMIND_UNCOMPLETED", "������� ������ � ��������. ��������� ������� ��������� � ������� �<a href='%s'>��������� �������</a>�.");
const TOOLS_ACTIVATION_LIC_DATA = '<h3>��������� ��������</h3>';
const TOOLS_ACTIVATION_LIC_OWNER = '<h3>�������� ��������</h3>';

const TOOLS_ACTIVATION_FORM_ERR_MANDATORY = '��������� ��� ����������� ����';
const TOOLS_ACTIVATION_FORM_ERR_ORG_EMAIL = '�������� ������ email �����������';
const TOOLS_ACTIVATION_FORM_ERR_PERSON_EMAIL = '�������� ������ email ����������� ����';
const TOOLS_ACTIVATION_FORM_ERR_PRIMARY_EMAIL = '�������� ������ email';
const TOOLS_ACTIVATION_FORM_ERR_ADDIT_EMAIL = '�������� ������ ��������������� email';
const TOOLS_ACTIVATION_FORM_ERR_INN = '��� ������ ��������� 10 ��� 12 ����';

const TOOLS_ACTIVATION_PLEASE_CHECK = "<p style='color: #ce655d;'>��������! �������� ���������� �������������� �� ��������� ������������ - ��������� �����.<br />���� �� ��������� ��� ��������� ��������-���������, ������� ��������� ��������� ���������/���������. �������� ��������� �������� ����� ��������� ����������.</p>";
const TOOLS_ACTIVATION_FLD_OWNER = '�������� ��������';
const TOOLS_ACTIVATION_FLD_PHIS = '���������� ����';
const TOOLS_ACTIVATION_FLD_UR = '����������� ����';
const TOOLS_ACTIVATION_FLD_NAME = '���';
const TOOLS_ACTIVATION_FLD_PHIS_PHONE = '���������� �������';
const TOOLS_ACTIVATION_FLD_PRIMARY_EMAIL = 'Email';
const TOOLS_ACTIVATION_FLD_ADDIT_EMAIL = '�������������� email';
const TOOLS_ACTIVATION_FLD_ORGANIZATION = '�������� �����������';
const TOOLS_ACTIVATION_FLD_INN = '���';
const TOOLS_ACTIVATION_FLD_ORG_EMAIL = 'Email �����������';
const TOOLS_ACTIVATION_FLD_PHONE = '������� ��������';
const TOOLS_ACTIVATION_FLD_DOMAINS = '������ �������� (������� ��������, ����� �������)';

const REPORTS = '����� ���������� �������';
const REPORTS_SECTIONS = '%d ������(��) (���������: %d)';
const REPORTS_USERS = '%d ������������� (���������: %d)';
const REPORTS_LAST_NAME = '�������� �������';
const REPORTS_CLASS = '���������� �����������';
const REPORTS_STAT_CLASS_SHOW = '�������� ����������';
const REPORTS_STAT_CLASS_ALL = '���';
const REPORTS_STAT_CLASS_DOGET = '�������';
const REPORTS_STAT_CLASS_CLEAR = '��������';
const REPORTS_STAT_CLASS_CLEARED = '������� �������';
const REPORTS_STAT_CLASS_CONFIRM = '���������� �������� �������� �� ����������� �������';
const REPORTS_STAT_CLASS_CONFIRM_OK = '�����';
const REPORTS_STAT_CLASS_NOT_CC = '�� ������� ���������� � �������';
const REPORTS_STAT_CLASS_USE = '������������';
const REPORTS_STAT_CLASS_NOTUSE = '��������������';

const REPORTS_SYSMSG_MSG = '���������';
const REPORTS_SYSMSG_DATE = '����';
const REPORTS_SYSMSG_NONE = '��� �� ������ ���������� ���������.';
const REPORTS_SYSMSG_MARK = '�������� ��� �����������';
const REPORTS_SYSMSG_TOTAL = '�����';
const REPORTS_SYSMSG_BACK = '��������� � ������';

const SUPPORT = '��������� � ������������';
const SUPPORT_HELP_MESSAGE = "
����������� ��������� �������� ������ ������������������ ������������� ������� Netcat.<br />
��� ����, ����� ���������� � ������������:
<ol>
 <li style='padding-bottom:10px'><a target=_blank href='https://netcat.ru/forclients/my/copies/add_copies.html'>��������������� ���� ����� �������</a>.
 <li style='padding-bottom:10px'>����� �������� ��������� ���� ������ �� ������ ��������� � ����������� ���������<br> � ����������� ���������
   �� �������� �<a target=_blank href='https://netcat.ru/forclients/support/tickets/'>��������� ������</a>�.
 </li>
</ol>
";

const TOOLS_SQL = '��������� ������ SQL';
const TOOLS_SQL_ERR_NOQUERY = '������� ������!';
const TOOLS_SQL_SEND = '��������� ������';
const TOOLS_SQL_OK = '������ �������� �������';
const TOOLS_SQL_TOTROWS = '�����, ��������������� �������';
const TOOLS_SQL_HELP = '������� ��������';
const TOOLS_SQL_HISTORY = '��������� 15 ��������';
const TOOLS_SQL_HELP_EXPLAIN = '�������� ������ ����� �� ������� %s';
const TOOLS_SQL_HELP_SELECT = '�������� ���������� ����� � ������� %s';
const TOOLS_SQL_HELP_SHOW = '�������� ������ ������';
const TOOLS_SQL_HELP_DOCS = "� ��������� ������������� �� �� MySQL �� ������ ������������ �� ������:<br>\n<a target=_blank href=http://dev.mysql.com/doc/refman/5.1/en/>http://dev.mysql.com/doc/refman/5.1/en/</a>";
const TOOLS_SQL_BENCHMARK = '����� ���������� �������';
const TOOLS_SQL_ERR_OPEN_FILE = '�� ������� ������� sql-����: %s';
const TOOLS_SQL_ERR_FILE_QUERY = '��������� ���������� ������� � ����� %s MySQL ������: %s';

const NETCAT_TRASH_SIZEINFO = '�� ������ ������ � ������� - %s. <br />����� ������� - %s ��.';
const NETCAT_TRASH_NOMESSAGES = '������� �����.';
const NETCAT_TRASH_MESSAGES_SK1 = '������';
const NETCAT_TRASH_MESSAGES_SK2 = '��������';
const NETCAT_TRASH_MESSAGES_SK3 = '�������';
const NETCAT_TRASH_RECOVERED_SK1 = '������������';
const NETCAT_TRASH_RECOVERED_SK2 = '�������������';
const NETCAT_TRASH_RECOVERED_SK3 = '�������������';
const NETCAT_TRASH_RECOVERY = '������������';
const NETCAT_TRASH_DELETE_FROM_TRASH = '������� �� �������';
const NETCAT_TRASH_OBJECT_WERE_DELETED_TRASHBIN_FULL = '������� �� ���� �������� � �������, ��� ��� ��� ���������';
const NETCAT_TRASH_OBJECT_IN_TRASHBIN_AND_CANCEL = "������� ���������� � <a href='%s'>�������</a>. <a href='%s'>��������</a>";
const NETCAT_TRASH_TRASHBIN_DISABLED = '������� ��������� �������� ���������';
const NETCAT_TRASH_EDIT_SETTINGS = '�������� ���������';
const NETCAT_TRASH_OBJECT_NOT_FOUND = '�� ������� ��������, ��������������� �������';
const NETCAT_TRASH_TRASHBIN = '�������';
const NETCAT_TRASH_PRERECOVERYSUB_INFO = '��������� �� ����������������� �������� ���������� � ��������, ������� ������ ��� ���. Netcat ����� ������������ ��� ������� � ���� �����������, ������� ���� �� ������ �������� ��������. �� ������ ������� ��� ��������.';
const NETCAT_TRASH_PRERECOVERYSUB_CHECKED = '�������';
const NETCAT_TRASH_PRERECOVERYSUB_NAME = '��������';
const NETCAT_TRASH_PRERECOVERYSUB_KEYWORD = '�������� �����';
const NETCAT_TRASH_PRERECOVERYSUB_PARENT = '������������ ������';
const NETCAT_TRASH_PRERECOVERYSUB_ROOT = '�������� ������ �����';
const NETCAT_TRASH_PRERECOVERYSUB_NEXT = '�����';
const NETCAT_TRASH_FILTER = '������� ��������� ��������';
const NETCAT_TRASH_FILTER_DATE_FROM = '���� �������� �';
const NETCAT_TRASH_FILTER_DATE_TO = '���� �������� ��';
const NETCAT_TRASH_FILTER_DATE_FORMAT = '��-��-���� ��:��';
const NETCAT_TRASH_FILTER_SUBDIVISION = '������';
const NETCAT_TRASH_FILTER_COMPONENT = '���������';
const NETCAT_TRASH_FILTER_ALL = '���';
const NETCAT_TRASH_FILTER_APPLY = '�������';
const NETCAT_TRASH_FILE_DOEST_EXIST = '���� %s �� ������';
const NETCAT_TRASH_FOLDER_FAIL = '���������� %s �� ���������� ��� �� �������� ��� ������';
const NETCAT_TRASH_ERROR_RELOAD_PAGE = "���������� ������. ���������� <a href='index.php'>������������� ��������</a>";
const NETCAT_TRASH_TRASHBIN_IS_FULL = '������� �����������';
const NETCAT_TRASH_TEMPLATE_DOESNT_EXIST = '� ������� ���������� ��� ������� ��� ������� ��������� ��������';
const NETCAT_TRASH_IDENTIFICATOR = '�������������';
const NETCAT_TRASH_USER_IDENTIFICATOR = 'ID ����������� ������������';

# USERS
const CONTROL_USER_GROUPS = '������ �������������';
const CONTROL_USER_FUNCS_ALLUSERS = '���';
const CONTROL_USER_FUNCS_ONUSERS = '����������';
const CONTROL_USER_FUNCS_OFFUSERS = '�����������';
const CONTROL_USER_FUNCS_DOGET = '�������';
const CONTROL_USER_FUNCS_VIEWCONTROL = '��������� ������';
const CONTROL_USER_FUNCS_SORTBY = '����������� �� ����';
const CONTROL_USER_FUNCS_USER_NUMBER_ON_THE_PAGE = '������������� �� ��������.';
const CONTROL_USER_FUNCS_SORT_ORDER = '������� ����������';
const CONTROL_USER_FUNCS_SORT_ORDER_ACS = '�� �����������';
const CONTROL_USER_FUNCS_SORT_ORDER_DESC = '�� ��������';
const CONTROL_USER_FUNCS_PREV_PAGE = '���������� ��������';
const CONTROL_USER_FUNCS_NEXT_PAGE = '��������� ��������';
const CONTROL_USER_FUNC_CONFIRM_DEL = '����������� ��������';
const CONTROL_USER_FUNC_CONFIRM_DEL_OK = '�����������';
const CONTROL_USER_FUNC_CONFIRM_DEL_NOT_USER = '�� ������� ������������';
const CONTROL_USER_FUNC_GROUP_ERROR = '�� �������� ������';
const CONTROL_USER = '������������';
const CONTROL_USER_FUNCS_EDITACCESSRIGHT = '������������� ����� �������';
const CONTROL_USER_ACTIONS = '��������';
const CONTROL_USER_RIGHTS_ITEM = '��������';
const CONTROL_USER_RIGHTS_SELECT_ITEM = '�������� ��������';
const CONTROL_USER_RIGHTS_TYPE_OF_RIGHT = '��� ����';
const CONTROL_USER_RIGHTS = '�����';
const CONTROL_USER_ERROR_NEWPASS_IS_CURRENT = '����� ������ ��������� � �������!';
const CONTROL_USER_CHANGEPASS = '������� ������';
const CONTROL_USER_EDIT = '�������������';
const CONTROL_USER_REG = '����������� ������������';
const CONTROL_USER_NEWPASSWORD = '����� ������';
const CONTROL_USER_NEWPASSWORDAGAIN = '����� ������ ��� ���';
const CONTROL_USER_MSG_USERNOTFOUND = '�� ������� �� ������ ������������, ���������������� ������ �������.';
const CONTROL_USER_GROUP = '������';
const CONTROL_USER_GROUP_MEMBERS = '���������';
const CONTROL_USER_GROUP_NOMEMBERS = '���������� ���.';
const CONTROL_USER_GROUP_TOTAL = '�����';
const CONTROL_USER_GROUPNAME = '�������� ������';
const CONTROL_USER_ERROR_GROUPNAME_IS_EMPTY = '�������� ������ �� ����� ���� ������!';
const CONTROL_USER_ADDNEWGROUP = '�������� ������';
const CONTROL_USER_CHANGERIGHTS = '��������� ����� �������';
const CONTROL_USER_NEW_ADDED = '������������ ��������';
const CONTROL_USER_NEW_NOTADDED = '������������ �� ��������';
const CONTROL_USER_EDITSUCCESS = '������������ ������� �������';
const CONTROL_USER_REGISTER = '����������� ������ ������������';
const CONTROL_USER_REGISTER_ERROR_NO_LOGIN_FIELD_VALUE = '�� �������� �������� ��� ������';
const CONTROL_USER_REGISTER_ERROR_LOGIN_ALREADY_EXIST = '����� ��� �����';
const CONTROL_USER_REGISTER_ERROR_LOGIN_INCORRECT = '����� �������� ������������ �������';
const CONTROL_USER_GROUPS_ADD = '���������� ������';
const CONTROL_USER_GROUPS_EDIT = '�������������� ������';
const CONTROL_USER_ACESSRIGHTS = '����� �������';
const CONTROL_USER_USERSANDRIGHTS = '������������ � �����';
const CONTROL_USER_PASSCHANGE = '����� ������';
const CONTROL_USER_CATALOGUESWITCH = '����� ��������';
const CONTROL_USER_SECTIONSWITCH = '����� �������';
const CONTROL_USER_TITLE_USERINFOEDIT = '�������������� ���������� � ������������';
const CONTROL_USER_TITLE_PASSWORDCHANGE = '����� ������ ������������';
const CONTROL_USER_ERROR_EMPTYPASS = '������ �� ����� ���� ������!';
const CONTROL_USER_ERROR_NOTCANGEPASS = '������ �� �������. ������!';
const CONTROL_USER_OK_CHANGEDPASS = '������ ������� �������.';
const CONTROL_USER_ERROR_RETRY = '���������� �����!';
const CONTROL_USER_ERROR_PASSDIFF = '��������� ������ �� ���������!';
const CONTROL_USER_MAIL = '�������� �� ����';
const CONTROL_USER_MAIL_TITLE_COMPOSE = '����������� ������';
const CONTROL_USER_MAIL_GROUP = '������ �������������';
const CONTROL_USER_MAIL_ALLGROUPS = '��� ������';
const CONTROL_USER_MAIL_FROM = '�����������';
const CONTROL_USER_MAIL_BODY = '����� ������';
const CONTROL_USER_MAIL_ADDATTACHMENT = '������� ����';
const CONTROL_USER_MAIL_SEND = '��������� ���������';
const CONTROL_USER_MAIL_ERROR_EMAILFIELD = '�� ���������� ���� ���������� Email �������������.';
const CONTROL_USER_MAIL_OK = '������ ���������� ���� �������������';
const CONTROL_USER_MAIL_ERROR_NOONEEMAIL = '� ��������� ���� �� ������� �� ������ ������������ ������.';
const CONTROL_USER_MAIL_ATTCHAMENT = '������������ ����';
define("CONTROL_USER_MAIL_ERROR_ONE", "�������� ����������, ��� ��� � <a href=".$ADMIN_PATH."settings.php?phase=1>��������� ����������</a> �� ������� ���� ��� ��������.");
define("CONTROL_USER_MAIL_ERROR_TWO", "�������� ����������, ��� ��� � <a href=".$ADMIN_PATH."settings.php?phase=1>��������� ����������</a> �� ������� ��� ����������� �����.");
define("CONTROL_USER_MAIL_ERROR_THREE", "�������� ����������, ��� ��� � <a href=".$ADMIN_PATH."settings.php?phase=1>��������� ����������</a> �� ������ Email ����������� �����.");
const CONTROL_USER_MAIL_ERROR_NOBODY = '����������� ����� ������.';
const CONTROL_USER_MAIL_CHANGE = '��������';
const CONTROL_USER_MAIL_CONTENT = '���������� ������';
const CONTROL_USER_MAIL_SUBJECT = '���� ������';
const CONTROL_USER_MAIL_RULES = '������� ��������';
const CONTROL_USER_FUNCS_USERSGET = '������� �������������';
const CONTROL_USER_FUNCS_USERSGET_EXT = '����������� �����';
const CONTROL_USER_FUNCS_SEARCHEDUSER = '������� �������������';
const CONTROL_USER_FUNCS_USERCOUNT = '����� �������������';
const CONTROL_USER_FUNCS_ADDUSER = '�������� ������������';
const CONTROL_USER_FUNCS_NORIGHTS = '������� ������������ �� ��������� �����.';
const CONTROL_USER_FUNCS_GROUP_NORIGHTS = '� ������ ������ ��� ����.';
const CONTROL_USER_RIGHTS_QUOTES = '�%s�';
const CONTROL_USER_RIGHTS_GUESTONE = '�����';
const CONTROL_USER_RIGHTS_DIRECTOR = '��������';
const CONTROL_USER_RIGHTS_SUPERVISOR = '����������';
const CONTROL_USER_RIGHTS_SITEADMIN = '�������� �����';
const CONTROL_USER_RIGHTS_CATALOGUEADMINALL = '�������� ���� ������';
const CONTROL_USER_RIGHTS_CONTENTEDITOR = '�������� �������� �����';
const CONTROL_USER_RIGHTS_ALLSITESCONTENTEDITOR = '�������� �������� ���� ������';
const CONTROL_USER_RIGHTS_SUBDIVISIONADMIN = '�������� �������';
const CONTROL_USER_RIGHTS_CONTENTADMIN = '�������� �������� �����';
const CONTROL_USER_RIGHTS_SUBCLASSADMIN = '�������� ����������';
const CONTROL_USER_RIGHTS_SUBCLASSADMINS = '�������� ���������';
const CONTROL_USER_RIGHTS_CLASSIFICATORADMIN = '������������� ������';
const CONTROL_USER_RIGHTS_CLASSIFICATORADMINALL = '������������� ���� �������';
const CONTROL_USER_RIGHTS_MODULE = '������ � �������';
const CONTROL_USER_RIGHTS_MODULE_ALL = '������ ������';
const CONTROL_USER_MODULE = '������';
const CONTROL_USER_MODULE_ALL = '��� ������';
const CONTROL_USER_MODULE_SITE = '�� ����� �%s�';
const CONTROL_USER_MODULE_SITE_ANY = '�� ���� ������';
const CONTROL_USER_RIGHTS_EDITOR = '��������';
const CONTROL_USER_RIGHTS_SUBSCRIBER = '���������';
const CONTROL_USER_RIGHTS_SUBSCRIBER_OF = '�� ��������';
const CONTROL_USER_RIGHTS_MODERATOR = '���������� ��������������';
const CONTROL_USER_RIGHTS_USER_GROUP = '���������� ��������';
const CONTROL_USER_RIGHTS_BAN = '����������� � ������';
const CONTROL_USER_RIGHTS_SITE = '����������� � ������ �����';
const CONTROL_USER_RIGHTS_SITEALL = '����������� � ������ �� ���� ������';
const CONTROL_USER_RIGHTS_SUB = '����������� � ������ �������';
const CONTROL_USER_RIGHTS_CC = '����������� � ������ ����������';
const CONTROL_USER_RIGHTS_LOAD = '��������';
const CONTROL_USER_RIGHT_ADDNEWRIGHTS = '��������� �����';
const CONTROL_USER_RIGHT_ADDPERM = '���������� ����� ������������';
const CONTROL_USER_RIGHT_ADDPERM_GROUP = '���������� ����� ������';
const CONTROL_USER_FUNCS_FROMCAT = '�� �����';
const CONTROL_USER_FUNCS_FROMSEC = '�� �������';
const CONTROL_USER_FUNCS_ADDNEWRIGHTS = '��������� ����� �����';
const CONTROL_USER_FUNCS_ERR_CANTREMGROUP = '�� ������� ������� ������ %s. ������!';
const CONTROL_USER_SELECTSITE = '�������� ����';
const CONTROL_USER_SELECTSECTION = '�������� ������';
const CONTROL_USER_NOONESECSINSITE = '� ������ ����� ��� �� ������ �������.';
const CONTROL_USER_FUNCS_SITE = '����';
const CONTROL_USER_FUNCS_CLASSINSECTION = '��������';
const CONTROL_USER_RIGHTS_UPDATED_OK = '����� ������������ ���������.';
const CONTROL_USER_RIGHTS_ERROR_NOSELECTED = '�� ������� ��������';
const CONTROL_USER_RIGHTS_ERROR_DATA = '������ � ����';
const CONTROL_USER_RIGHTS_ERROR_DB = '������ ������ � ��';
const CONTROL_USER_RIGHTS_ERROR_POSSIBILITY = '�� ������� �����������';
const CONTROL_USER_RIGHTS_ERROR_NOTSITE = '�� ������ ����';
const CONTROL_USER_RIGHTS_ERROR_NOTSUB = '�� ������ ������';
const CONTROL_USER_RIGHTS_ERROR_NOTCCINSUB = '� ��������� ������� ��� �����������';
const CONTROL_USER_RIGHTS_ERROR_NOTTYPEOFRIGHT = '�� ������ ��� ����';
const CONTROL_USER_RIGHTS_ERROR_START = '������ � ���� ������ �������� �����';
const CONTROL_USER_RIGHTS_ERROR_END = '������ � ���� ��������� �������� �����';
const CONTROL_USER_RIGHTS_ERROR_STARTEND = '����� ��������� �������� ���� �� ����� ���� ������ ������� ������';
const CONTROL_USER_RIGHTS_ERROR_GUEST = '������ ��������� ����� ������� ������ ����';
const CONTROL_USER_RIGHTS_ERROR_NONE_AVAILABLE = '����� �� ���� ���������, ��� ��� � ��� ��� ���� ����';
const CONTROL_USER_RIGHTS_ERROR_SOME_AVAILABLE = '��������� ����� �� ���� ���������: ������ ��������� ��� �������� �����, ������� ��� � ���';
const CONTROL_USER_RIGHTS_ERROR_EXISTED = '����� �� ���� ���������, ��� ��� ��� ��� ����� ������� ����� ��� ���������';
const CONTROL_USER_RIGHTS_ADDED = '����� ���������';
const CONTROL_USER_RIGHTS_LIVETIME = '���� ��������';
const CONTROL_USER_RIGHTS_UNLIMITED = '�� ���������';
const CONTROL_USER_RIGHTS_NONLIMITED = '��� �����������';
const CONTROL_USER_RIGHTS_LIMITED = '���������';
const CONTROL_USER_RIGHTS_STARTING_OPERATIONS = '������ ��������';
const CONTROL_USER_RIGHTS_FINISHING_OPERATIONS = '����� ��������';
const CONTROL_USER_RIGHTS_NOW = '������';
const CONTROL_USER_RIGHTS_ACROSS = '�����';
const CONTROL_USER_RIGHTS_ACROSS_MINUTES = '�����';
const CONTROL_USER_RIGHTS_ACROSS_HOURS = '�����';
const CONTROL_USER_RIGHTS_ACROSS_DAYS = '����';
const CONTROL_USER_RIGHTS_ACROSS_MONTHS = '�������';
const CONTROL_USER_RIGHTS_RIGHT = '�����';
const CONTROL_USER_RIGHTS_CONTROL_ADD = '����������';
const CONTROL_USER_RIGHTS_CONTROL_EDIT = '�������������� �������������, �� ������� ���� � �������';
const CONTROL_USER_RIGHTS_CONTROL_MODERATE = '������������� �������������, � ������� ���� ����� �� ����� � �������';
const CONTROL_USER_RIGHTS_CONTROL_DELETE = '��������';
const CONTROL_USER_RIGHTS_CONTROL_ADMIN = '����������������� (���������� ����)';
const CONTROL_USER_RIGHTS_CONTROL_HELP = '������';
const CONTROL_USER_USERS_MOVED_SUCCESSFULLY = '������������ ������� ����������';
const CONTROL_USER_SELECT_GROUP_TO_MOVE = '�������� ������, � ������� ����� ����������� ��������� �������������';
const CONTROL_USER_SELECTSITEALL = '��� �����';

# TEMPLATE
const CONTROL_TEMPLATE = '������ �������';
const CONTROL_TEMPLATE_ADD = '���������� ������';
const CONTROL_TEMPLATE_EDIT = '�������������� ������';
const CONTROL_TEMPLATE_DELETE = '�������� ������';
const CONTROL_TEMPLATE_OPT_ADD = '���������� ���������';
const CONTROL_TEMPLATE_OPT_EDIT = '�������������� ���������';
const CONTROL_TEMPLATE_ERR_NAME = '������� �������� ������.';
define("CONTROL_TEMPLATE_INFO_CONVERT", "���������� ����� �������, �� �������� <a href='#' onclick=\"window.open('".$ADMIN_PATH."template/converter.php', 'converter','width=600,height=410,status=no,resizable=yes');\">������������ �����������</a>.");
const CONTROL_TEMPLATE_TEPL_NAME = '�������� ������';
const CONTROL_TEMPLATE_TEPL_MENU = '������� ������ ���������';
const CONTROL_TEMPLATE_TEPL_HEADER = '������� ����� �������� (Header)';
const CONTROL_TEMPLATE_TEPL_FOOTER = '������ ����� �������� (Footer)';
const CONTROL_TEMPLATE_TEPL_CREATE = '�������� �����';
const CONTROL_TEMPLATE_NOT_FOUND = '����� ������� � ��������������� %s �� ������!';
const CONTROL_TEMPLATE_ERR_USED_IN_SITE = '������ ����� ������� ������������ � ��������� ������:';
const CONTROL_TEMPLATE_ERR_USED_IN_SUB = '������ ����� ������� ������������ � ��������� ��������:';
const CONTROL_TEMPLATE_ERR_CANTDEL = '�� ������� ������� �����';
const CONTROL_TEMPLATE_INFO_DELETE = '�� ����������� ������� �����';
const CONTROL_TEMPLATE_INFO_DELETE_SOME = '��� ������ ����� �������';
const CONTROL_TEMPLATE_DELETED = '����� ������';
const CONTROL_TEMPLATE_ADDLINK = '�������� ����� �������';
const CONTROL_TEMPLATE_REMOVETHIS = '������� ���� ����� �������';
const CONTROL_TEMPLATE_PREF_EDIT = '�������� ���������';
const CONTROL_TEMPLATE_NONE = '� ������� ��� �� ������ ������';
const CONTROL_TEMPLATE_TEPL_IMPORT = '������ ������';
const CONTROL_TEMPLATE_IMPORT = '������ ������';
const CONTROL_TEMPLATE_IMPORT_UPLOAD = '���������';
const CONTROL_TEMPLATE_IMPORT_SELECT = '�������� ������ ��� ������� (������������� ����� �������� �������)';
const CONTROL_TEMPLATE_IMPORT_CONTINUE = '�����';
const CONTROL_TEMPLATE_IMPORT_ERROR_NOTUPLOADED = '������ ������� ������';
const CONTROL_TEMPLATE_IMPORT_ERROR_SQL = '������ ��� ���������� ������ � ���� ������';
const CONTROL_TEMPLATE_IMPORT_ERROR_EXTRACT = '������ ��� ���������� ������ ������ %s � ���������� %s';
const CONTROL_TEMPLATE_IMPORT_ERROR_MOVE = '������ ����������� ������ �� %s � %s';
const CONTROL_TEMPLATE_IMPORT_SUCCESS = '����� ������� ������������';
const CONTROL_TEMPLATE_EXPORT = '�������������� ����� � ����';
const CONTROL_TEMPLATE_FILES_PATH = "����� ������ ��������� � ����� <a href='%s'>%s</a>";
const CONTROL_TEMPLATE_PARTIALS = '������';
const CONTROL_TEMPLATE_PARTIALS_NEW = '����� ������';
const CONTROL_TEMPLATE_PARTIALS_ADD = '�������� ������';
const CONTROL_TEMPLATE_PARTIALS_REMOVE = '������� ������';
const CONTROL_TEMPLATE_PARTIALS_KEYWORD_FIELD = '�������� ����� ������ (���������� �������)';
const CONTROL_TEMPLATE_PARTIALS_KEYWORD_FIELD_ERROR = '�������� ����� ������ ����� ��������� ������ ��������� �����, ����� � ���� �������������';
const CONTROL_TEMPLATE_PARTIALS_KEYWORD_FIELD_REQUIRED_ERROR = '�������� ����� ������ ����������� ��� ����������';
const CONTROL_TEMPLATE_PARTIALS_DESCRIPTION_FIELD = '��������';
const CONTROL_TEMPLATE_PARTIALS_ENABLE_ASYNC_LOAD_FIELD = '��������� ����������� ��������';
const CONTROL_TEMPLATE_PARTIALS_SOURCE_FIELD = '������ ������';
const CONTROL_TEMPLATE_PARTIALS_EXISTS_ERROR = '������ � ����� �������� ������ ��� ����������';
const CONTROL_TEMPLATE_PARTIALS_NOT_EXISTS = '� ������ ������ ��� �� ����� ������';
const CONTROL_TEMPLATE_BASE_TEMPLATE = '������� ����� ������� �� ������ �������������';
const CONTROL_TEMPLATE_BASE_TEMPLATE_CREATE_FROM_SCRATCH = '������� ����� ������� �� �����';
const CONTROL_TEMPLATE_CONTINUE = '����������';

const CONTROL_TEMPLATE_KEYWORD = '�������� �����';
const CONTROL_TEMPLATE_KEYWORD_ONLY_DIGITS = '�������� ����� �� ����� �������� ������ �� ����';
const CONTROL_TEMPLATE_KEYWORD_TOO_LONG = '����� ��������� ����� �� ����� ���� ����� %d ��������';
const CONTROL_TEMPLATE_KEYWORD_INVALID_CHARACTERS = '�������� ����� ����� ��������� ������ ����� ���������� ��������, ����� � ������� �������������';
const CONTROL_TEMPLATE_KEYWORD_NON_UNIQUE = '�������� ����� �%s� ��� ��������� ������ ������� �%d. %s�';
const CONTROL_TEMPLATE_KEYWORD_RESERVED = '���������� ������������ �%s� � �������� ��������� �����, ��� ��� ��� �������� �����������������';
const CONTROL_TEMPLATE_KEYWORD_PATH_EXISTS = '���������� ������������ �%s� � �������� ��������� �����, ��� ��� ��� ���������� ����� � ����� ���������';

# CLASSIFICATORS
const CONTENT_CLASSIFICATORS = '������';
const CONTENT_CLASSIFICATORS_NAMEONE = '������';
const CONTENT_CLASSIFICATORS_NAMEALL = '��� ������';
const CONTENT_CLASSIFICATORS_ELEMENTS = '��������';
const CONTENT_CLASSIFICATORS_ELEMENT = '�������';
const CONTENT_CLASSIFICATORS_ELEMENT_NAME = '�������� ��������';
const CONTENT_CLASSIFICATORS_ELEMENT_VALUE = '�������������� ��������';
const CONTENT_CLASSIFICATORS_ELEMENTS_ADDONE = '�������� �������';
const CONTENT_CLASSIFICATORS_ELEMENTS_ADD = '���������� ��������';
const CONTENT_CLASSIFICATORS_ELEMENTS_ADD_SUCCESS = '������� ��������';
const CONTENT_CLASSIFICATORS_ELEMENTS_EDIT = '�������������� ��������';
const CONTENT_CLASSIFICATORS_LIST_ADD = '���������� ������';
const CONTENT_CLASSIFICATORS_LIST_EDIT = '�������������� ������';
const CONTENT_CLASSIFICATORS_LIST_CUSTOM = '���������������� ���������';
const CONTENT_CLASSIFICATORS_LIST_DELETE = '�������� ������';
const CONTENT_CLASSIFICATORS_LIST_DELETE_SELECTED = '������� ���������';
const CONTENT_CLASSIFICATORS_ERR_NONE = '� ������ ������� ��� �� ������ ������.';
const CONTENT_CLASSIFICATORS_ERR_ELEMENTNONE = '� ������ ������ ��� �� ������ ��������.';
const CONTENT_CLASSIFICATORS_ERR_SYSDEL = '���������� ������� ������� �� ���������� ��������������';
const CONTENT_CLASSIFICATORS_ERR_EDITI_GUESTRIGHTS = '��������� ������ � �������������� ���������� � ��������� �������!';
const CONTENT_CLASSIFICATORS_ERROR_NAME = '������� ������� �������� ��������������!';
const CONTENT_CLASSIFICATORS_ERROR_FILE_NAME = '�������� CSV-���� ��� ��������������!';
const CONTENT_CLASSIFICATORS_ERROR_KEYWORD = '������� ���������� �������� �������������� (�������� �������)!';
const CONTENT_CLASSIFICATORS_ERROR_KEYWORDINV = '���������� �������� (�������� �������) ������ ��������� ������ ��������� ����� � �����!';
const CONTENT_CLASSIFICATORS_ERROR_KEYWORDFL = '���������� �������� (�������� �������) ������ ���������� � ��������� �����!';
const CONTENT_CLASSIFICATORS_ERROR_KEYWORDAE = '������������� � ����� ���������� ��������� (��������� �������) ��� ����������!';
const CONTENT_CLASSIFICATORS_ERROR_KEYWORDREZ = '������ ��� ���������������!';
const CONTENT_CLASSIFICATORS_ADDLIST = '�������� ������';
const CONTENT_CLASSIFICATORS_ADD_KEYWORD = '�������� ������� (���������� �������)';
const CONTENT_CLASSIFICATORS_SAVE = '��������� ���������';
const CONTENT_CLASSIFICATORS_NO_NAME = '(��� ��������)';
const CONTENT_CLASSIFICATORS_CUSTOM_BY_DEFAULT = '�� ���������:';
const CLASSIFICATORS_SORT_HEADER = '��� ����������';
const CLASSIFICATORS_SORT_PRIORITY_HEADER = '���������';
const CLASSIFICATORS_SORT_TYPE_ID = 'ID';
const CLASSIFICATORS_SORT_TYPE_NAME = '�������';
const CLASSIFICATORS_SORT_TYPE_PRIORITY = '���������';
const CLASSIFICATORS_SORT_DIRECTION = '����������� ����������';
const CLASSIFICATORS_SORT_ASCENDING = '����������';
const CLASSIFICATORS_SORT_DESCENDING = '����������';
const CLASSIFICATORS_IMPORT_HEADER = '������ ������';
const CLASSIFICATORS_IMPORT_BUTTON = '�������������';
const CLASSIFICATORS_IMPORT_FILE = 'CSV-���� (*)';
const CLASSIFICATORS_IMPORT_DESCRIPTION = '���� � ������������� ����� ������ ���� �������, �� ��� ��������� ����� �������, ���� ��� - ������ ������� ��� �������, � ������ ���������.';
const CLASSIFICATORS_SUCCESS_DELETEONE = '������ ������� ������.';
const CLASSIFICATORS_SUCCESS_DELETE = '������ ������� �������.';
const CLASSIFICATORS_SUCCESS_ADD = '������ ������� ��������.';
const CLASSIFICATORS_SUCCESS_EDIT = '������ ������� �������.';
const CLASSIFICATORS_ERROR_DELETEONE_SYS = '������ %s - ���������, �������� ���������.';
const CLASSIFICATORS_ERROR_ADD = '������ ���������� ������.';
const CLASSIFICATORS_ERROR_EDIT = '������ ��������� ������.';

# TOOLS HTML
const TOOLS_HTML = 'HTML-��������';
const TOOLS_HTML_INFO = '������������� � ���������� ���������';

const TOOLS_DUMP = '������ �������';
const TOOLS_DUMP_CREATE = '�������� ������';
const TOOLS_DUMP_CREATED = '����� ������� ������ %FILE.';
const TOOLS_DUMP_CREATION_FAILED = '������ �������� ������.';
const TOOLS_DUMP_DELETED = '���� %FILE �����.';
const TOOLS_DUMP_RESTORE = '�������������� ������';
const TOOLS_DUMP_MSG_RESTORED = '����� ������������.';
const TOOLS_DUMP_INC_TITLE = '�������������� ������ � ���������� �����';
const TOOLS_DUMP_INC_DORESTORE = '������������';
const TOOLS_DUMP_INC_DBDUMP = '���� ���� ������';
const TOOLS_DUMP_INC_FOLDER = '���������� �����';
const TOOLS_DUMP_ERROR_CANTDELETE = '������! �� ���� ������� %FILE.';
const TOOLS_DUMP_INC_ARCHIVE = '�����';
const TOOLS_DUMP_INC_DATE = '����';
const TOOLS_DUMP_INC_SIZE = '������';
const TOOLS_DUMP_INC_DOWNLOAD = '�������';
const TOOLS_DUMP_NOONE = '������ ������� �����������.';
const TOOLS_DUMP_DATE = '���� ������';
const TOOLS_DUMP_SIZE = '������, ����';
const TOOLS_DUMP_CREATEAP = '������� ����� �������';
const TOOLS_DUMP_CONFIRM = '����������� �������� ������ �������';
const TOOLS_DUMP_BACKUPLIST_HEADER = '��������� ������ �������';
const TOOLS_DUMP_CREATE_HEADER = '�������� ������';
const TOOLS_DUMP_CREATE_OPT_FULL = '������ ����� (�������� ��� �����, ���� ������ � ������ ��������������)';
const TOOLS_DUMP_CREATE_OPT_DATA = '����� ������ (���������� images, netcat_templates, modules, netcat_files � ���� ������)';
const TOOLS_DUMP_CREATE_OPT_SQL = '������ ���� ������';
const TOOLS_DUMP_CREATE_SUBMIT = '������� ��������� �����';
const TOOLS_DUMP_REMOVE_SELECTED = '������� ��������� ������';
const TOOLS_DUMP_CREATE_WAIT = '������������ �������� ������. ����������, ���������.';
const TOOLS_DUMP_RESTORE_WAIT = '������������ �������������� ������ �� ������. ����������, ���������.';
const TOOLS_DUMP_CONNECTION_LOST = '�������� ����� � ��������. ���� ����������� �������� �� ���� ���������, %s.';
const TOOLS_DUMP_CONNECTION_LOST_SYSTEM_TAR = '���������� ��������� ���������� ��������� ������� tar �� PHP';
const TOOLS_DUMP_CONNECTION_LOST_INCREASE_PHP_LIMITS = '��������� ������ ������ PHP, � ���������� ��������� ����� ������ � PHP, �������� � � ������������ ���-�������, � ����� ������ ������������� �������� �� �������';
const TOOLS_DUMP_CONNECTION_LOST_INCREASE_SERVER_LIMITS = '���������� ��������� �������� � � ������������ ���-������� � ������ ������������� �������� �� �������';
const TOOLS_DUMP_CONNECTION_LOST_GO_BACK = '��������� �����';

const TOOLS_REDIRECT = '�������������';
const TOOLS_REDIRECT_OLDURL = '������ URL';
const TOOLS_REDIRECT_NEWURL = '����� URL';
const TOOLS_REDIRECT_OLDLINK = '������ ������';
const TOOLS_REDIRECT_NEWLINK = '����� ������';
const TOOLS_REDIRECT_HEADER = '���������';
const TOOLS_REDIRECT_HEADERSEND = '���������� ���������';
const TOOLS_REDIRECT_SETTINGS = '���������';
const TOOLS_REDIRECT_CHANGEINFO = '�������� ����������';
const TOOLS_REDIRECT_NONE = '� ������ ������ ��� �������������.';
const TOOLS_REDIRECT_ADD = '�������� �������������';
const TOOLS_REDIRECT_EDIT = '�������� �������������';
const TOOLS_REDIRECT_ADDONLY = '��������';
const TOOLS_REDIRECT_CANTBEEMPTY = '���� �� ����� ���� �������!';
define("TOOLS_REDIRECT_OLDURL_MUST_BE_UNIQUE", "��� ���� ������������� � ����� &quot;������ �������&quot; - <a href='" . nc_core('NETCAT_FOLDER') . "action.php?ctrl=admin.redirect&action=edit&id=%s'>�������</a>");
const TOOLS_REDIRECT_DISABLED = '� ���������������� ����� ���������� ��������������� ��������.<br/>����� ��� �������, ��������� � ����� vars.inc.php �������� ��������� $NC_REDIRECT_DISABLED �� 0. ';
const TOOLS_REDIRECT_GROUP = '������';
const TOOLS_REDIRECT_GROUP_NAME = '�������� ������';
const TOOLS_REDIRECT_GROUP_ADD = '�������� ������';
const TOOLS_REDIRECT_GROUP_EDIT = '�������� ������';
const TOOLS_REDIRECT_GROUP_DELETE = '������� ������';
const TOOLS_REDIRECT_BACK = '�����';
const TOOLS_REDIRECT_SAVE_OK = '������������� ���������';
const TOOLS_REDIRECT_GROUP_SAVE_OK = '������ ���������';
const TOOLS_REDIRECT_SAVE_ERROR = '������ ����������';
const TOOLS_REDIRECT_DELETE = '�������';
const TOOLS_REDIRECT_DELETE_CONFIRM_REDIRECTS = '����� ������� ��������� �������������:';
const TOOLS_REDIRECT_DELETE_CONFIRM_GROUP = '����� ������� ������ &quot;%s&quot; ������� ��������� �������������:';
const TOOLS_REDIRECT_DELETE_OK = '�������� ���������';
const TOOLS_REDIRECT_STATUS = '������';
const TOOLS_REDIRECT_SAVE = '���������';
const TOOLS_REDIRECT_MOVE = '��������� � ������';
const TOOLS_REDIRECT_MOVE_CONFIRM_REDIRECTS = '����� ���������� ��������� �������������:';
const TOOLS_REDIRECT_MOVE_OK = '����������� ���������';
const TOOLS_REDIRECT_NOTHING_SELECTED = '�� ������� �� ����� �������������';
const TOOLS_REDIRECT_IMPORT = '������';
const TOOLS_REDIRECT_FIELDS = '���� �������������';
const TOOLS_REDIRECT_CONTINUE = '����������';
const TOOLS_REDIRECT_DO_IMPORT = '�������������';
const TOOLS_REDIRECT_MOVE_TITLE = '����������� �������������';
const TOOLS_REDIRECT_DELETE_TITLE = '�������� �������������';
const TOOLS_REDIRECT_IMPORT_TITLE = '�������������� �������������';

const TOOLS_CRON = '���������� ��������';
const TOOLS_CRON_INTERVAL = '�������� (�:�:�)';
const TOOLS_CRON_MINUTES = '������';
const TOOLS_CRON_HOURS = '����';
const TOOLS_CRON_DAYS = '���';
const TOOLS_CRON_MONTHS = '������';
const TOOLS_CRON_LAUNCHED = '��������� ������';
const TOOLS_CRON_NEXT = '��������� ������';
const TOOLS_CRON_SCRIPTURL = '������ �� ������';
const TOOLS_CRON_ADDLINK = '�������� ������';
const TOOLS_CRON_CHANGE = '��������';
const TOOLS_CRON_NOTASKS = '� ������ ������� ��� �� ����� ������.';
define("TOOLS_CRON_WRONG_DOMAIN", "�����, ��������� � ����� crontab.php (%s), �� ������������� �������� (%s), ������ ����� �� �����������!" . (CMS_SYSTEM_NAME === 'Netcat' ? " ��������� ��������� � ������������ � <a href='https://netcat.ru/developers/docs/system-tools/task-management/' TARGET='_blank'>�������������</a>." : ''));

const TOOLS_COPYSUB = '����������� ��������';
const TOOLS_COPYSUB_COPY = '����������';
const TOOLS_COPYSUB_COPY_SUCCESS = '����������� ������� ���������';
const TOOLS_COPYSUB_SOURCE = '��������';
const TOOLS_COPYSUB_DESTINATION = '��������';
const TOOLS_COPYSUB_SITE = '����';
const TOOLS_COPYSUB_SUB = '���������� ������';
const TOOLS_COPYSUB_KEYWORD_SUB = '�������� ����� �������';
const TOOLS_COPYSUB_TEMPLATE_NAME = '������� ���';
const TOOLS_COPYSUB_SETTINGS = '��������� �����������';
const TOOLS_COPYSUB_COPY_WITH_CHILD = '���������� ����������';
const TOOLS_COPYSUB_COPY_WITH_CC = '���������� ���������';
const TOOLS_COPYSUB_COPY_WITH_OBJECT = '���������� �������';
const TOOLS_COPYSUB_ERROR_KEYWORD_EXIST = '������ � ����� �������� ������ ��� ����������';
const TOOLS_COPYSUB_ERROR_LEVEL_COUNT = '������ ����������� ������ � ������������ ���������';
const TOOLS_COPYSUB_ERROR_PARAM = '�������� ���������';
const TOOLS_COPYSUB_ERROR_SITE_NOT_FOUND = '���� �� ������';

# TOOLS TRASH
const TOOLS_TRASH = '������� ��������� ��������';
const TOOLS_TRASH_CLEAN = '�������� �������';

# MODERATION SECTION
const NETCAT_MODERATION_NO_OBJECTS_IN_SUBCLASS = '� ������ ��������� ������� ��� ������ ��� ������.';

const NETCAT_MODERATION_ERROR_NORIGHTS = '� ��� ��� ������� ��� ������������� ��������.';
const NETCAT_MODERATION_ERROR_NORIGHT = '� ��� ��� ���� �� ��� ��������';
const NETCAT_MODERATION_ERROR_NORIGHTGUEST = '�������� ����� �� ��������� ��������� ��� ��������';
const NETCAT_MODERATION_ERROR_NOOBJADD = '������ ���������� �������.';
const NETCAT_MODERATION_ERROR_NOOBJCHANGE = '������ ��������� �������.';
const NETCAT_MODERATION_MSG_OBJADD = '������ ��������.';
const NETCAT_MODERATION_MSG_OBJADDMOD = '������ ����� �������� ����� �������� ���������������.';
const NETCAT_MODERATION_MSG_OBJCHANGED = '������ �������.';
const NETCAT_MODERATION_MSG_OBJDELETED = '������ ������.';
const NETCAT_MODERATION_FILES_UPLOADED = '�������';
const NETCAT_MODERATION_FILES_DELETE = '������� ����';
const NETCAT_MODERATION_LISTS_CHOOSE = '-- ������� --';
const NETCAT_MODERATION_RADIO_EMPTY = '�� ��������';
const NETCAT_MODERATION_PRIORITY = '��������� �������';
const NETCAT_MODERATION_TURNON = '��������';
const NETCAT_MODERATION_DEMO_CONTENT = '����-�������';
const NETCAT_MODERATION_OBJADDED = '���������� �������';
const NETCAT_MODERATION_OBJUPDATED = '��������� �������';
const NETCAT_MODERATION_MSG_OBJSDELETED = '������� �������';
const NETCAT_MODERATION_OBJ_ON = '���';
const NETCAT_MODERATION_OBJ_OFF = '����';
const NETCAT_MODERATION_OBJECT = '������';
const NETCAT_MODERATION_MORE = '���';
const NETCAT_MODERATION_MORE_CONTAINER = '�������� � �����������...';
const NETCAT_MODERATION_MORE_BLOCK = '�������� � ������...';
const NETCAT_MODERATION_MORE_OBJECT = '�������� � ��������...';
const NETCAT_MODERATION_BLOCK_SETTINGS = '��������� �����';
const NETCAT_MODERATION_DELETE_BLOCK = '������� ����';
const NETCAT_MODERATION_ADD_BLOCK = '�������� ����';
const NETCAT_MODERATION_ADD_BLOCK_BEFORE = '��';
const NETCAT_MODERATION_ADD_BLOCK_INSIDE = '������';
const NETCAT_MODERATION_ADD_BLOCK_AFTER = '�����';
const NETCAT_MODERATION_ADD_BLOCK_RELATIVE_TO_THIS_CONTAINER = '����������';
const NETCAT_MODERATION_ADD_BLOCK_RELATIVE_TO_CONTAINER = '���������� �%s�';
const NETCAT_MODERATION_ADD_BLOCK_RELATIVE_TO_BLOCK = '����� �%s�';
const NETCAT_MODERATION_ADD_BLOCK_RELATIVE_TO_THIS_BLOCK = '����� �����';
const NETCAT_MODERATION_ADD_BLOCK_TITLE = '���������� �����';
const NETCAT_MODERATION_ADD_BLOCK_WRAP = '����������� ���� ����� ������ � ���������.';
const NETCAT_MODERATION_ADD_BLOCK_WRAP_CONTAINER = '����� ���� � ��������� �%s� ����� �������� � ����� ���������.';
const NETCAT_MODERATION_ADD_BLOCK_WRAP_BLOCK = '����� ���� � ���� �%s� ����� �������� � ����� ���������.';
const NETCAT_MODERATION_ADD_OBJECT = '��������';
const NETCAT_MODERATION_ADD_OBJECT_DEFAULT = '�������';
const NETCAT_MODERATION_REMOVE_INFOBLOCK_CONFIRMATION_HEADER = '������� ������������?';
const NETCAT_MODERATION_REMOVE_INFOBLOCK_CONFIRMATION_BODY = '���� �%s� � ��� ���������� ����� ������� �� ��������. ��� ������������� ������� ���������.';
const NETCAT_MODERATION_COMPONENT_SEARCH_BY_NAME = '����� �� ��������';
const NETCAT_MODERATION_CLEAR_FIELD = '��������';
const NETCAT_MODERATION_COMPONENT_NO_TEMPLATE = '�������� ������ ����������';
const NETCAT_MODERATION_COMPONENT_TEMPLATE = '������';
const NETCAT_MODERATION_COMPONENT_TEMPLATES = '�������';
const NETCAT_MODERATION_COMPONENT_TEMPLATE_PREV = '���������� ������';
const NETCAT_MODERATION_COMPONENT_TEMPLATE_NEXT = '��������� ������';
const NETCAT_MODERATION_COPY_BLOCK = '����������';
const NETCAT_MODERATION_CUT_BLOCK = '��������';
const NETCAT_MODERATION_PASTE_BLOCK = '�������� ������������� (����������) ����';
const NETCAT_MODERATION_CONTAINER = '���������';
const NETCAT_MODERATION_MAIN_CONTAINER = '���������� �������';
const NETCAT_MODERATION_ADD_CONTAINER = '�������� ���������';
const NETCAT_MODERATION_REMOVE_IMAGE = '������� �����������';
const NETCAT_MODERATION_REPLACE_IMAGE = '�������� �����������';

const NETCAT_MODERATION_WARN_COMMITDELETION = '����������� �������� ������� #%s';
const NETCAT_MODERATION_WARN_COMMITDELETIONINCLASS = '����������� �������� �������� ��������� #%s';

const NETCAT_MODERATION_PASSWORD = '������ (*)';
const NETCAT_MODERATION_PASSWORDAGAIN = '������� ������ ��� ���';
const NETCAT_MODERATION_INFO_REQFIELDS = '���������� (*) �������� ����, ������������ ��� ����������.';
const NETCAT_MODERATION_BUTTON_ADD = '��������';
const NETCAT_MODERATION_BUTTON_CHANGE = '��������� ���������';
const NETCAT_MODERATION_BUTTON_RESET = '�����';

const NETCAT_MODERATION_COMMON_KILLALL = '������� �������';
const NETCAT_MODERATION_COMMON_KILLONE = '������� ������';

const NETCAT_MODERATION_MULTIFILE_SIZE = '� ���� �%NAME� ��������� ����� � ��������, ����������� ���������� (%SIZE)';
const NETCAT_MODERATION_MULTIFILE_TYPE = '� ���� �%NAME� ��������� ����� ������������� ����';
const NETCAT_MODERATION_MULTIFILE_MIN_COUNT = '� ���� �%NAME� ������ ���� ��������� �� ����� %FILES.';
const NETCAT_MODERATION_MULTIFILE_MAX_COUNT = '� ���� �%NAME� ����� ���� ��������� �� ����� %FILES.';
const NETCAT_MODERATION_MULTIFILE_COUNT_FILES = '�����,������,������';
const NETCAT_MODERATION_MULTIFILE_DEFAULT_CUSTOM_NAME_CAPTION = '�������� �����';
const NETCAT_MODERATION_ADD = '�������� ���';

const NETCAT_MODERATION_MSG_ONE = '���� �%NAME� �������� ������������ ��� ����������.';
const NETCAT_MODERATION_MSG_TWO = '� ���� �%NAME� ������� �������� ������������� ����.';
const NETCAT_MODERATION_MSG_SIX = '���������� �������� ���� �%NAME�.';
const NETCAT_MODERATION_MSG_SEVEN = '���� �%NAME� ��������� ���������� ������.';
const NETCAT_MODERATION_MSG_EIGHT = '������������ ������ ����� �%NAME�.';
const NETCAT_MODERATION_MSG_TWENTYONE = '������� ������������ �������� �����.';
const NETCAT_MODERATION_MSG_RETRYPASS = '��������� ������ �� ���������';
const NETCAT_MODERATION_MSG_PASSMIN = '������ ������� ��������. ����������� ����� ������ %s ��������.';
const NETCAT_MODERATION_MSG_NEED_AGREED = '���������� ����������� � ���������������� �����������';
const NETCAT_MODERATION_MSG_LOGINALREADY = '����� %s ����� ������ �������������';
const NETCAT_MODERATION_MSG_LOGININCORRECT = '����� �������� ����������� �������';
const NETCAT_MODERATION_BACKTOSECTION = '��������� � ������';

const NETCAT_MODERATION_ISON = '�������';
const NETCAT_MODERATION_ISOFF = '��������';
const NETCAT_MODERATION_OBJISON = '������ �������';
const NETCAT_MODERATION_OBJISOFF = '������ ��������';
const NETCAT_MODERATION_OBJSAREON = '������� ��������';
const NETCAT_MODERATION_OBJSAREOFF = '������� ���������';
const NETCAT_MODERATION_CHANGED = 'ID ����������� ������������';
const NETCAT_MODERATION_CHANGE = '��������';
const NETCAT_MODERATION_DELETE = '�������';
const NETCAT_MODERATION_TURNTOON = '��������';
const NETCAT_MODERATION_TURNTOOFF = '���������';
const NETCAT_MODERATION_ID = '�������������';
const NETCAT_MODERATION_COPY_OBJECT = '���������� / ���������';

const NETCAT_MODERATION_REMALL = '������� ���';
const NETCAT_MODERATION_DELETESELECTED = '������� ���������';
const NETCAT_MODERATION_SELECTEDON = '�������� ���������';
const NETCAT_MODERATION_SELECTEDOFF = '��������� ���������';
const NETCAT_MODERATION_NOTSELECTEDOBJ = '�� ������� �� ������ �������';
const NETCAT_MODERATION_APPLY_CHANGES_TITLE = '��������� ���������?';
const NETCAT_MODERATION_APPLY_CHANGES_TEXT = '�� ������������� ������ ��������� ���������?';
const NETCAT_MODERATION_CLASSID = '����� ���������� �������';
const NETCAT_MODERATION_ADDEDON = 'ID ����������� ������������';

const NETCAT_MODERATION_MOD_NOANSWER = '�� �����';
const NETCAT_MODERATION_MOD_DON = ' �� ';
const NETCAT_MODERATION_MOD_FROM = ' �� ';
const NETCAT_MODERATION_MODA = '--------- �� ����� ---------';

const NETCAT_MODERATION_FILTER = '������';
const NETCAT_MODERATION_TITLE = '���������';
const NETCAT_MODERATION_DESCRIPTION = '��������';

const NETCAT_MODERATION_TRASHED_OBJECTS = '��������� �������';
const NETCAT_MODERATION_TRASHED_OBJECTS_RESTORE = '������������ ������';

const NETCAT_MODERATION_NO_RELATED = '[���]';
const NETCAT_MODERATION_RELATED_INEXISTENT = '[�������������� ������ ID=%s]';
const NETCAT_MODERATION_CHANGE_RELATED = '��������';
const NETCAT_MODERATION_REMOVE_RELATED = '�������';
const NETCAT_MODERATION_SELECT_RELATED = '�������';
const NETCAT_MODERATION_COPY_HERE_RELATED = '���������� ����';
const NETCAT_MODERATION_MOVE_HERE_RELATED = '����������� ����';
const NETCAT_MODERATION_CONFIRM_COPY_RELATED = '����������� ��������';
const NETCAT_MODERATION_RELATED_POPUP_TITLE = '����� ���������� ������� (���� &quot;%s&quot;)';
const NETCAT_MODERATION_RELATED_NO_CONCRETE_CLASS_IN_SUB = '� ������ ������� ��� ���������� �%s�.';
const NETCAT_MODERATION_RELATED_NO_ANY_CLASS_IN_SUB = '� ������ ������� ��� �� ������ ����������� ���������.';
const NETCAT_MODERATION_RELATED_ERROR_SAVING = '�� ������� ��������� ��������� �������� (��������, ����� �������������� ��������� ������� ���� �������). ���������� ������� ��������� �������� ��� ���.';
const NETCAT_MODERATION_COPY_SUCCESS = '����������� ������� ������� ���������';
const NETCAT_MODERATION_MOVE_SUCCESS = '����������� ������� ������� ���������';


const NETCAT_MODERATION_SEO_TITLE = '��������� �������� (Title)';
const NETCAT_MODERATION_SEO_H1 = '��������� �� �������� (H1)';
const NETCAT_MODERATION_SEO_KEYWORDS = '�������� ����� ��� �����������';
const NETCAT_MODERATION_SEO_DESCRIPTION = '�������� �������� ��� �����������';

const NETCAT_MODERATION_SMO_TITLE = '��������� ��� ���������� �����';
const NETCAT_MODERATION_SMO_TITLE_HELPER = '������ ���������� ������ ��� ���������� ������ �� �������� � �������� ��� ���������';
const NETCAT_MODERATION_SMO_DESCRIPTION = '�������� ��� ���������� �����';
const NETCAT_MODERATION_SMO_DESCRIPTION_HELPER = '������ ������� ������ ��� ���������� ������ �� �������� � �������� ��� ���������';
const NETCAT_MODERATION_SMO_IMAGE = '����������� ��� ���������� �����';

const NETCAT_MODERATION_STANDART_FIELD_USER_ID = 'ID ������������';
const NETCAT_MODERATION_STANDART_FIELD_USER = '������������';
const NETCAT_MODERATION_STANDART_FIELD_PRIORITY = '���������';
const NETCAT_MODERATION_STANDART_FIELD_KEYWORD = '�������� �����';
const NETCAT_MODERATION_STANDART_FIELD_NC_TITLE = 'SEO Meta Title';
const NETCAT_MODERATION_STANDART_FIELD_NC_KEYWORDS = 'SEO Meta Keywords';
const NETCAT_MODERATION_STANDART_FIELD_NC_DESCRIPTION = 'SEO Meta Description';
const NETCAT_MODERATION_STANDART_FIELD_NC_IMAGE = '�����������';
const NETCAT_MODERATION_STANDART_FIELD_NC_ICON = '������';
const NETCAT_MODERATION_STANDART_FIELD_NC_SMO_TITLE = 'SMO Meta Title';
const NETCAT_MODERATION_STANDART_FIELD_NC_SMO_DESCRIPTION = 'SMO Meta Description';
const NETCAT_MODERATION_STANDART_FIELD_NC_SMO_IMAGE = 'SMO Meta Image';
const NETCAT_MODERATION_STANDART_FIELD_IP = 'IP';
const NETCAT_MODERATION_STANDART_FIELD_USER_AGENT = '�������';
const NETCAT_MODERATION_STANDART_FIELD_CREATED = '������';
const NETCAT_MODERATION_STANDART_FIELD_LAST_UPDATED = '��������';
const NETCAT_MODERATION_STANDART_FIELD_LAST_USER_ID = '����. ID ������������';
const NETCAT_MODERATION_STANDART_FIELD_LAST_USER = '����. ������������';
const NETCAT_MODERATION_STANDART_FIELD_LAST_IP = '����. IP';
const NETCAT_MODERATION_STANDART_FIELD_LAST_USER_AGENT = '����. �������';

const NETCAT_MODERATION_VERSION = '��������';
const NETCAT_MODERATION_VERSION_NOT_FOUND = '�������� �����������';
const NETCAT_SAVE_DRAFT = '��������� ��������';

# MODULE
const NETCAT_MODULES = '������';
const NETCAT_MODULES_TUNING = '��������� ������';
const NETCAT_MODULES_PARAM = '��������';
const NETCAT_MODULES_VALUE = '��������';
const NETCAT_MODULES_ADDPARAM = '�������� ��������';
const NETCAT_MODULE_INSTALLCOMPLIED = '��������� ������ ���������.';
const NETCAT_MODULE_ALWAYS_LOAD = '��������� ������';
const NETCAT_MODULE_ONOFF = '���/����';
define("NETCAT_MODULE_MODULE_UNCHECKED", "������ ��������, ��� ��������� ����������. �������� ������ ����� � <a href='".$ADMIN_PATH."modules/index.php'>������ �������.</a>");

# MODULE DEFAULT
define("NETCAT_MODULE_DEFAULT_DESCRIPTION", "������ ������ ������������ ��� �������� ��������������� �������� � �������. �� ������ ���������� ����������� ������� � " . nc_module_path('default') . "function.inc.php � ��������� ����������� �������, ��������������� � �������� �� �������� � " . nc_module_path('default') . "index.php. �����, �� ������ �������� ���������� ��������� ������� ������ � ������������� ���� ����.<br><br>���������� �� �������� ����������� ������� �� ������� ����� � &quot;����������� ������������&quot; � ������� &quot;���������� �������&quot;.");

#CODE MIRROR
const NETCAT_SETTINGS_CODEMIRROR = '��������� ����������';
const NETCAT_SETTINGS_CODEMIRROR_EMBEDED = '��������';
const NETCAT_SETTINGS_CODEMIRROR_EMBEDED_ON = '��';
const NETCAT_SETTINGS_CODEMIRROR_DEFAULT = '��������� �� ���������';
const NETCAT_SETTINGS_CODEMIRROR_DEFAULT_ON = '��';
const NETCAT_SETTINGS_CODEMIRROR_AUTOCOMPLETE = '��������������';
const NETCAT_SETTINGS_CODEMIRROR_AUTOCOMPLETE_ON = '��';
const NETCAT_SETTINGS_CODEMIRROR_HELP = '���� ���������';
const NETCAT_SETTINGS_CODEMIRROR_HELP_ON = '��';
const NETCAT_SETTINGS_CODEMIRROR_ENABLE = '�������� ��������';
const NETCAT_SETTINGS_CODEMIRROR_SWITCH = '����������� ��������';
const NETCAT_SETTINGS_CODEMIRROR_WRAP = '���������� ������';
const NETCAT_SETTINGS_CODEMIRROR_FULLSCREEN = '�� ���� �����';

const NETCAT_SETTINGS_DRAG = '�������������� �������� (��������, ����������, ��������, ����������� � �. �.)';
const NETCAT_SETTINGS_DRAG_SILENT = '���������� ��� �������������';
const NETCAT_SETTINGS_DRAG_CONFIRM = '���������� ������������� ����� ���������';
const NETCAT_SETTINGS_DRAG_DISABLED = '��������� ��������������';

# EDITOR
const NETCAT_SETTINGS_EDITOR = '������� ��������������';
const NETCAT_SETTINGS_EDITOR_TYPE = '��� HTML-���������';
const NETCAT_SETTINGS_EDITOR_FCKEDITOR = 'FCKeditor';
const NETCAT_SETTINGS_EDITOR_CKEDITOR = 'CKEditor';
const NETCAT_SETTINGS_EDITOR_TINYMCE = 'TinyMCE';
const NETCAT_SETTINGS_EDITOR_CKEDITOR_FILE_SYSTEM = '��������� ������������ ����� �� ������ ������ ������������� (CKEditor)';
const NETCAT_SETTINGS_EDITOR_CKEDITOR_CYRILIC_FOLDER = '��������� ������� ��������� � ������ ����� ��������� ��������� (CKEditor)';
const NETCAT_SETTINGS_EDITOR_CKEDITOR_CONTENT_FILTER = '�������� <a href="http://docs.ckeditor.com/#!/guide/dev_advanced_content_filter" target="_blank">���������� ��������</a> (CKEditor)';
const NETCAT_SETTINGS_EDITOR_EMBED_ON = '��';
const NETCAT_SETTINGS_EDITOR_EMBED_TO_FIELD = '�������� �������� � ���� ��� ��������������';
const NETCAT_SETTINGS_EDITOR_SEND = '���������';
const NETCAT_SETTINGS_EDITOR_STYLES_SAVE = '��������� ���������';
const NETCAT_SETTINGS_EDITOR_STYLES = '����� ������ ��� FCKeditor';
const NETCAT_SETTINGS_EDITOR_SKINS = '����������';
const NETCAT_SETTINGS_EDITOR_ENTER_MODE = '����� ������� Enter';
const NETCAT_SETTINGS_EDITOR_ENTER_MODE_P = '��� P';
const NETCAT_SETTINGS_EDITOR_ENTER_MODE_BR = '��� BR';
const NETCAT_SETTINGS_EDITOR_ENTER_MODE_DIV = '��� DIV';
const NETCAT_SETTINGS_EDITOR_SAVE = '��������� ������� ��������';
const NETCAT_SETTINGS_EDITOR_KEYCODE = '���������� ������ �� Ctrl + %s, ��������� ���������� �������� Ctrl + F5';

const NETCAT_SEARCH_FIND_IT = '������';
const NETCAT_SEARCH_ERROR = '���������� ����� �� ������� ����������.';

# JS settings
const NETCAT_SETTINGS_JS = '�������� �������� ��������';
const NETCAT_SETTINGS_JS_FUNC_NC_JS = '������� nc_js()';
const NETCAT_SETTINGS_JS_LOAD_JQUERY_DOLLAR = '��������� jQuery ������ $';
const NETCAT_SETTINGS_JS_LOAD_JQUERY_EXTENSIONS_ALWAYS = '������ ��������� ���������� jQuery';
const NETCAT_SETTINGS_JS_LOAD_MODULES_SCRIPTS = '��������� ��������� �������';
const NETCAT_SETTINGS_MINIFY_STATIC_FILES = '�������������� CSS � JS ����� � �����-������';

const NETCAT_SETTINGS_TRASHBIN = '������� ��������� ��������';
const NETCAT_SETTINGS_TRASHBIN_USE = '������������ �������';

const NETCAT_SETTINGS_EXPORT = '�������/������ ������';
const NETCAT_SETTINGS_EXPORT_USE = '������������ ������ �������� ������ ��������';

#Components
const NETCAT_SETTINGS_COMPONENTS = '����������';
const NETCAT_SETTINGS_REMIND_SAVE = '���������� � ���������� (��������� ���������� �������� Ctrl + F5)';
const NETCAT_SETTINGS_PACKET_OPERATIONS = '�������� ��������� �������� ��� ���������';
const NETCAT_SETTINGS_TEXTAREA_RESIZE = '�������� ����������� �������� ������ ���������� ���� ��� �������������� ����������';

const NETCAT_SETTINGS_QUICKBAR = '������ �������� ��������������';
const NETCAT_SETTINGS_QUICKBAR_ENABLE = '�������� �������������� � �������';
const NETCAT_SETTINGS_QUICKBAR_ON = '��';

# ALT ADMIN BLOCKS
const NETCAT_SETTINGS_ALTBLOCKS = '�������������� ����� �����������������';
const NETCAT_SETTINGS_ALTBLOCKS_ON = '��';
const NETCAT_SETTINGS_ALTBLOCKS_TEXT = '������������ �������������� ����� �����������������';
const NETCAT_SETTINGS_ALTBLOCKS_PARAMS = '�������������� ��������� ��� �������� (������� � &)';

const NETCAT_SETTINGS_HTTP_PROXY = '������������ HTTP-������-������ ��� ������� � ������� ����������';
const NETCAT_SETTINGS_HTTP_PROXY_HOST = 'IP-����� ������-�������';
const NETCAT_SETTINGS_HTTP_PROXY_PORT = '����';
const NETCAT_SETTINGS_HTTP_PROXY_USER = '������������';
const NETCAT_SETTINGS_HTTP_PROXY_PASSWORD = '������';

const NETCAT_SETTINGS_USETOKEN = '������������� ����� ������������� ��������';
const NETCAT_SETTINGS_USETOKEN_ADD = '��� ����������';
const NETCAT_SETTINGS_USETOKEN_EDIT = '��� ���������';
const NETCAT_SETTINGS_USETOKEN_DROP = '��� ��������';
const NETCAT_SETTINGS_OBJECTS_FULLINK = '������ ����������� ��������';
const CONTROL_SETTINGSFILE_BASIC_VERSION = '������ �������';
const CONTROL_SETTINGSFILE_CHANGE_EMAILS_FIELD = '���� (� �������� email) � ������� �������������';
const CONTROL_SETTINGSFILE_CHANGE_EMAILS_NONE = '���� �����������';
const NETCAT_SETTINGS_CODEMIRROR_EMBEDED_OFF = '���';
const NETCAT_SETTINGS_CODEMIRROR_DEFAULT_OFF = '���';
const NETCAT_SETTINGS_CODEMIRROR_AUTOCOMPLETE_OFF = '���';
const NETCAT_SETTINGS_CODEMIRROR_HELP_OFF = '���';
const NETCAT_SETTINGS_INLINE_EDIT_CONFIRMATION = '���������� ������������� ���������� inline-���������';
const NETCAT_SETTINGS_INLINE_EDIT_CONFIRMATION_ON = '������������� ���������� inline-��������� ��������';
const NETCAT_SETTINGS_INLINE_EDIT_CONFIRMATION_OFF = '������������� ���������� inline-��������� ���������';
const NETCAT_SETTINGS_EDITOR_EMBEDED = '�������� ������� � ���� ��� ��������������';
const NETCAT_SETTINGS_EDITOR_EMBED_OFF = '���';
const NETCAT_SETTINGS_EDITOR_STYLES_CANCEL = '������';
const NETCAT_SETTINGS_TRASHBIN_MAXSIZE = '������������ ������ �������';
const NETCAT_SETTINGS_REMIND_SAVE_INFO = '���������� � ������������� ����������';
const NETCAT_SETTINGS_PACKET_OPERATIONS_INFO = '�������� ��������� �������� ��� ���������';
const NETCAT_SETTINGS_TEXTAREA_RESIZE_INFO = '�������� ����������� �������� ������ ���������� ���� ��� �������������� ����������';
const NETCAT_SETTINGS_DISABLE_BLOCK_MARKUP_INFO = '��������� <a href="https://netcat.ru/developers/docs/components/stylesheets/" target="_blank">�������������� ��������</a> ��� ����������� �����������';
const CONTROL_CLASS_IS_MULTIPURPOSE_SWITCH = '������������ ������';
const CONTROL_CLASS_COMPATIBLE_FIELDS = '������ ������������ ����� � ����������� ����������� (�� ������ �� �������)';
const NETCAT_SETTINGS_QUICKBAR_OFF = '���';
const NETCAT_SETTINGS_ALTBLOCKS_OFF = '���';

# Export / Import
const NETCAT_IMPORT_FIELD = 'XML-���� �������';

const NETCAT_FILEUPLOAD_ERROR = '������! � ��� ��� ���� �� ���������� %s �� ���� �������.';


const NETCAT_HTTP_REQUEST_SAVING = '����������...';
const NETCAT_HTTP_REQUEST_SAVED = '��������� ���������';
const NETCAT_HTTP_REQUEST_ERROR = '������ ��� ����������';
const NETCAT_HTTP_REQUEST_HINT = '�� ������ ��������� ��� �����, ����� Ctrl + %s';

# Index page menu
const SECTION_INDEX_MENU_TITLE = '������� ����';
const SECTION_INDEX_MENU_HOME = '�������';
const SECTION_INDEX_MENU_SITE = '����';
const SECTION_INDEX_MENU_DEVELOPMENT = '����������';
const SECTION_INDEX_MENU_TOOLS = '�����������';
const SECTION_INDEX_MENU_SETTINGS = '���������';
const SECTION_INDEX_MENU_HELP = '�������';

define("SECTION_INDEX_HELP_SUBMENU_HELP", "������� " . CMS_SYSTEM_NAME);
const SECTION_INDEX_HELP_SUBMENU_DOC = '������������';
const SECTION_INDEX_HELP_SUBMENU_HELPDESC = '������-���������';
const SECTION_INDEX_HELP_SUBMENU_FORUM = '�����';
const SECTION_INDEX_HELP_SUBMENU_BASE = '���� ������';
const SECTION_INDEX_HELP_SUBMENU_ABOUT = '� ���������';

const SECTION_INDEX_SITE_LIST = '������ ������';

const SECTION_INDEX_WIZARD_SUBMENU_CLASS = '������ �������� ����������';
const SECTION_INDEX_WIZARD_SUBMENU_SITE = '������ �������� �����';

const SECTION_INDEX_FAVORITE_ANOTHER_SUB = '������ ������...';
const SECTION_INDEX_FAVORITE_ADD = '�������� � ��� ����';
const SECTION_INDEX_FAVORITE_LIST = '������������� ��� ����';
const SECTION_INDEX_FAVORITE_SETTINGS = '���������';

const SECTION_INDEX_WELCOME = '����� ����������';
const SECTION_INDEX_WELCOME_MESSAGE = '������������, %s!<br />�� ���������� � ������� ���������� �������� �%s�.<br />��� ��������� �����: %s.';
define("SECTION_INDEX_TITLE", "������� ���������� " . CMS_SYSTEM_NAME);

# SITE
## TABS
const SITE_TAB_SITEMAP = '����� �����';
const SITE_TAB_SETTINGS = '���������';
const SITE_TAB_DEMO_CONTENT = '����-�������';
const SITE_TAB_STATS = '����������';
const SITE_TAB_AREA_INFOBLOCKS = '�������� ���������';
## TOOLBAR
const SITE_TOOLBAR_INFO = '����� ����������';
const SITE_TOOLBAR_SUBLIST = '������ ��������';


#SUBDIVISION
## TABS
## TOOLBAR
const SUBDIVISION_TAB_INFO_TOOLBAR_INFO = '���������� � �������';
const SUBDIVISION_TAB_INFO_TOOLBAR_SUBLIST = '������ ��������';
const SUBDIVISION_TAB_INFO_TOOLBAR_CCLIST = '������ ����������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST = '������������';
const SUBDIVISION_TAB_INFO_TOOLBAR_EDIT_EDIT = '��������';
const SUBDIVISION_TAB_INFO_TOOLBAR_EDIT_DESIGN = '����������';
const SUBDIVISION_TAB_INFO_TOOLBAR_EDIT_SEO = 'SEO/SMO';
const SUBDIVISION_TAB_INFO_TOOLBAR_EDIT_SYSTEM = '���������';
const SUBDIVISION_TAB_INFO_TOOLBAR_EDIT_FIELDS = '�������������� ���������';


## BUTTONS
const SUBDIVISION_TAB_PREVIEW_BUTTON_PREVIEW = '�������� � ����� ����';

const SITE_SITEMAP_SEARCH = '����� �� ����� �����';
const SITE_SITEMAP_SEARCH_NOT_FOUND = '�� �������';

## TEXT
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_READ_ACCESS = '������ �� ������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_COMMENT_ACCESS = '������ �� ���������������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_WRITE_ACCESS = '������ �� ������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_EDIT_ACCESS = '������ �� ��������������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_SUBSCRIBE_ACCESS = '������ � ��������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_MODERATORS = '����������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_ADMINS = '��������������';

const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_ALL_USERS = '��� ������������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_REGISTERED_USERS = '������������������ ������������';
const SUBDIVISION_TAB_INFO_TOOLBAR_USERLIST_TEXT_PRIVILEGED_USERS = '����������������� ������������';

# CLASS WIZARD

const WIZARD_CLASS_FORM_SUBDIVISION_PARENTSUB = '������������ ������';

const WIZARD_PARENTSUB_SELECT_POPUP_TITLE = '����� ������������� �������';

const WIZARD_CLASS_FORM_SUBDIVISION_SELECT_PARENTSUB = '������� ������������ ������';
const WIZARD_CLASS_FORM_SUBDIVISION_SELECT_SUBDIVISION = '������� ������';
const WIZARD_CLASS_FORM_SUBDIVISION_DELETE = '�������';

const WIZARD_CLASS_FORM_START_TEMPLATE_TYPE = '��� �������';
const WIZARD_CLASS_FORM_START_TEMPLATE_TYPE_SINGLE = '������������ ������ �� ��������';
const WIZARD_CLASS_FORM_START_TEMPLATE_TYPE_LIST = '������ ��������';
const WIZARD_CLASS_FORM_START_TEMPLATE_TYPE_SEARCH = '����� �� ������ ��������';
const WIZARD_CLASS_FORM_START_TEMPLATE_TYPE_FORM = '���-�����';

const WIZARD_CLASS_FORM_SETTINGS_NO_SETTINGS = '��� ������� ���� ������� �������� �� ��������������.';
const WIZARD_CLASS_FORM_SETTINGS_FIELDS_FOR_OBJECT_LIST = '���� ��� ������ ��������';
const WIZARD_CLASS_FORM_SETTINGS_SORT_OBJECT_BY_FIELD = '����������� ������� �� ����';
const WIZARD_CLASS_FORM_SETTINGS_SORT_ASC = '�� �����������';
const WIZARD_CLASS_FORM_SETTINGS_SORT_DESC = '�� ��������';
const WIZARD_CLASS_FORM_SETTINGS_PAGE_NAVIGATION = '��������� �� ���������';
const WIZARD_CLASS_FORM_SETTINGS_PAGE_NAVIGATION_BY_NEXT_PREV = '������� �� ������ �������� ������ ����������-����������';
const WIZARD_CLASS_FORM_SETTINGS_PAGE_NAVIGATION_BY_PAGE_NUMBER = '�� ������� �������';
const WIZARD_CLASS_FORM_SETTINGS_PAGE_NAVIGATION_BY_BOTH = '��� ��������';
const WIZARD_CLASS_FORM_SETTINGS_LOCATION_OF_NAVIGATION = '��������� ������ ���������';
const WIZARD_CLASS_FORM_SETTINGS_LOCATION_TOP = '������ ��������';
const WIZARD_CLASS_FORM_SETTINGS_LOCATION_BOTTOM = '����� ��������';
const WIZARD_CLASS_FORM_SETTINGS_LOCATION_BOTH = '��� ��������';
const WIZARD_CLASS_FORM_SETTINGS_LIST_TYPE = '������';
const WIZARD_CLASS_FORM_SETTINGS_TABLE_TYPE = '�������';
const WIZARD_CLASS_FORM_SETTINGS_LIST_DELIMITER_TYPE = '��� �����������';
const WIZARD_CLASS_FORM_SETTINGS_TABLE_TYPE_SETTINGS = '��������� ���� �������';
const WIZARD_CLASS_FORM_SETTINGS_TABLE_BACKGROUND = '���������� ���';
const WIZARD_CLASS_FORM_SETTINGS_TABLE_BORDER = '������� �������';
const WIZARD_CLASS_FORM_SETTINGS_FULL_PAGE = '�������� � ��������� �����������';
const WIZARD_CLASS_FORM_SETTINGS_FULL_PAGE_LINK_TYPE = '������ �������� �� �������� ����������� �������';
const WIZARD_CLASS_FORM_SETTINGS_CHECK_FIELDS_TO_FULL_PAGE = '�������� ���� ��� ������� �� ������� ����� ������������� ������� �� �������� ����������� �������';

const WIZARD_CLASS_FORM_SETTINGS_FIELDS_FOR_OBJECT_SEARCH = '����, �� ������� ����� ������������� �����';

const WIZARD_CLASS_FORM_SETTINGS_FEEDBACK_FIELDS_SETTINGS = '��������� ����� �������� �����';
const WIZARD_CLASS_FORM_SETTINGS_FEEDBACK_SENDER_NAME = '��� �����������';
const WIZARD_CLASS_FORM_SETTINGS_FEEDBACK_SENDER_MAIL = 'Email �����������';
const WIZARD_CLASS_FORM_SETTINGS_FEEDBACK_SUBJECT = '���� ������';

## TABS
const WIZARD_CLASS_TAB_SELECT_TEMPLATE_TYPE = '����� ���� �������';
const WIZARD_CLASS_TAB_ADDING_TEMPLATE_FIELDS = '���������� ����� �������';
const WIZARD_CLASS_TAB_TEMPLATE_SETTINGS = '��������� �������';
const WIZARD_CLASS_TAB_SUBSEQUENT_ACTION = '���������� ��������';
const WIZARD_CLASS_TAB_CREATION_SUBDIVISION_WITH_NEW_TEMPLATE = '�������� ������� � ����� ��������';
const WIZARD_CLASS_TAB_ADDING_TEMPLATE_TO_EXISTENT_SUBDIVISION = '���������� ������� � ������������� �������';

## BUTTONS
const WIZARD_CLASS_BUTTON_NEXT_TO_ADDING_FIELDS = '������� � ���������� �����';
const WIZARD_CLASS_BUTTON_FINISH_ADDING_FIELDS = '��������� ���������� �����';
const WIZARD_CLASS_BUTTON_SAVE_SETTINGS = '��������� ���������';
const WIZARD_CLASS_BUTTON_ADDING_SUBDIVISION_WITH_NEW_TEMPLATE = '�������� ������ � ����� �����������';
const WIZARD_CLASS_BUTTON_CREATE_SUBDIVISION_WITH_NEW_TEMPLATE = '������� ������ � ����� �����������';
const WIZARD_CLASS_BUTTON_NEXT_TO_SUBDIVISION_SELECTION = '������� � ������ �������';

## LINKS
const WIZARD_CLASS_LINKS_VIEW_TEMPLATE_CODE = '���������� ����������� ��� �������';
const WIZARD_CLASS_LINKS_CREATE_SUBDIVISION_WITH_NEW_TEMPLATE = '������� ������ � ���� ��������';
const WIZARD_CLASS_LINKS_ADD_TEMPLATE_TO_EXISTENT_SUBDIVISION = '���������� ������ � ������������� �������';
const WIZARD_CLASS_LINKS_CREATE_NEW_TEMPLATE = '������� ����� ������';

const WIZARD_CLASS_LINKS_RETURN_TO_FIELDS_ADDING = '��������� � ���������� �����';

## COMMON
const WIZARD_CLASS_STEP = '���';
const WIZARD_CLASS_STEP_FROM = '��';

const WIZARD_CLASS_DEFAULT = '�� ���������';

const WIZARD_CLASS_ERROR_NO_FIELDS = '� ������ ���������� �������� ���� �� ���� ����!';

# SITE WIZARD
const WIZARD_SITE_FORM_WHICH_MODULES = '����� ������ �� ������ ������������� �� �����?';

## TABS
const WIZARD_SITE_TAB_NEW_SITE_CREATION = '�������� ������ �����';
const WIZARD_SITE_TAB_NEW_SITE_ADD_SUB = '���������� �������� �����';

## BUTTONS
const WIZARD_SITE_BUTTON_ADD_SUBS = '�������� ����������';
const WIZARD_SITE_BUTTON_FINISH_ADD_SUBS = '���������';

## COMMON
const WIZARD_SITE_STEP = '���';
const WIZARD_SITE_STEP_FROM = '��';
const WIZARD_SITE_STEP_TWO_DESCRIPTION = '�������� ��������� ��������. ������ ���� ������ ����� ��������� �������� � �������� 404. ������ �������� ��� ���� ��� ���������.';

#DEMO MODE
const DEMO_MODE_ADMIN_INDEX_MESSAGE = "���� �%s� �������� � ����-������, �� ������ ��������� ��� � <a href='%s'>��������� ���������� �����</a>.";
const DEMO_MODE_FRONT_INDEX_MESSAGE_GUEST = '��� �� ��������� ����, �� ������������ ������ ��� ������������.';
const DEMO_MODE_FRONT_INDEX_MESSAGE_ADMIN = "���� � ����-������, ����� ��� ����� <a href='%s'>� ����������</a>.";
const DEMO_MODE_FRONT_INDEX_MESSAGE_CLOSE = '�������';

# FAVORITE
## HEADER TEXT
const FAVORITE_HEADERTEXT = '��������� �������';


# CRONTAB
##TABS
const CRONTAB_TAB_LIST = '������ �����';
const CRONTAB_TAB_ADD = '���������� ������';
const CRONTAB_TAB_EDIT = '�������������� ������';

##TRASH
const TRASH_TAB_LIST = '������� ��������� ��������';
const TRASH_TAB_TITLE = '������ ��������� ��������';
const TRASH_TAB_SETTINGS = '���������';

# REDIRECT
##TABS
const REDIRECT_TAB_LIST = '������ �������������';
const REDIRECT_TAB_ADD = '���������� �������������';
const REDIRECT_TAB_EDIT = '�������������� �������������';


# SYSTEM SETTINGS
##TABS
const SYSTEMSETTINGS_TAB_LIST = '������� ��������� �������';
const SYSTEMSETTINGS_TAB_ADD = '�������������� ������� ��������';
const SYSTEMSETTINGS_SAVE_OK = '��������� ������� ���������';
const SYSTEMSETTINGS_SAVE_ERROR = '������ ���������� �������� �������';

# WYSIWYG SETTINGS
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TAB_SETTINGS = '���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TAB_PANELS = '������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TITLE_SETTINGS = '��������� WYSIWYG';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TITLE_PANELS = '������ ��������� WYSIWYG';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TITLE_DELETE_CONFIRMATION = '������������� �������� ������� WYSIWYG ���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TITLE_EDIT_FORM = ' - �������������� ������ WYSIWYG';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_TITLE_ADD_FORM = '���������� ������ WYSIWYG';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANEL_NOT_EXISTS = '����� ������ �� ����������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_NO_PANELS = '��� �� ����� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANEL_EDIT_SUCCESSFUL = '������ ������� ��������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANEL_ADD_SUCCESSFUL = '������ ������� ���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANELS_NOT_SELECTED = '�� ������� �� ����� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANELS_DELETED = '������ ������� �������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_PANELS_DELETE_ERROR = '������ ��� �������� �������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_FILL_PANEL_NAME = '������� ��� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_MESSAGE_SELECT_TOOLBAR = '�������� ���� �� ���� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_BUTTON_DELETE_SELECTED = '������� ���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_BUTTON_CONFIRM_DELETE = '����������� ��������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_BUTTON_CANCEL = '������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_BUTTON_EDIT_PANEL = '�������� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_BUTTON_ADD_PANEL = '�������� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_PANEL_NAME = '�������� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_DELETE = '�������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_ARE_YOU_REALLY_WANT_TO_DELETE_PANELS = '�� ������������� ������� ������� ������?';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_EDITOR_PANEL_FULL = '������ ������� ��������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_EDITOR_PANEL_INLINE = '������ inline ��������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_PANEL_NAME = '�������� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_PANEL_PREVIEW = '������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_SETTINGS = '��������� ������ ������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_MODE = '������������ ���� ���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_DOCUMENT = '�������� � ����������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_TOOLS = '�����������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_DOCTOOLS = '�������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_CLIPBOARD = '����� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_UNDO = '������ ��������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_FIND = '����� � ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_SELECTION = '���������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_SPELLCHECKER = '�������� ����������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_FORMS = '�����';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_BASICSTYLES = '������� �����';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_CLEANUP = '������� ��������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_LIST = '������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_INDENT = '�������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_BLOCKS = '����� ������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_ALIGN = '������������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_LINKS = '������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_INSERT = '������� ��������';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_STYLES = '�����';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_COLORS = '�����';
const NETCAT_WYSIWYG_CKEDITOR_SETTINGS_FIELD_TOOLBARS_NAME_OTHERS = '������ �����������';

const NETCAT_WYSIWYG_FCKEDITOR_SETTINGS_TITLE_SETTINGS = '��������� WYSIWYG';

const NETCAT_WYSIWYG_SETTINGS_PANEL_SETTINGS = '��������� �������';
const NETCAT_WYSIWYG_SETTINGS_THIS_EDITOR_IS_USED_BY_DEFAULT = '���� �������� ������������ �� ���������';
const NETCAT_WYSIWYG_SETTINGS_USE_BY_DEFAULT = '������������ ���� �������� �� ���������';
const NETCAT_WYSIWYG_SETTINGS_BASIC_SETTINGS = '�������� ���������';
const NETCAT_WYSIWYG_SETTINGS_MESSAGE_EDITOR_ACTIVATED = '�������� ������� �����������';
const NETCAT_WYSIWYG_SETTINGS_PANEL_NOT_SELECTED = '�� �������';
const NETCAT_WYSIWYG_SETTINGS_BUTTON_SAVE = '���������';
const NETCAT_WYSIWYG_SETTINGS_MESSAGE_SETTINGS_SAVED = '��������� WYSIWYG ���������';
const NETCAT_WYSIWYG_SETTINGS_MESSAGE_SETTINGS_SAVE_ERROR = '��������� ������ ��� ���������� WYSIWYG ��������';
const NETCAT_WYSIWYG_SETTINGS_CONFIG_JS_SETTINGS = '��������� config.js';
const NETCAT_WYSIWYG_SETTINGS_CONFIG_JS_FILE = '���� config.js';

const NETCAT_WYSIWYG_EDITOR_OUTWORN = '���� �������� �������, ����������� ������������ �� ������ �������� � ������� ���������� %s � �������';

# Not Elsewhere Specified
const NOT_ELSEWHERE_SPECIFIED = '�� ���������';
const NOT_ADD_CLASS = '�� ��������� �������� � ������';

# BBcodes
const NETCAT_BBCODE_SIZE = '������ ������';
const NETCAT_BBCODE_COLOR = '���� ������';
const NETCAT_BBCODE_SMILE = '������';
const NETCAT_BBCODE_B = '������';
const NETCAT_BBCODE_I = '������';
const NETCAT_BBCODE_U = '������������';
const NETCAT_BBCODE_S = '�����������';
const NETCAT_BBCODE_LIST = '������� ������';
const NETCAT_BBCODE_QUOTE = '������';
const NETCAT_BBCODE_CODE = '���';
const NETCAT_BBCODE_IMG = '�����������';
const NETCAT_BBCODE_URL = '������';
const NETCAT_BBCODE_CUT = '��������� �����';

const NETCAT_BBCODE_QUOTE_USER = '�����(�)';
const NETCAT_BBCODE_CUT_MORE = '���������';
const NETCAT_BBCODE_SIZE_DEF = '������';
const NETCAT_BBCODE_ERROR_1 = '����� BB-��� ������������� �������:';
const NETCAT_BBCODE_ERROR_2 = '������� BB-���� ������������� �������:';

# Help messages for BBcode
const NETCAT_BBCODE_HELP_SIZE = '������ ������: [SIZE=8]��������� �����[/SIZE]';
const NETCAT_BBCODE_HELP_COLOR = '���� ������: [COLOR=FF0000]�����[/COLOR]';
const NETCAT_BBCODE_HELP_SMILE = '�������� �������';
const NETCAT_BBCODE_HELP_B = '������ �����: [B]�����[/B]';
const NETCAT_BBCODE_HELP_I = '��������� �����: [I]�����[/I]';
const NETCAT_BBCODE_HELP_U = '������������ �����: [U]�����[/U]';
const NETCAT_BBCODE_HELP_S = '����������� �����: [S]�����[/S]';
const NETCAT_BBCODE_HELP_LIST = '������� ������: [LIST]�����[/LIST]';
const NETCAT_BBCODE_HELP_QUOTE = '������: [QUOTE]�����[/QUOTE]';
const NETCAT_BBCODE_HELP_CODE = '���: [CODE]���[/CODE]';
const NETCAT_BBCODE_HELP_IMG = '�������� ��������';
const NETCAT_BBCODE_HELP_IMG_URL = '����� ��������';
const NETCAT_BBCODE_HELP_URL = '�������� ������';
const NETCAT_BBCODE_HELP_URL_URL = '������';
const NETCAT_BBCODE_HELP_URL_DESC = '��������';
const NETCAT_BBCODE_HELP_CUT = '��������� ����� � ��������: [CUT=���������]�����[/CUT]';
const NETCAT_BBCODE_HELP = '���������: ���� ����������� ������ �������� ��������������';

# Smiles
const NETCAT_SMILE_SMILE = '������';
const NETCAT_SMILE_BIGSMILE = '������� ������';
const NETCAT_SMILE_GRIN = '�������';
const NETCAT_SMILE_LAUGH = '����';
const NETCAT_SMILE_PROUD = '������';
#
const NETCAT_SMILE_YES = '��';
const NETCAT_SMILE_WINK = '�����������';
const NETCAT_SMILE_COOL = '�����';
const NETCAT_SMILE_ROLLEYES = '��������';
const NETCAT_SMILE_LOOKDOWN = '������';
#
const NETCAT_SMILE_SAD = '��������';
const NETCAT_SMILE_SUSPICIOUS = '��������������';
const NETCAT_SMILE_ANGRY = '��������';
const NETCAT_SMILE_SHAKEFIST = '��������';
const NETCAT_SMILE_STERN = '�������';
#
const NETCAT_SMILE_KISS = '�������';
const NETCAT_SMILE_THINK = '������';
const NETCAT_SMILE_THUMBSUP = '�����';
const NETCAT_SMILE_SICK = '������';
const NETCAT_SMILE_NO = '���';
#
const NETCAT_SMILE_CANTLOOK = '�� ���� ��������';
const NETCAT_SMILE_DOH = '���';
const NETCAT_SMILE_KNOCKEDOUT = '� ����';
const NETCAT_SMILE_EYEUP = '����';
const NETCAT_SMILE_QUIET = '����';
#
const NETCAT_SMILE_EVIL = '����';
const NETCAT_SMILE_UPSET = '�������';
const NETCAT_SMILE_UNDECIDED = '�����������';
const NETCAT_SMILE_CRY = '������';
const NETCAT_SMILE_UNSURE = '�� ������';

# nc_bytes2size
const NETCAT_SIZE_BYTES = ' ����';
const NETCAT_SIZE_KBYTES = ' ��';
const NETCAT_SIZE_MBYTES = ' ��';
const NETCAT_SIZE_GBYTES = ' ��';

// quickBar
const NETCAT_QUICKBAR_BUTTON_VIEWMODE = '��������';
const NETCAT_QUICKBAR_BUTTON_EDITMODE = '��������������';
const NETCAT_QUICKBAR_BUTTON_EDITMODE_UNAVAILABLE_FOR_LONGPAGE = '�������������� ���������� � ������ longpage';
const NETCAT_QUICKBAR_BUTTON_MORE = '���';
const NETCAT_QUICKBAR_BUTTON_ADDITIONALLY = '�����������������';
const NETCAT_QUICKBAR_BUTTON_SUBDIVISION_SETTINGS = '��������� ��������';
const NETCAT_QUICKBAR_BUTTON_SUBDIVISION_VERSIONS = '������ ��������';
const NETCAT_QUICKBAR_BUTTON_TEMPLATE_SETTINGS = '����� �������';
const NETCAT_QUICKBAR_BUTTON_ADMIN = '�����������������';
const NETCAT_QUICKBAR_BUTTON_CONTROL_PANEL = '������ ����������';

#SYNTAX EDITOR
const NETCAT_SETTINGS_SYNTAXEDITOR = '��-���� ��������� ����������';
const NETCAT_SETTINGS_SYNTAXEDITOR_ENABLE = '�������� ������������� ��������� ���������� � ������� (��������� ������������ ������� Ctrl+F5)';

#SYNTAX CHECK

# LICENSE
const NETCAT_SETTINGS_LICENSE = '��������';
const NETCAT_SETTINGS_LICENSE_PRODUCT = '��� ��������';
const NETCAT_SETTINGS_LICENSE_CODE = '��� ���������';

# NETCAT_DEBUG
const NETCAT_DEBUG_ERROR_INSTRING = '������ � ������ : ';
const NETCAT_DEBUG_BUTTON_CAPTION = '�������';

# NETCAT_PREVIEW
const NETCAT_PREVIEW_BUTTON_CAPTIONCLASS = '������������ ����������';
const NETCAT_PREVIEW_BUTTON_CAPTIONTEMPLATE = '������������ ������';

const NETCAT_PREVIEW_BUTTON_CAPTIONADDFORM = '������������ ����� ����������';
const NETCAT_PREVIEW_BUTTON_CAPTIONEDITFORM = '������������ ����� ��������������';
const NETCAT_PREVIEW_BUTTON_CAPTIONSEARCHFORM = '������������ ����� ������';

const NETCAT_PREVIEW_ERROR_NODATA = '������! �� �������� ������ ��� ������ ������������� ��� ������ ��������';
const NETCAT_PREVIEW_ERROR_WRONGDATA = '������ � ������ ��� ������ �������������';
const NETCAT_PREVIEW_ERROR_NOSUB = ' ��� �� ������ ������� � ����� �����������. �������� ���� ��������� � ������ � ����� ������������� ������ ��������.';
const NETCAT_PREVIEW_ERROR_NOMESSAGE = ' ��� �� ������ ������� ������ ����������. �������� ���� �� ���� ������ ������ ���������� � ����� ������������� ������ ��������.';
const NETCAT_PREVIEW_INFO_MORESUB = ' ���� ��������� �������� � ����� �����������. �������� ������ ��� �������������.';
const NETCAT_PREVIEW_INFO_CHOOSESUB = ' �������� ������ ��� ������������� ������.';

# objects
const NETCAT_FUNCTION_OBJECTS_LIST_SQL_ERROR_SUPERVISOR = "������ SQL ������� � ������� nc_objects_list(%s, %s, \"%s\"), %s";
const NETCAT_FUNCTION_OBJECTS_LIST_SQL_ERROR_USER = '������ � ������� ������ ��������.';
const NETCAT_FUNCTION_OBJECTS_LIST_CLASSIFICATOR_ERROR = '������ �%s� �� ������';
const NETCAT_FUNCTION_OBJECTS_LIST_SQL_COLUMN_ERROR_UNKNOWN = '���� �%s� �� �������';
const NETCAT_FUNCTION_OBJECTS_LIST_SQL_COLUMN_ERROR_CLAUSE = '���� �%s� �� ������� � �������';
const NETCAT_FUNCTION_OBJECTS_LIST_CC_ERROR = '��������� �������� $cc � ������� nc_objects_list(XX, %s, "...")';
const NETCAT_FUNCTION_LISTCLASSVARS_ERROR_SUPERVISOR = '��������� �������� $cc � ������� ListClassVars(%s)';
const NETCAT_FUNCTION_FULL_SQL_ERROR_USER = '������ � ������� ������� ����������� �������.';

# events





// widgets events

const NETCAT_TOKEN_INVALID = '�������� ���� �������������';

// ��������� � ���������� �����
const NETCAT_HINT_COMPONENT_FIELD = '���� ����������';
const NETCAT_HINT_COMPONENT_SIZE = '������';
const NETCAT_HINT_COMPONENT_TYPE = '���';
const NETCAT_HINT_COMPONENT_ID = '�����';
const NETCAT_HINT_COMPONENT_DAY = '�������� �������� ���';
const NETCAT_HINT_COMPONENT_MONTH = '�������� �������� ������';
const NETCAT_HINT_COMPONENT_YEAR = '�������� �������� ����';
const NETCAT_HINT_COMPONENT_HOUR = '�������� �������� ����';
const NETCAT_HINT_COMPONENT_MINUTE = '�������� �������� ������';
const NETCAT_HINT_COMPONENT_SECONDS = '�������� �������� �������';
const NETCAT_HINT_OBJECT_PARAMS = '����������, ���������� �������� �������� �������';
const NETCAT_HINT_CREATED_DESC = '���������  ������� ���������� ������� � ������� �����-��-�� ��:��:��';
const NETCAT_HINT_LASTUPDATED_DESC = '��������� ������� ���������� ��������� ������� � ������� ���������������';
const NETCAT_HINT_MESSAGE_ID = '����� (ID) �������';
const NETCAT_HINT_USER_ID = '����� (ID) ������������, ����������� ������';
const NETCAT_HINT_CHECKED = '������� ��� �������� ������ (0/1)';
const NETCAT_HINT_IP = 'IP-����� ������������, ����������� ������';
const NETCAT_HINT_USER_AGENT = '�������� ���������� $HTTP_USER_AGENT ��� ������������, ����������� ������';
const NETCAT_HINT_LAST_USER_ID = '����� (ID) ���������� ������������, ����������� ������';
const NETCAT_HINT_LAST_USER_IP = 'IP-����� ���������� ������������, ����������� ������';
const NETCAT_HINT_LAST_USER_AGENT = '�������� ���������� $HTTP_USER_AGENT ��� ���������� ������������, ����������� ������';
const NETCAT_HINT_ADMIN_BUTTONS = '� ������ ����������������� �������� ���� ��������� ���������� � ������ � ������ �� �������� ��� ������ ������ ����������, ���������, ���������/���������� (������ � ���� ������� � ������)';
const NETCAT_HINT_ADMIN_COMMONS = '� ������ ����������������� �������� ���� ��������� ���������� � ������� � ������ �� ���������� ������� � ������ ������ � ������ � �������� ���� �������� �� ����� �� ������� (������ � ���� ������� � ������)';
const NETCAT_HINT_FULL_LINK = '������ �� ����� ������� ������ ������ ������';
const NETCAT_HINT_FULL_DATE_LINK = '������ �� ����� ������� ������ � ��������� ���� � ���� �.../2002/02/02/message_2.html� (��������������� � ������ ���� � ������� ������� ���� ���� ����� � ������ � �������� �event�, ����� �������� ���������� ��������� �������� $fullLink)';
const NETCAT_HINT_EDIT_LINK = '������ �� �������������� �������';
const NETCAT_HINT_DELETE_LINK = '������ �� �������� �������';
const NETCAT_HINT_DROP_LINK = '������ �� �������� ������� ��� �������������';
const NETCAT_HINT_CHECKED_LINK = '������ �� ���������/���������� �������';
const NETCAT_HINT_PREV_LINK = '������ �� ���������� �������� � �������� ������� (���� ������� ��������� � ������ � ��� ������, �� ���������� ������)';
const NETCAT_HINT_NEXT_LINK = '������ �� ��������� �������� � �������� ������� (���� ������� ��������� � ������ � ��� �����, �� ���������� ������)';
const NETCAT_HINT_ROW_NUM = '����� ������ �� ������� � ������ �� ������� ��������';
const NETCAT_HINT_REC_NUM = '������������ ���������� �������, ��������� � ������';
const NETCAT_HINT_TOT_ROWS = '����� ���������� ������� � ������';
const NETCAT_HINT_BEG_ROW = '����� ������ (�� �������), � ������� ���������� ������� ������ �� ������ ��������';
const NETCAT_HINT_END_ROW = '����� ������ (�� �������), ������� ������������� ������� ������ �� ������ ��������';
const NETCAT_HINT_ADMIN_MODE = '�������, ���� ������������ ��������� � ������ �����������������';
const NETCAT_HINT_SUB_HOST = '����� �������� ������ ���� �www.example.com�';
const NETCAT_HINT_SUB_LINK = '���� � �������� ������� ���� �/about/pr/�';
const NETCAT_HINT_CC_LINK = '������ ��� �������� ���������� � ������� ���� �news.html�';
const NETCAT_HINT_CATALOGUE_ID = '����� �������� ��������';
const NETCAT_HINT_SUB_ID = '����� �������� �������';
const NETCAT_HINT_CC_ID = '����� �������� ���������� � �������';
const NETCAT_HINT_CURRENT_CATALOGUE = '�������� �������� ������� �������� ��������';
const NETCAT_HINT_CURRENT_SUB = '�������� �������� ������� �������� �������';
const NETCAT_HINT_CURRENT_CC = '�������� �������� ������� �������� ���������� � �������';
const NETCAT_HINT_CURRENT_USER = '�������� �������� ������� �������� ��������������� ������������.';
const NETCAT_HINT_IS_EVEN = '��������� �������� �� ��������';
const NETCAT_HINT_OPT = '������� opt() ������� $string � ������, ���� $flag � ������';
const NETCAT_HINT_OPT_CAES = '������� opt_case() ������� $string1 � ������, ���� $flag ������, � $string2, ���� $flag ����';
const NETCAT_HINT_LIST_QUERY = '������� ������������� ��� ���������� SQL-������� $sql_query. ��� ������� ���� SELECT (��� ��� ������ �������, ����������� �������������) ������������ $output_template ��� ������ ����������� �������. $output_template �������� �������������� ����������.<br>��������� �������� ������ ��������� ����� ���-������� $data, ������� �������� ������������� ����� ������� (���� ������� � ������� ������� ���������� �����������). $divider ������ ��� ���������� ����������� ������.';
define("NETCAT_HINT_NC_LIST_SELECT", "������� ��������� ������������ HTML ������ �� ������� " . CMS_SYSTEM_NAME);
const NETCAT_HINT_NC_MESSAGE_LINK = '������� ��������� �������� ������������� ���� � ������� (��� ������) �� ������ (ID) ����� ������� � ������ (ID) ����������, �������� �� �����������';
const NETCAT_HINT_NC_FILE_PATH = '������� ��������� �������� ���� � �����, ���������� � ������������ ����, �� ������ (ID) ����� ������� � ������ (ID) ����������, �������� �� �����������';
const NETCAT_HINT_BROWSE_MESSAGE = '������� ���������� ���� ��������� �� ��������� ������ ������� � �������';
const NETCAT_HINT_NC_OBJECTS_LIST = '������� ���������� ���������� � ������� $cc ������� $sub � ����������� $params � ���� ����������, ���������� �� ������� � ������ URL';
const NETCAT_HINT_RTFM = '��� ��������� ���������� � ������� ����� ���������� � ����������� ������������.';
const NETCAT_HINT_FUNCTION = '�������.';
const NETCAT_HINT_ARRAY = '���-�������';
const NETCAT_HINT_VARS_IN_COMPONENT_SCOPE = '����������, ��������� �� ���� �����';
const NETCAT_HINT_VARS_IN_LIST_SCOPE = '����������, ��������� � ������ �������� �������';
const NETCAT_HINT_FIELD_D = '��';
const NETCAT_HINT_FIELD_M = '��';
const NETCAT_HINT_FIELD_Y = '����';
const NETCAT_HINT_FIELD_H = '��';
const NETCAT_HINT_FIELD_MIN = '��';
const NETCAT_HINT_FIELD_S = '��';

const NETCAT_CUSTOM_ERROR_REQUIRED_INT = '���������� ������ ����� �����.';
const NETCAT_CUSTOM_ERROR_REQUIRED_FLOAT = '���������� ������ �����.';
const NETCAT_CUSTOM_ERROR_MIN_VALUE = '���������� ����� ��� �����: %s.';
const NETCAT_CUSTOM_ERROR_MAX_VALUE = '������������ ����� ��� �����: %s.';
const NETCAT_CUSTOM_PARAMETR_UPDATED = '��������� ������� ���������';
const NETCAT_CUSTOM_PARAMETR_ADDED = '�������� ������� ��������';
const NETCAT_CUSTOM_KEY = '����';
const NETCAT_CUSTOM_VALUE = '��������';
const NETCAT_CUSTOM_USETTINGS = '���������������� ���������';
const NETCAT_CUSTOM_NONE_SETTINGS = '��� ���������������� ��������.';
const NETCAT_CUSTOM_ONCE_MAIN_SETTINGS = '�������� ���������';
const NETCAT_CUSTOM_ONCE_FIELD_NAME = '�������� ����';
const NETCAT_CUSTOM_ONCE_FIELD_DESC = '��������';
const NETCAT_CUSTOM_ONCE_DEFAULT = '�������� �� ��������� (����� �������� �� �������)';
const NETCAT_CUSTOM_ONCE_DONT_SHOW = '�� ���������� � ����� �������������� ��������';
const NETCAT_CUSTOM_ONCE_FIELD_INITIAL_VALUE_INFOBLOCK = '��������� �������� ��� �������� ���������';
const NETCAT_CUSTOM_ONCE_FIELD_INITIAL_VALUE_SUBDIVISION = '��������� �������� ��� �������� �������';
const NETCAT_CUSTOM_ONCE_EXTEND = '�������������� ���������';
const NETCAT_CUSTOM_ONCE_EXTEND_REGEXP = '���������� ��������� ��� ��������';
const NETCAT_CUSTOM_ONCE_EXTEND_ERROR = '����� � ������ �������������� ����������� ���������';
const NETCAT_CUSTOM_ONCE_EXTEND_SIZE_L = '����� ���� ��� �����';
const NETCAT_CUSTOM_ONCE_EXTEND_RESIZE_W = '������ ��� �����������';
const NETCAT_CUSTOM_ONCE_EXTEND_RESIZE_H = '������ ��� �����������';
const NETCAT_CUSTOM_ONCE_EXTEND_VIZRED = '��������� �������������� � ���������� ���������';
const NETCAT_CUSTOM_ONCE_EXTEND_BR = '������� ������ - &lt;br>';
const NETCAT_CUSTOM_ONCE_EXTEND_SIZE_H = '������ ���� ��� �����';
const NETCAT_CUSTOM_ONCE_SAVE = '���������';
const NETCAT_CUSTOM_ONCE_ADD = '��������';
const NETCAT_CUSTOM_ONCE_DROP = '�������';
const NETCAT_CUSTOM_ONCE_DROP_SELECTED = '������� ���������';
const NETCAT_CUSTOM_ONCE_MANUAL_EDIT = '������������� �������';
const NETCAT_CUSTOM_ONCE_ERROR_FIELD_NAME = '�������� ���� ������ ��������� ������ ��������� �����, ����� � ���� �������������';
const NETCAT_CUSTOM_ONCE_ERROR_CAPTION = '���������� ��������� ���� ���������';
const NETCAT_CUSTOM_ONCE_ERROR_FIELD_EXISTS = '����� �������� ��� ����';
const NETCAT_CUSTOM_ONCE_ERROR_QUERY = '������ � sql-�������';
const NETCAT_CUSTOM_ONCE_ERROR_CLASSIFICATOR = '������������� %s �� ������';
const NETCAT_CUSTOM_ONCE_ERROR_CLASSIFICATOR_EMPTY = '������������� %s ����';
const NETCAT_CUSTOM_TYPE = '���';
const NETCAT_CUSTOM_SUBTYPE = '������';
const NETCAT_CUSTOM_EX_MIN = '����������� ��������';
const NETCAT_CUSTOM_EX_MAX = '������������ �������';
const NETCAT_CUSTOM_EX_QUERY = 'SQL-������';
const NETCAT_CUSTOM_EX_CLASSIFICATOR = '������';
const NETCAT_CUSTOM_EX_ELEMENTS = '��������';
const NETCAT_CUSTOM_TYPENAME_STRING = '������';
const NETCAT_CUSTOM_TYPENAME_TEXTAREA = '�����';
const NETCAT_CUSTOM_TYPENAME_CHECKBOX = '���������� ����������';
const NETCAT_CUSTOM_TYPENAME_SELECT = '������';
const NETCAT_CUSTOM_TYPENAME_SELECT_SQL = '������������';
const NETCAT_CUSTOM_TYPENAME_SELECT_STATIC = '�����������';
const NETCAT_CUSTOM_TYPENAME_SELECT_CLASSIFICATOR = '�������������';
const NETCAT_CUSTOM_TYPENAME_DIVIDER = '�����������';
const NETCAT_CUSTOM_TYPENAME_INT = '����� �����';
const NETCAT_CUSTOM_TYPENAME_FLOAT = '������� �����';
const NETCAT_CUSTOM_TYPENAME_DATETIME = '���� � �����';
const NETCAT_CUSTOM_TYPENAME_REL = '����� � ������ ���������';
const NETCAT_CUSTOM_TYPENAME_REL_SUB = '����� � ��������';
const NETCAT_CUSTOM_TYPENAME_REL_CC = '����� � ����������� � �������';
const NETCAT_CUSTOM_TYPENAME_REL_USER = '����� � �������������';
const NETCAT_CUSTOM_TYPENAME_REL_CLASS = '����� � �����������';
const NETCAT_CUSTOM_TYPENAME_FILE = '����';
const NETCAT_CUSTOM_TYPENAME_FILE_ANY = '������������ ����';
const NETCAT_CUSTOM_TYPENAME_FILE_IMAGE = '�����������';
const NETCAT_CUSTOM_TYPENAME_COLOR = '����';
const NETCAT_CUSTOM_TYPENAME_CUSTOM = 'HTML-����';

#exceptions
const NETCAT_EXCEPTION_CLASS_DOESNT_EXIST = '��������� %s �� ������';
# errors
const NETCAT_ERROR_SQL = '������ � SQL-�������.<br/>������:<br/>%s<br/>������:<br/>%s';
const NETCAT_ERROR_DB_CONNECT = '��������� ������: ���������� �������� ��������� �������. ���������, ��������� �� ������� ��������� ������� � ���� ������.';
const NETCAT_ERROR_UNABLE_TO_DELETE_FILES = '�� ������� ������� ���� ��� ���������� %s';

#openstat

# admin notice
const NETCAT_ADMIN_NOTICE_MORE = '���������.';
const NETCAT_ADMIN_NOTICE_PROLONG = '��������.';
const NETCAT_ADMIN_NOTICE_LICENSE_ILLEGAL = '������ ����� Netcat �� �������� ������������.';
const NETCAT_ADMIN_NOTICE_LICENSE_MAYBE_ILLEGAL = '��������, � ��� ������������ �������������� ����� Netcat.';
const NETCAT_ADMIN_NOTICE_SECURITY_UPDATE_SYSTEM = '����� ������ ���������� ������������ �������.';
const NETCAT_ADMIN_NOTICE_SUPPORT_EXPIRED = '���� ����������� ��������� ��� �������� %s �����.';
define("NETCAT_ADMIN_NOTICE_CRON", "�� ����� �� ������������ ���������� \"���������� ��������\"." . (CMS_SYSTEM_NAME === 'Netcat' ? " <a href='https://netcat.ru/developers/docs/system-tools/task-management/' target='_blank'>��� ���?</a>" : ''));
const NETCAT_ADMIN_NOTICE_RIGHTS = '������� ���������� ����� �� ����������';
define("NETCAT_ADMIN_NOTICE_SAFE_MODE", "������� ����� php safe_mode." . (CMS_SYSTEM_NAME === 'Netcat' ? " <a href='https://netcat.ru/adminhelp/safe-mode/' target='_blank'>��� ���?</a>" : ''));
const NETCAT_ADMIN_DOMDocument_NOT_FOUND = 'PHP ���������� DOMDocument �� �������, ������ ������� ����������';
const NETCAT_ADMIN_TRASH_OBJECT_HAS_BEEN_REMOVED = '������ ������';
const NETCAT_ADMIN_TRASH_OBJECTS_REMOVED = '�������� �������';
const NETCAT_ADMIN_TRASH_OBJECT_IS_REMOVED = '������� �������';
const NETCAT_ADMIN_TRASH_TRASH_HAS_BEEN_SUCCESSFULLY_CLEARNED = '������� ���� ������� �������';

const NETCAT_FILE_NOT_FOUND = '���� %s �� ������';
const NETCAT_DIR_NOT_FOUND = '���������� %s �� �������';

const NETCAT_TEMPLATE_FILE_NOT_FOUND = '���� ������� �� ������';
const NETCAT_TEMPLATE_DIR_DELETE_ERROR = '������ ������� ��� ����� %s';
const NETCAT_CAN_NOT_WRITE_FILE = '�� ���� �������� ����';
const NETCAT_CAN_NOT_CREATE_FOLDER = '�� ���� ������� ����� ��� �������';


const NETCAT_ADMIN_AUTH_PERM = '���� �����:';
const NETCAT_ADMIN_AUTH_CHANGE_PASS = '�������� ������';
const NETCAT_ADMIN_AUTH_LOGOUT = '�����';

const CONTROL_BUTTON_CANCEL = '������';

const NETCAT_MESSAGE_FORM_MAIN = '��������';
const NETCAT_MESSAGE_FORM_ADDITIONAL = '�������������';
const NETCAT_EVENT_IMPORTCATALOGUE = '������ �����';
const NETCAT_EVENT_ADDCATALOGUE = '���������� �����';
const NETCAT_EVENT_ADDSUBDIVISION = '���������� �������';
const NETCAT_EVENT_ADDSUBCLASS = '���������� ���������� � ������';
const NETCAT_EVENT_ADDCLASS = '���������� ����������';
const NETCAT_EVENT_ADDCLASSTEMPLATE = '���������� ������� ����������';
const NETCAT_EVENT_ADDMESSAGE = '���������� �������';
const NETCAT_EVENT_ADDSYSTEMTABLE = '���������� ��������� �������';
const NETCAT_EVENT_ADDTEMPLATE = '���������� ������';
const NETCAT_EVENT_ADDUSER = '���������� ������������';
const NETCAT_EVENT_ADDCOMMENT = '���������� �����������';
const NETCAT_EVENT_UPDATECATALOGUE = '�������������� �����';
const NETCAT_EVENT_UPDATESUBDIVISION = '�������������� �������';
const NETCAT_EVENT_UPDATESUBCLASS = '�������������� ���������� � �������';
const NETCAT_EVENT_UPDATECLASS = '�������������� ����������';
const NETCAT_EVENT_UPDATECLASSTEMPLATE = '�������������� ������� ����������';
const NETCAT_EVENT_UPDATEMESSAGE = '�������������� �������';
const NETCAT_EVENT_UPDATESYSTEMTABLE = '�������������� ��������� �������';
const NETCAT_EVENT_UPDATETEMPLATE = '�������������� ������';
const NETCAT_EVENT_UPDATEUSER = '�������������� ������������';
const NETCAT_EVENT_UPDATECOMMENT = '�������������� �����������';
const NETCAT_EVENT_DROPCATALOGUE = '�������� �����';
const NETCAT_EVENT_DROPSUBDIVISION = '�������� �������';
const NETCAT_EVENT_DROPSUBCLASS = '�������� ���������� � �������';
const NETCAT_EVENT_DROPCLASS = '�������� ����������';
const NETCAT_EVENT_DROPCLASSTEMPLATE = '�������� ������� ����������';
const NETCAT_EVENT_DROPMESSAGE = '�������� ���������';
const NETCAT_EVENT_DROPSYSTEMTABLE = '�������� ��������� �������';
const NETCAT_EVENT_DROPTEMPLATE = '�������� ������';
const NETCAT_EVENT_DROPUSER = '�������� ������������';
const NETCAT_EVENT_DROPCOMMENT = '�������� �����������';
const NETCAT_EVENT_CHECKCOMMENT = '��������� �����������';
const NETCAT_EVENT_UNCHECKCOMMENT = '���������� �����������';
const NETCAT_EVENT_CHECKMESSAGE = '��������� �������';
const NETCAT_EVENT_UNCHECKMESSAGE = '���������� �������';
const NETCAT_EVENT_CHECKUSER = '��������� ������������';
const NETCAT_EVENT_UNCHECKUSER = '���������� ������������';
const NETCAT_EVENT_CHECKSUBDIVISION = '��������� �������';
const NETCAT_EVENT_UNCHECKSUBDIVISION = '���������� �������';
const NETCAT_EVENT_CHECKCATALOGUE = '��������� �����';
const NETCAT_EVENT_UNCHECKCATALOGUE = '���������� �����';
const NETCAT_EVENT_CHECKSUBCLASS = '��������� ���������� � �������';
const NETCAT_EVENT_UNCHECKSUBCLASS = '���������� ���������� � �������';
const NETCAT_EVENT_CHECKMODULE = '��������� ������';
const NETCAT_EVENT_UNCHECKMODULE = '���������� ������';
const NETCAT_EVENT_AUTHORIZEUSER = '����������� ������������';
const NETCAT_EVENT_ADDWIDGETCLASS = '���������� ������-����������';
const NETCAT_EVENT_EDITWIDGETCLASS = '�������������� ������-����������';
const NETCAT_EVENT_DROPWIDGETCLASS = '�������� ������-����������';
const NETCAT_EVENT_ADDWIDGET = '���������� �������';
const NETCAT_EVENT_EDITWIDGET = '�������������� �������';
const NETCAT_EVENT_DROPWIDGET = '�������� �������';

const NETCAT_EVENT_IMPORTCATALOGUEPREP = '���������� � ������� �����';
const NETCAT_EVENT_ADDCATALOGUEPREP = '���������� � ���������� �����';
const NETCAT_EVENT_ADDSUBDIVISIONPREP = '���������� � ���������� �������';
const NETCAT_EVENT_ADDSUBCLASSPREP = '���������� � ���������� ���������� � ������';
const NETCAT_EVENT_ADDCLASSPREP = '���������� � ���������� ����������';
const NETCAT_EVENT_ADDCLASSTEMPLATEPREP = '���������� � ���������� ������� ����������';
const NETCAT_EVENT_ADDMESSAGEPREP = '���������� � ���������� �������';
const NETCAT_EVENT_ADDSYSTEMTABLEPREP = '���������� � ���������� ��������� �������';
const NETCAT_EVENT_ADDTEMPLATEPREP = '���������� � ���������� ������';
const NETCAT_EVENT_ADDUSERPREP = '���������� � ���������� ������������';
const NETCAT_EVENT_ADDCOMMENTPREP = '���������� � ���������� �����������';
const NETCAT_EVENT_UPDATECATALOGUEPREP = '���������� � �������������� �����';
const NETCAT_EVENT_UPDATESUBDIVISIONPREP = '���������� � �������������� �������';
const NETCAT_EVENT_UPDATESUBCLASSPREP = '���������� � �������������� ���������� � �������';
const NETCAT_EVENT_UPDATECLASSPREP = '���������� � �������������� ����������';
const NETCAT_EVENT_UPDATECLASSTEMPLATEPREP = '���������� � �������������� ������� ����������';
const NETCAT_EVENT_UPDATEMESSAGEPREP = '���������� � �������������� �������';
const NETCAT_EVENT_UPDATESYSTEMTABLEPREP = '���������� � �������������� ��������� �������';
const NETCAT_EVENT_UPDATETEMPLATEPREP = '���������� � �������������� ������';
const NETCAT_EVENT_UPDATEUSERPREP = '���������� � �������������� ������������';
const NETCAT_EVENT_UPDATECOMMENTPREP = '���������� � �������������� �����������';
const NETCAT_EVENT_DROPCATALOGUEPREP = '���������� � �������� �����';
const NETCAT_EVENT_DROPSUBDIVISIONPREP = '���������� � �������� �������';
const NETCAT_EVENT_DROPSUBCLASSPREP = '���������� � �������� ���������� � �������';
const NETCAT_EVENT_DROPCLASSPREP = '���������� � �������� ����������';
const NETCAT_EVENT_DROPCLASSTEMPLATEPREP = '���������� � �������� ������� ����������';
const NETCAT_EVENT_DROPMESSAGEPREP = '���������� � �������� ���������';
const NETCAT_EVENT_DROPSYSTEMTABLEPREP = '���������� � �������� ��������� �������';
const NETCAT_EVENT_DROPTEMPLATEPREP = '���������� � �������� ������';
const NETCAT_EVENT_DROPUSERPREP = '���������� � �������� ������������';
const NETCAT_EVENT_DROPCOMMENTPREP = '���������� � �������� �����������';
const NETCAT_EVENT_CHECKCOMMENTPREP = '���������� � ��������� �����������';
const NETCAT_EVENT_UNCHECKCOMMENTPREP = '���������� � ���������� �����������';
const NETCAT_EVENT_CHECKMESSAGEPREP = '���������� � ��������� �������';
const NETCAT_EVENT_UNCHECKMESSAGEPREP = '���������� � ���������� �������';
const NETCAT_EVENT_CHECKUSERPREP = '���������� � ��������� ������������';
const NETCAT_EVENT_UNCHECKUSERPREP = '���������� � ���������� ������������';
const NETCAT_EVENT_CHECKSUBDIVISIONPREP = '���������� � ��������� �������';
const NETCAT_EVENT_UNCHECKSUBDIVISIONPREP = '���������� � ���������� �������';
const NETCAT_EVENT_CHECKCATALOGUEPREP = '���������� � ��������� �����';
const NETCAT_EVENT_UNCHECKCATALOGUEPREP = '���������� � ���������� �����';
const NETCAT_EVENT_CHECKSUBCLASSPREP = '���������� � ��������� ���������� � �������';
const NETCAT_EVENT_UNCHECKSUBCLASSPREP = '���������� � ���������� ���������� � �������';
const NETCAT_EVENT_CHECKMODULEPREP = '���������� � ��������� ������';
const NETCAT_EVENT_UNCHECKMODULEPREP = '���������� � ���������� ������';
const NETCAT_EVENT_AUTHORIZEUSERPREP = '���������� � ����������� ������������';
const NETCAT_EVENT_ADDWIDGETCLASSPREP = '���������� � ���������� ������-����������';
const NETCAT_EVENT_EDITWIDGETCLASSPREP = '���������� � �������������� ������-����������';
const NETCAT_EVENT_DROPWIDGETCLASSPREP = '���������� � �������� ������-����������';
const NETCAT_EVENT_ADDWIDGETPREP = '���������� � ���������� �������';
const NETCAT_EVENT_EDITWIDGETPREP = '���������� � �������������� �������';
const NETCAT_EVENT_DROPWIDGETPREP = '���������� � �������� �������';

const TITLE_WEB = '������� ������';
const TITLE_MOBILE = '��������� ������';
const TITLE_RESPONSIVE = '���������� ������';
const TITLE_OLD = '������� ������ v4';

const TOOLS_PATCH_INSTALL_ONLINE_NOTIFY = '����� ���������� ���������� ������������ ������������� ������� ��������� ����� �������. ��������� ������� ����������?';
const TOOLS_PATCH_INFO_INSTALL = '���������� ����������';
const TOOLS_PATCH_INFO_SYSTEM_MESSAGE = "��������� ����� ��������� ���������, <a href='%LINK'>������ ���������</a>.";
define("TOOLS_PATCH_ERROR_SET_FILEPERM_IN_HTTP_ROOT_PATH", "���������� ����� �� ������ ��� ���� ������ � ����� $HTTP_ROOT_PATH.<br />(%FILE ���������� ��� ������)");
define("TOOLS_PATCH_ERROR_SET_DIRPERM_IN_HTTP_ROOT_PATH", "���������� ����� �� ������ ��� ����� $HTTP_ROOT_PATH � ���� �������������.<br />(%DIR ���������� ��� ������)");
const TOOLS_PATCH_ERROR_UNCORRECT_PHP_VERSION = '��� ������ ������� ����� ���������� ��������� ������ PHP %NEED, ������� ������ PHP %CURRENT.';

const SQL_CONSTRUCT_TITLE = '����������� ��������';
const SQL_CONSTRUCT_CHOOSE_OP = '�������� ��������';
const SQL_CONSTRUCT_SELECT_TABLE = '������� ������ �� �������';
const SQL_CONSTRUCT_SELECT_CC = '������� ������ �� ����������';
const SQL_CONSTRUCT_ENTER_CODE = '������ ��� ��������� � ����� ��������';
const SQL_CONSTRUCT_VIEW_SETTINGS = '���������� ��������� �������';
const SQL_CONSTRUCT_TABLE_NAME = '�������� �������';
const SQL_CONSTRUCT_FIELDS = '����';
const SQL_CONSTRUCT_FIELDS_NOTE = '(�����������, ����� �������, ��� ��������)';
const SQL_CONSTRUCT_CC_ID = 'ID ����������';
const SQL_CONSTRUCT_REGNUM = '����� ��������';
const SQL_CONSTRUCT_REGCODE = '������������� ���';
const SQL_CONSTRUCT_CHOOSE_MOD = '�������� ������';
const SQL_CONSTRUCT_GENERATE = '������������� ������';

const NETCAT_MAIL_ATTACHMENT_FORM_ATTACHMENTS = '��������:';
const NETCAT_MAIL_ATTACHMENT_FORM_DELETE = '�������';
const NETCAT_MAIL_ATTACHMENT_FORM_FILENAME = '�������� �����:';
const NETCAT_MAIL_ATTACHMENT_FORM_ADD = '�������� ���';

const NETCAT_DATEPICKER_CALENDAR_DATE_FORMAT = 'dd.mm.yyyy';
const NETCAT_DATEPICKER_CALENDAR_DAYS = '����������� ����������� ������� ����� ������� ������� ������� �����������';
const NETCAT_DATEPICKER_CALENDAR_DAYS_SHORT = '��� ��� ��� ��� ��� ��� ��� ���';
const NETCAT_DATEPICKER_CALENDAR_DAYS_MIN = '�� �� �� �� �� �� �� ��';
const NETCAT_DATEPICKER_CALENDAR_MONTHS = '������ ������� ���� ������ ��� ���� ���� ������ �������� ������� ������ �������';
const NETCAT_DATEPICKER_CALENDAR_MONTHS_SHORT = '��� ��� ��� ��� ��� ��� ��� ��� ��� ��� ��� ���';
const NETCAT_DATEPICKER_CALENDAR_TODAY = '�������';

const TOOLS_CSV = '�������/������ CSV';
const TOOLS_CSV_EXPORT = '������� CSV';
const TOOLS_CSV_IMPORT = '������ CSV';
const TOOLS_CSV_EXPORT_TYPE = '��� ��������';
const TOOLS_CSV_EXPORT_TYPE_SUBCLASS = '�� ���������';
const TOOLS_CSV_EXPORT_TYPE_COMPONENT = '�� ����������';
const TOOLS_CSV_SELECT_SITE = '�������� ����';
const TOOLS_CSV_SELECT_SUBDIVISION = '�������� ���������';
const TOOLS_CSV_SELECT_SUBCLASS = '�������� ��������';
const TOOLS_CSV_SELECT_COMPONENT = '�������� ���������';
const TOOLS_CSV_SUBCLASSES_NOT_FOUND = '�� ������� ���������� ����������';
const TOOLS_CSV_NOT_SELECTED = '�� �������';
const TOOLS_CSV_CREATE_EXPORT = '�������';
const TOOLS_CSV_RECORD_ID = '������������� ������ � �����';
const TOOLS_CSV_PARENT_RECORD_ID = '������������� ������-��������';

const TOOLS_CSV_SELECT_SETTINGS = '��������� CSV';

const TOOLS_CSV_OPT_ENCLOSED = '�������� ����� ���������';
const TOOLS_CSV_OPT_ESCAPED = '������ �������������';
const TOOLS_CSV_OPT_SEPARATOR = '����������� �����';
const TOOLS_CSV_OPT_CHARSET = '���������';
const TOOLS_CSV_OPT_CHARSET_UTF8 = '������ (utf-8)';
const TOOLS_CSV_OPT_CHARSET_CP1251 = 'Microsoft Excel (windows-1251)';
const TOOLS_CSV_OPT_NULL = '�������� NULL ��';
const TOOLS_CSV_OPT_LISTS = '<nobr>�������� ����� ���� �������</nobr>';
const TOOLS_CSV_OPT_LISTS_NAME = '�������� ��������';
const TOOLS_CSV_OPT_LISTS_VALUE = '�������������� �������� (����.Value)';
const TOOLS_CSV_EXPORT_DONE = '������� ��������. �� ������ ������� ���� �� ������ <a href="%s" target="_blank">%s</a>. ����� ������� ����, ������� <a href="%s" target="_top">�����</a>.';

const TOOLS_CSV_MAPPING_HEADER = '������������ �����';
const TOOLS_CSV_IMPORT_FILE = '���� ������� (*.csv)';
const TOOLS_CSV_IMPORT_RUN = '�������������';
const TOOLS_CSV_IMPORT_FILE_NOT_FOUND = '���� ��� ������� �� ������';
const TOOLS_CSV_IMPORT_COLUMN_COUNT_MISMATCH = '������ %d �� ���� ������������� ��-�� ������������� ���������� ������� (� ��������� �����&nbsp;&mdash; %d, � ����������� ������&nbsp;&mdash; %d).';

const TOOLS_CSV_COMPONENT_FIELD = '���� ����������';
const TOOLS_CSV_FILE_FIELD = '���� CSV-�����';
const TOOLS_CSV_FINISHED_HEADER = '������ ����������';
const TOOLS_CSV_EXPORT_FINISHED_HEADER = '������� ����������';
const TOOLS_CSV_IMPORT_SUCCESS = '������ ����������, ������������� �������: ';
const TOOLS_CSV_DELETE_FINISHED_HEADER = '�������� �����';
const TOOLS_CSV_DELETE_FINISHED = '���� ������. <a href="%s" target="_top">�������, ����� ���������</a>';
const TOOLS_CSV_IMPORT_HISTORY = '������� �������';
const TOOLS_CSV_HISTORY_ID = 'ID';
const TOOLS_CSV_HISTORY_CREATED = '������';
const TOOLS_CSV_HISTORY_ROLLBACK = '��������';
const TOOLS_CSV_HISTORY_EMPTY = '������� ������� �����';
const TOOLS_CSV_HISTORY_CLASS_NAME = '������';
const TOOLS_CSV_HISTORY_ROWS = '�������';
const TOOLS_CSV_HISTORY_ROLLBACKED = '��������';
const TOOLS_CSV_ROLLBACK_FINISHED_HEADER = '������ ������� ���������';
const TOOLS_CSV_ROLLBACK_SUCCESS = '������ ������� ��������� �������. �������� �������: ';


const WELCOME_SCREEN_TOOLTIP_SUPPORT = '� ������ �����������, ����� ���������� � ������������ ��� �������� ����� �� ������������.';
const WELCOME_SCREEN_TOOLTIP_SIDEBAR = '�������� ��������� ����� �������������� ����� ������ ���������� ������.';
const WELCOME_SCREEN_TOOLTIP_SIDEBAR_SUBS = '����� �� <a href="#site.add">��������� ����</a>, ����� ����� �������� �������, �� ������� �� �������. ������ ��������� ��������� �����, � ����� ����� ��������� �������� � �������� �� ������������ �� �����.';
const WELCOME_SCREEN_TOOLTIP_TRASH_WIDGET = '��� ��������� ������ �� ������ ����������� �������. ��������, � �������� ����� ������������ ��������� �������.';
define('WELCOME_SCREEN_MODAL_TEXT', '<h2>����� ���������� � ������� ���������� ������� ' . CMS_SYSTEM_NAME . '!</h2>
    <p>��� ������ �������� �� ������� ����� ������ �������� �� ��������� �������� � <b>������ ���������� ������.</b> ������� �� ��� ����� ������� �� �������� ������ ����� � ������� �����.</p>
    <p>����� �������� ��������� ������������ � ��������������� �������� ����������������� ����������.</p>
    <p>������� ������� �� ������������� ����� ������� � <b>����� � ������.</b></p>');
const WELCOME_SCREEN_BTN_START = '������ ������';

const NETCAT_FILTER_FIELD_MESSAGE_ID = 'ID ������';
const NETCAT_FILTER_FIELD_CREATED = '����� ��������';
const NETCAT_FILTER_FIELD_LAST_UPDATED = '����� ��������������';

const NETCAT_FIELD_VALUE_INHERITED_FROM_SUBDIVISION = '�������� ���� ����������� �� ������� �%s�';
const NETCAT_FIELD_VALUE_INHERITED_FROM_CATALOGUE = '�������� ���� ����������� �� <a href="%s" target="_top">������� �����</a>';
const NETCAT_FIELD_VALUE_INHERITED_FROM_TEMPLATE = '�������� ���� ����������� �� ������ �%s�';
const NETCAT_FIELD_FILE_ICON_SELECT = '�������';
const NETCAT_FIELD_FILE_ICON_ICON = '������';
const NETCAT_FIELD_FILE_ICON_OR = '���';
const NETCAT_FIELD_FILE_ICON_FILE = '����';

const NETCAT_USER_BREAK_ATTRIBUTE_NAMING_CONVENTION = '��������� �� ���� ��������� �������� <a href="https://www.w3.org/TR/html-markup/syntax.html#syntax-attributes" target="_blank">��������� ����������</a> � ���� ���������������: %s.';

const NETCAT_SECURITY_SETTINGS = '��������� ������ �����';
const NETCAT_SECURITY_SETTINGS_SAVE = '���������';
const NETCAT_SECURITY_SETTINGS_SAVED = '��������� ���������';
const NETCAT_SECURITY_SETTINGS_USE_DEFAULT = '������������ <a href="%s" target="_top">����� ��������� ��� ���� ������</a>';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER = '������ �������� ������';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE = '�������� ��� ����������� ��������� ���������, ������������� ���&nbsp;��������';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE_DISABLED = '��������� (�� ��������� �������� ������)';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE_LOG_ONLY = '�� ��������� �������� �� ��������';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE_RELOAD_ESCAPE_INPUT = '������������ �������� � ������������� ��������';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE_RELOAD_REMOVE_INPUT = '�������� �������� � ������������� ��������';
const NETCAT_SECURITY_SETTINGS_INPUT_FILTER_MODE_EXCEPTION = '���������� ���������� �������';

const NETCAT_SECURITY_FILTER_NO_TOKENIZER = '��� PHP �� ����� �����������, ��� ��� ��������� ���������� <i>tokenizer</i>.';
const NETCAT_SECURITY_FILTER_EMAIL_ENABLED = '�������� ������ ��� ������������ ������� �� ����������� �����';
const NETCAT_SECURITY_FILTER_EMAIL_PLACEHOLDER = '����� ����������� �����';
const NETCAT_SECURITY_FILTER_EMAIL_SUBJECT = '������������ ������� �������� ������';
const NETCAT_SECURITY_FILTER_EMAIL_PREFIX = '�� �������� %s �������� ������ �������� ������ (%s).';
const NETCAT_SECURITY_FILTER_EMAIL_INPUT_VALUE = '�������� ��������� ��������� %s';
const NETCAT_SECURITY_FILTER_EMAIL_CHECKED_STRING = '������, � ������� ������� ���������������� ��������';
const NETCAT_SECURITY_FILTER_EMAIL_IP = 'IP-�����, � �������� �������� ������';
const NETCAT_SECURITY_FILTER_EMAIL_URL = '����� ��������';
const NETCAT_SECURITY_FILTER_EMAIL_REFERER = '����� ����������� ��������';
const NETCAT_SECURITY_FILTER_EMAIL_GET = 'GET-���������';
const NETCAT_SECURITY_FILTER_EMAIL_POST = 'POST-���������';
const NETCAT_SECURITY_FILTER_EMAIL_BACKTRACE = '���� �������';
const NETCAT_SECURITY_FILTER_EMAIL_SUFFIX = '����������� ��������������� ����������� ���� ��� ����������� ������ ��������, ����� ��������� ������ ������ ����� ����� ������ ����������.';
const NETCAT_SECURITY_FILTERS_DISABLED = '������� �������� ������ ���������.';

const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA = '������ ����� ����� � ������� ��� ������ CAPTCHA';
const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA_RECOMMEND_DEFAULT = '(����������� ������������ ���������� ��������� �� ���� ������)';
const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA_MODE_DISABLED = '���������';
const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA_MODE_ALWAYS = '���������� CAPTCHA ������';
const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA_MODE_COUNT = '���������� CAPTCHA ����� ������������� ����� ������ ��� ������';
const NETCAT_SECURITY_SETTINGS_AUTH_CAPTCHA_ATTEMPTS = '����� ������� ��� CAPTCHA';

// _CONDITION_
const NETCAT_CONDITION_DATETIME_FORMAT = 'd.m.Y H:i';
const NETCAT_CONDITION_DATE_FORMAT = 'd.m.Y';

// ��������� ��� ����������� ���������� �������� �������
const NETCAT_COND_OP_EQ = '%s';
const NETCAT_COND_OP_EQ_IS = '� %s';
const NETCAT_COND_OP_NE = '�� %s';
const NETCAT_COND_OP_GT = '����� %s';
const NETCAT_COND_OP_GE = '�� ����� %s';
const NETCAT_COND_OP_LT = '����� %s';
const NETCAT_COND_OP_LE = '�� ����� %s';
const NETCAT_COND_OP_GT_DATE = '������� %s';
const NETCAT_COND_OP_GE_DATE = '�� ����� %s';
const NETCAT_COND_OP_LT_DATE = '����� %s';
const NETCAT_COND_OP_LE_DATE = '������� %s';
const NETCAT_COND_OP_CONTAINS = '�������� �%s�';
const NETCAT_COND_OP_NOTCONTAINS = '�� �������� �%s�';
const NETCAT_COND_OP_BEGINS = '���������� � �%s�';

const NETCAT_COND_QUOTED_VALUE = '�%s�';
const NETCAT_COND_OR = ', ��� '; // spaces are important
const NETCAT_COND_AND = '; ';
const NETCAT_COND_OR_SAME = ', ';
const NETCAT_COND_AND_SAME = ' � ';
const NETCAT_COND_DUMMY = '(��� �������, ����������� � ������� ��������)';
const NETCAT_COND_ITEM = '�� �����';
const NETCAT_COND_ITEM_COMPONENT = '�� ������';
const NETCAT_COND_ITEM_PARENTSUB = '�� ������ �������';
const NETCAT_COND_ITEM_PARENTSUB_NE = '�� ������ �� �� �������';
const NETCAT_COND_ITEM_PARENTSUB_DESCENDANTS = '� ��� �����������';
const NETCAT_COND_ITEM_PROPERTY = '�� ������, � �������';
const NETCAT_COND_DATE_FROM = '�';
const NETCAT_COND_DATE_TO = '��';
const NETCAT_COND_TIME_INTERVAL = '%s&#x200A;�&#x200A;%s';
const NETCAT_COND_BOOLEAN_TRUE = '�������';
const NETCAT_COND_BOOLEAN_FALSE = '������';
const NETCAT_COND_DAYOFWEEK_ON_LIST = '� �����������/�� �������/� �����/� �������/� �������/� �������/� �����������';
const NETCAT_COND_DAYOFWEEK_EXCEPT_LIST = '����� ������������/����� ��������/����� �����/����� ��������/����� �������/����� �������/����� �����������';
const NETCAT_COND = '�������: ';

const NETCAT_COND_NONEXISTENT_COMPONENT = '[�������������� ���������]';
const NETCAT_COND_NONEXISTENT_FIELD = '[������ � �������: ���� �� ����������]';
const NETCAT_COND_NONEXISTENT_VALUE = '[�������������� ��������]';
const NETCAT_COND_NONEXISTENT_SUB = '[�������������� ������]';
const NETCAT_COND_NONEXISTENT_ITEM = '[�������������� ������]';

// ������, ������������ � ��������� �������
const NETCAT_CONDITION_FIELD = '������� ������� �� ������ ������';
const NETCAT_CONDITION_AND = '�';
const NETCAT_CONDITION_OR = '���';
const NETCAT_CONDITION_AND_DESCRIPTION = '��� ������� �����:';
const NETCAT_CONDITION_OR_DESCRIPTION = '����� �� ������� �����:';
const NETCAT_CONDITION_REMOVE_GROUP = '������� ������ �������';
const NETCAT_CONDITION_REMOVE_CONDITION = '������� �������';
const NETCAT_CONDITION_REMOVE_ALL_CONFIRMATION = '������� ��� �������?';
const NETCAT_CONDITION_REMOVE_GROUP_CONFIRMATION = '������� ������ �������?';
const NETCAT_CONDITION_REMOVE_CONDITION_CONFIRMATION = '������� ������� �%s�?';
const NETCAT_CONDITION_ADD = '��������...';
const NETCAT_CONDITION_ADD_GROUP = '�������� ������ �������';

const NETCAT_CONDITION_EQUALS = '�����';
const NETCAT_CONDITION_NOT_EQUALS = '�� �����';
const NETCAT_CONDITION_LESS_THAN = '�����';
const NETCAT_CONDITION_LESS_OR_EQUALS = '�� �����';
const NETCAT_CONDITION_GREATER_THAN = '�����';
const NETCAT_CONDITION_GREATER_OR_EQUALS = '�� �����';
const NETCAT_CONDITION_CONTAINS = '��������';
const NETCAT_CONDITION_NOT_CONTAINS = '�� ��������';
const NETCAT_CONDITION_BEGINS_WITH = '���������� �';
const NETCAT_CONDITION_TRUE = '��';
const NETCAT_CONDITION_FALSE = '���';
const NETCAT_CONDITION_INCLUSIVE = '������������';

const NETCAT_CONDITION_SELECT_CONDITION_TYPE = '�������� ��� �������';
const NETCAT_CONDITION_SEARCH_NO_RESULTS = '�� �������: ';

const NETCAT_CONDITION_GROUP_OBJECTS = '��������� �������'; // '�������� �������'

const NETCAT_CONDITION_TYPE_OBJECT = '������';
const NETCAT_CONDITION_SELECT_OBJECT = '�������� ������';
const NETCAT_CONDITION_NONEXISTENT_ITEM = '(�������������� ������)';
const NETCAT_CONDITION_ITEM_WITHOUT_NAME = '������ ��� ��������';
const NETCAT_CONDITION_ITEM_SELECTION = '����� �������';
const NETCAT_CONDITION_DIALOG_CANCEL_BUTTON = '������';
const NETCAT_CONDITION_DIALOG_SELECT_BUTTON = '�������';
const NETCAT_CONDITION_SUBDIVISION_HAS_LIST_NO_COMPONENTS_OR_OBJECTS = '� ��������� ������� ����������� ���������� ���������� ��� �������.';
const NETCAT_CONDITION_TYPE_SUBDIVISION = '������';
const NETCAT_CONDITION_TYPE_SUBDIVISION_DESCENDANTS = '������ � ��� ����������';
const NETCAT_CONDITION_SELECT_SUBDIVISION = '�������� ������';
const NETCAT_CONDITION_TYPE_OBJECT_FIELD = '�������� �������';
const NETCAT_CONDITION_COMMON_FIELDS = '��� ����������';
const NETCAT_CONDITION_SELECT_OBJECT_FIELD = '�������� �������� �������';
const NETCAT_CONDITION_SELECT_VALUE = '...'; // sic

const NETCAT_CONDITION_VALUE_REQUIRED = '���������� ������� �������� ������� ��� ������� ������� �%s�';

// Infoblock settings dialog; mixin editor
const NETCAT_INFOBLOCK_SETTINGS_CONTAINER = '��������� ����������';
const NETCAT_INFOBLOCK_DELETE_CONTAINER = '������� ���������';
const NETCAT_INFOBLOCK_SETTINGS_TITLE_CONTAINER = '��������� ���������� ������';
const NETCAT_INFOBLOCK_SETTINGS_TAB_CUSTOM = '���������';
const NETCAT_INFOBLOCK_SETTINGS_TAB_VISIBILITY = '��������';
const NETCAT_INFOBLOCK_SETTINGS_TAB_OTHERS = '������';
const NETCAT_INFOBLOCK_VISIBILITY_SHOW_BLOCK = '���������� ����';
const NETCAT_INFOBLOCK_VISIBILITY_SHOW_CONTAINER = '���������� ���������';
const NETCAT_INFOBLOCK_VISIBILITY_ALL_PAGES = '�����';
const NETCAT_INFOBLOCK_VISIBILITY_THIS_PAGE = '������ �� ���� ��������';
const NETCAT_INFOBLOCK_VISIBILITY_SOME_PAGES = '������� ��������';
const NETCAT_INFOBLOCK_VISIBILITY_REMOVE_CONDITION = '�������';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISIONS = '�������, � ������� ������������ ����';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISIONS_EXCLUDED = '�������, � ������� ���� �� ������������';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISIONS_ANY = '����� �������';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISION_NOT_SELECTED = '(������ �� ������)';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISION_INCLUDE_CHILDREN = '������� ����������';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISION_DOESNT_EXIST = '�������������� ������';
const NETCAT_INFOBLOCK_VISIBILITY_SUBDIVISION_SELECT = '������� ������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTIONS = '��� �������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_INDEX = '������ ��������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_FULL = '�������� �������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_ADD = '����������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_DELETE = '��������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_EDIT = '��������������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_SEARCH = '������� ��������';
const NETCAT_INFOBLOCK_VISIBILITY_ACTION_SUBSCRIBE = '��������';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENTS = '���������� � �������� ���������� �������, ������� ������ �������������� �� ��������';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENTS_EXCLUDED = '���������� � �������� ���������� �������, ��� ������� ������� ���� �� ���������';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENTS_ANY = '����� ����������';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENT_NOT_SELECTED = '(��������� �� ������)';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENT_DOESNT_EXIST = '�������������� ���������';
const NETCAT_INFOBLOCK_VISIBILITY_COMPONENT_SELECT = '������� ���������';
const NETCAT_INFOBLOCK_VISIBILITY_OBJECTS = '�������, �� ��������� ������� ��������� ����';
const NETCAT_INFOBLOCK_VISIBILITY_OBJECTS_ANY = '����� �������';
const NETCAT_INFOBLOCK_VISIBILITY_OBJECT_NOT_SELECTED = '(������ �� ������)';
const NETCAT_MIXIN_TITLE = '����������';
const NETCAT_MIXIN_TITLE_INDEX = '���������� ������ ��������';
const NETCAT_MIXIN_TITLE_INDEX_ITEM = '���������� ������� � ������';
const NETCAT_MIXIN_INDEX = '������ ��������';
const NETCAT_MIXIN_INDEX_ITEM = '������� � ������';
const NETCAT_MIXIN_BREAKPOINT_TYPE = '��������� ����� ��������';
const NETCAT_MIXIN_BREAKPOINT_TYPE_BLOCK = '� ������ �����';
const NETCAT_MIXIN_BREAKPOINT_TYPE_VIEWPORT = '� ������ ��������';
const NETCAT_MIXIN_BREAKPOINT_ADD = '�������� �������� ������';
const NETCAT_MIXIN_BREAKPOINT_ADD_PROMPT = '����� ������� ������ �����';
const NETCAT_MIXIN_BREAKPOINT_ADD_PROMPT_RANGE = '(������� �������� �� %from �� %to ����.)';
const NETCAT_MIXIN_BREAKPOINT_CHANGE = '�������� ������� ���������';
const NETCAT_MIXIN_BREAKPOINT_CHANGE_PROMPT = '�������� ������� ��������� (0 ��� ������ ������ ��� ��������):';
const NETCAT_MIXIN_FOR_WIDTH_FROM = '��� ������ �� %from ����.';
const NETCAT_MIXIN_FOR_WIDTH_TO = '��� ������ �� %to ����.';
const NETCAT_MIXIN_FOR_WIDTH_RANGE = '��� ������ �� %from �� %to ����.';
const NETCAT_MIXIN_FOR_WIDTH_ANY = '';
const NETCAT_MIXIN_FOR_VIEWPORT_WIDTH_FROM = '��� ������ �������� �� %from ����.';
const NETCAT_MIXIN_FOR_VIEWPORT_WIDTH_TO = '��� ������ �������� �� %to ����.';
const NETCAT_MIXIN_FOR_VIEWPORT_WIDTH_RANGE = '��� ������ �������� �� %from �� %to ����.';
const NETCAT_MIXIN_FOR_VIEWPORT_WIDTH_ANY = '�� �������� � ����� �������';
const NETCAT_MIXIN_FOR_BLOCK_WIDTH_FROM = '��� ������ ������� �� %from ����.';
const NETCAT_MIXIN_FOR_BLOCK_WIDTH_TO = '��� ������ ������� �� %to ����.';
const NETCAT_MIXIN_FOR_BLOCK_WIDTH_RANGE = '��� ������ ������� %from�%to ����.';
const NETCAT_MIXIN_FOR_BLOCK_WIDTH_ANY = '��� ������ � ����� �������';
const NETCAT_MIXIN_PRESET_REMOVE_BUTTON = '�������';
const NETCAT_MIXIN_NONE = '���';
const NETCAT_MIXIN_WIDTH = '������';
const NETCAT_MIXIN_SELECTOR = '�������������� CSS-��������';
const NETCAT_MIXIN_SELECTOR_ADD = '-- �������� �������� --';
const NETCAT_MIXIN_SELECTOR_ADD_PROMPT = '�������� CSS-��������:';
const NETCAT_MIXIN_SETTINGS_REMOVE = '������� ���������';
const NETCAT_MIXIN_PRESET_SELECT = '������� ��������� ����������';
const NETCAT_MIXIN_PRESET_DEFAULT = '�� ��������� (�%s�)';
const NETCAT_MIXIN_PRESET_DEFAULT_NONE = '�� ��������� (���)';
const NETCAT_MIXIN_PRESET_NONE_EXPLICIT = '�� ������������ ��������� �� ���������';
const NETCAT_MIXIN_PRESET_CREATE = '-- ������� ����� ����� �������� --';
const NETCAT_MIXIN_PRESET_EDIT_BUTTON = '�������������';
const NETCAT_MIXIN_PRESET_TITLE_EDIT = '�������������� ������ ��������';
const NETCAT_MIXIN_PRESET_TITLE_ADD = '���������� ������ ��������';
const NETCAT_MIXIN_PRESET_NAME = '�������� ������ ��������';
const NETCAT_MIXIN_PRESET_AVAILABILITY = '��������� �������� ���';
const NETCAT_MIXIN_PRESET_FOR_ANY_COMPONENT = '�������� ���� �����������';
const NETCAT_MIXIN_PRESET_FOR_COMPONENT_TEMPLATE_PREFIX = '������� �%s�';
const NETCAT_MIXIN_PRESET_FOR_COMPONENT = '���������� �%s�';
const NETCAT_MIXIN_PRESET_USE_AS_DEFAULT_FOR = '��������� �� ��������� ���';
const NETCAT_MIXIN_PRESET_TITLE_DELETE = '�������� ������ ��������';
const NETCAT_MIXIN_PRESET_DELETE_WARNING = '����� �������� �%s� ����� �����.';
const NETCAT_MIXIN_PRESET_USED_FOR_COMPONENT_TEMPLATES = '������ ����� �������� ������������ �� ��������� ���';
const NETCAT_MIXIN_PRESET_COMPONENT_TEMPLATES_COUNT_FORMS = '������� ����������/�������� �����������/�������� �����������';
const NETCAT_MIXIN_PRESET_USED_FOR_BLOCKS = '������ ����� �������� ������������ �';
const NETCAT_MIXIN_PRESET_BLOCKS_COUNT_FORMS = '�����/������/������';

const NETCAT_MODAL_DIALOG_IMAGE_HEADER = '���������� ��������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_EDIT_CAPTION = '�������������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_EDIT_COLORPICKER_INPUT_PLACEHOLDER = '�������� RGB';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_ICONS_CAPTION = '������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_ICONS_ICONS_NOT_FOUND = '�� �������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_ICONS_ICONS_SEARCH_INPUT_PLACEHOLDER = '�����...';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_ICONS_LIBRARY_CHOOSE = '��� ������';
const NETCAT_MODAL_DIALOG_IMAGE_BUTTON_SAVE = '���������';
const NETCAT_MODAL_DIALOG_IMAGE_BUTTON_CLOSE = '������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_UPLOAD_CAPTION = '��������';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_WEB_CAPTION = '�� ����';
const NETCAT_MODAL_DIALOG_IMAGE_TAB_ICONS_SHOW_ALL = '�������� ���';

const NC_FILTER_TYPE_STRING_NAME = '���������';
const NC_FILTER_TYPE_NUMBER_NAME = '�������� (��...��)';
const NC_FILTER_TYPE_RANGE_NAME = '�������� ��������';
const NC_FILTER_TYPE_LIST_NAME = '������ � ������������ �������';
const NC_FILTER_TYPE_MULTIPLE_NAME = '������ �� ������������� ������� (��������)';
const NC_FILTER_TYPE_DATE_NAME = '����';
const NC_FILTER_TYPE_DATE_RANGE_NAME = '���� (��...��)';
const NC_FILTER_TABLE_HEADER_FIELD = '����';
const NC_FILTER_TABLE_HEADER_FORMAT = '������ �������';
const NC_FILTER_ADD_FIELD = '�������� ����...';
const NC_FILTER_SELECT_FIELD = '-- �������� ���� --';
const NC_FILTER_SUBDIVISION = '������';
const NC_FILTER_INFOBLOCKS = '��������';
const NC_FILTER_NOT_SELECTED = '�� �������';
const NC_FILTER_NOT_CONFIGURED = '������ ��� �� ��������';
const NC_FILTER_SUBMIT = '��������';
const NC_FILTER_FORM_NUMBER_FROM = '��';
const NC_FILTER_FORM_NUMBER_TO = '��';
const NC_FILTER_FORM_DATE_FROM = '�';
const NC_FILTER_FORM_DATE_TO = '��';

//Catalogue mode
const CONTROL_CONTENT_CATALOGUE_FUNCS_MODE = '����� ������ �����';
const CONTROL_CONTENT_CATALOGUE_FUNCS_MODE_TEMPLATE_DEVELOPMENT = '���������� �������';
const CONTROL_CONTENT_CATALOGUE_FUNCS_MODE_NORMAL = '����������';
const CONTROL_CONTENT_CATALOGUE_FUNCS_MODE_DEMO = '����';

const CONTROL_CONTENT_SUBDIVISION_FUNCS_DISALLOW_MOVE_AND_DELETE = '������ ����������, ����������� � �������� �������';
const CONTROL_CONTENT_SUB_CLASS_FUNCS_DISALLOW_MOVE_AND_DELETE = '������ ����������, ����������� � �������� �����';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_DELETE = '������ �������� �������: ������� ������ �� �������� ������� ��� ���������';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_HIDE = '������ ���������� �������: ������� ������ �� ���������� �������';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_DELETE_ITEM = '������ �� �������� �������';
const CONTROL_CONTENT_SUB_CLASS_DISALLOW_ERROR_DELETE_ITEM = '������ �� �������� ���������';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_ACTION_TITLE = '�������� ���������';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_CUT_SUB_CLASS = '�� ���������%s ��� ��� �������� ��������� ����� ������ �� �����������.';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_DELETE_SUB_CLASS = '�� ���������%s ��� ��� �������� ��������� ����� ������ �� ��������.';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_HIDE_SUB_CLASS = '�� ��������� ��� ��� �������� ��������� ����� ������ �� ����������.';
const CONTROL_CONTENT_SUBDIVISION_DISALLOW_ERROR_HIDE_SUBDIVISION_SUB_CLASS = '������ ���������� �������: �� ����� �� ���������� ����� ������ �� �������� � ����������';

const NETCAT_VERSION_TAB_NAME = '�������';
const NETCAT_VERSION_TAB_TOOLBAR_SUBDIVISION = '������';
const NETCAT_VERSION_TAB_TOOLBAR_INFOBLOCK = '���������';
const NETCAT_VERSION_TAB_TOOLBAR_OBJECT = '�������';
const NETCAT_VERSION_TABLE_NUMBER = '����� ������';
const NETCAT_VERSION_TABLE_TIMESTAMP = '���� � �����';
const NETCAT_VERSION_TABLE_USER = '������������';
const NETCAT_VERSION_TABLE_ACTION = '��������';
const NETCAT_VERSION_TABLE_CHANGES = '���������';
const NETCAT_VERSION_TABLE_SHOW_CHANGES = '�������� ���������';
const NETCAT_VERSION_TABLE_NO_CHANGES = '��������� ���';
const NETCAT_VERSION_OBJECT_RESTORED = '������ ������� �������������';
const NETCAT_VERSION_INFOBLOCK_RESTORED = '������ ��������� �������������';
const NETCAT_VERSION_SUBDIVISION_RESTORED = '������ ������� �������������';
const NETCAT_VERSION_OBJECT_RESTORE_ERROR = '������ ��� �������������� ������ �������';
const NETCAT_VERSION_INFOBLOCK_RESTORE_ERROR = '������ ��� �������������� ������ ���������';
const NETCAT_VERSION_SUBDIVISION_RESTORE_ERROR = '������ ��� �������������� ������ �������';
const NETCAT_VERSION_OBJECT_RESTORE_ERROR_PARENT = '���������� ������������ ������ �������, �.�. ����������� ������������ ��������';
const NETCAT_VERSION_INFOBLOCK_RESTORE_ERROR_PARENT = '���������� ������������ ������ ������� ���������, �.�. ����������� ������������ ������';
const NETCAT_VERSION_SUBDIVISION_RESTORE_ERROR_PARENT = '���������� ������������ ������ �������, �.�. ����������� ������������ ����';
const NETCAT_VERSION_RESTORE = '������������';
const NETCAT_VERSION_CHANGESET_INITIAL = '������ ���������� ������';
const NETCAT_VERSION_CHANGESET_RESTORE_PAGE = '�������������� ������ �������� %s �� %s';
const NETCAT_VERSION_CHANGESET_SITE_IMPORT = '������ �����';
const NETCAT_VERSION_ENTITY = '��������';
const NETCAT_VERSION_ENTITY_SITE = '����';
const NETCAT_VERSION_ENTITY_SUBDIVISION = '������';
const NETCAT_VERSION_ENTITY_INFOBLOCK = '��������';
const NETCAT_VERSION_ENTITY_OBJECT = '������';
const NETCAT_VERSION_ACTION_INITIAL = '(������ ������)';
const NETCAT_VERSION_ACTION_CREATED = '��������';
const NETCAT_VERSION_ACTION_UPDATED = '���������';
const NETCAT_VERSION_ACTION_DELETED = '��������';
const NETCAT_VERSION_ACTION_ENABLED = '���������';
const NETCAT_VERSION_ACTION_DISABLED = '����������';
