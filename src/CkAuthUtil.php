<?php

namespace AgileBM\Chilkat;

class CkAuthUtil {
	public $_cPtr=null;
	protected $_pData=array();

	function __set($var,$value) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_alter_newobject($this->_cPtr,$value);
		$this->_pData[$var] = $value;
	}

	function __get($var) {
		if ($var === 'thisown') return swig_chilkat_9_5_0_get_newobject($this->_cPtr);
		return $this->_pData[$var];
	}

	function __isset($var) {
		if ($var === 'thisown') return true;
		return array_key_exists($var, $this->_pData);
	}

	function __construct($res=null) {
		if (is_resource($res) && get_resource_type($res) === '_p_CkAuthUtil') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkAuthUtil();
	}

	function get_Utf8() {
		return CkAuthUtil_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkAuthUtil_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkAuthUtil_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkAuthUtil_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkAuthUtil_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkAuthUtil_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkAuthUtil_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkAuthUtil_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkAuthUtil_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkAuthUtil_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkAuthUtil_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkAuthUtil_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkAuthUtil_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkAuthUtil_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkAuthUtil_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkAuthUtil_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkAuthUtil_version($this->_cPtr);
	}

	function SaveLastError($path) {
		return CkAuthUtil_SaveLastError($this->_cPtr,$path);
	}

	function walmartSignature($requestUrl,$consumerId,$privateKey,$requestMethod) {
		return CkAuthUtil_walmartSignature($this->_cPtr,$requestUrl,$consumerId,$privateKey,$requestMethod);
	}
}