<?php

namespace AgileBM\Chilkat;

class CkZipCrc {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkZipCrc') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkZipCrc();
	}

	function get_Utf8() {
		return CkZipCrc_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkZipCrc_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkZipCrc_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_DebugLogFilePath($str) {
		CkZipCrc_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkZipCrc_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkZipCrc_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkZipCrc_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkZipCrc_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkZipCrc_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkZipCrc_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkZipCrc_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkZipCrc_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkZipCrc_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkZipCrc_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkZipCrc_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkZipCrc_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkZipCrc_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkZipCrc_version($this->_cPtr);
	}

	function BeginStream() {
		CkZipCrc_BeginStream($this->_cPtr);
	}

	function CalculateCrc($data) {
		return CkZipCrc_CalculateCrc($this->_cPtr,$data);
	}

	function CrcBd($bd) {
		return CkZipCrc_CrcBd($this->_cPtr,$bd);
	}

	function CrcSb($sb,$charset) {
		return CkZipCrc_CrcSb($this->_cPtr,$sb,$charset);
	}

	function CrcString($str,$charset) {
		return CkZipCrc_CrcString($this->_cPtr,$str,$charset);
	}

	function EndStream() {
		return CkZipCrc_EndStream($this->_cPtr);
	}

	function FileCrc($path) {
		return CkZipCrc_FileCrc($this->_cPtr,$path);
	}

	function FileCrcAsync($path) {
		$r=CkZipCrc_FileCrcAsync($this->_cPtr,$path);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function LoadTaskCaller($task) {
		return CkZipCrc_LoadTaskCaller($this->_cPtr,$task);
	}

	function MoreData($data) {
		CkZipCrc_MoreData($this->_cPtr,$data);
	}

	function SaveLastError($path) {
		return CkZipCrc_SaveLastError($this->_cPtr,$path);
	}

	function toHex($crc) {
		return CkZipCrc_toHex($this->_cPtr,$crc);
	}
}