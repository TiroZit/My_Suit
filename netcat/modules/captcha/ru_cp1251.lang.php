<?php

const NETCAT_MODULE_CAPTCHA_DESCRIPTION = '������ ���� ���������';

if (nc_core::get_object()->get_settings('Provider', 'captcha') !== 'nc_captcha_provider_image') {
    define('NETCAT_MODULE_CAPTCHA_WRONG_CODE', '����������, �����������, ��� �� �� �����');
    define('NETCAT_MODULE_CAPTCHA_WRONG_CODE_SMALL', '�����������, ��� �� �� �����');
}
else {
    define('NETCAT_MODULE_CAPTCHA_WRONG_CODE', '����������� ������� �������, ������������ �� ��������');
    define('NETCAT_MODULE_CAPTCHA_WRONG_CODE_SMALL', '����������� ������� �������');
}

const NETCAT_MODERATION_CAPTCHA = '������� �������, ������������ �� ��������';
const NETCAT_MODERATION_CAPTCHA_SMALL = '�������<br/>�� ��������';
const NETCAT_MODULE_CAPTCHA_AUDIO_LISTEN = '����������';
const NETCAT_MODULE_CAPTCHA_REFRESH = '��������';

const NETCAT_MODULE_CAPTCHA_SETTINGS_SAVE = '���������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_SAVED = '��������� ���������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_USE_DEFAULT = '������������ <a href="%s" target="_top">����� ��������� ��� ���� ������</a>';
const NETCAT_MODULE_CAPTCHA_SETTINGS_PROVIDER = '��� CAPTCHA';
const NETCAT_MODULE_CAPTCHA_SETTINGS_PROVIDER_IMAGE = '�������� � �����';
const NETCAT_MODULE_CAPTCHA_SETTINGS_PROVIDER_RECAPTCHA = 'reCAPTCHA';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_CHARACTERS = '�������, ������������ �� ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_LENGTH = '���������� �������� �� ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_EXPIRES = '���� �������� ���� �� �������� � ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_WIDTH = '������ ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_HEIGHT = '������ ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_LINES = '����� ����� �� ��������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_AUDIO_ENABLED = '�������� �����������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_AUDIO_VOICE = '����� ��� �����������';
const NETCAT_MODULE_CAPTCHA_SETTINGS_IMAGE_NO_GD = '���������� GD �� �������� � PHP, ��������� �������� ��� ������ ���� ����������.';

const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_SITE_KEY = '����';
const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_SECRET_KEY = '��������� ����';
const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_ADD_KEYS = '������� ��������� � ��������� �����. �������� ����� ����� �� �������� <a href="https://www.google.com/recaptcha/admin" target="_blank">https://www.google.com/recaptcha/admin</a>.';
const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_INVALID_SECRET = '<a href="https://www.google.com/recaptcha/admin" target="_blank" title="������ ���������� reCAPTCHA">���������</a>, ��������� �� ������ ��������� ����.';
const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_NO_CURL = '���������� cURL �� �������� � PHP, ������������� reCAPTCHA ����������.';
const NETCAT_MODULE_CAPTCHA_SETTINGS_RECAPTCHA_NO_CONNECTION = '�� ������� ������������ � ������� Google ��� �������� ����������.';

const NETCAT_MODULE_CAPTCHA_SETTINGS_LEGACY_MODE = '����� ������������� � ���������, ���������������� ��� ������������� �� ���������� ������� Netcat';
const NETCAT_MODULE_CAPTCHA_SETTINGS_REMOVED_LEGACY_TEXT = '�����, ��������� � ����� (�� ����� ����� � ������)';
const NETCAT_MODULE_CAPTCHA_SETTINGS_REMOVED_LEGACY_BLOCKS = '�����, ��������� � ����� (�� ������ CSS-��������� ����� � ������)';
