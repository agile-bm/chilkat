<?php

namespace AgileBM\Chilkat;

class CkSecureString {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkSecureString') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkSecureString();
	}

	function get_Utf8() {
		return CkSecureString_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkSecureString_put_Utf8($this->_cPtr,$b);
	}

	function get_LastMethodSuccess() {
		return CkSecureString_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkSecureString_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_MaintainHash($str) {
		CkSecureString_get_MaintainHash($this->_cPtr,$str);
	}

	function maintainHash() {
		return CkSecureString_maintainHash($this->_cPtr);
	}

	function put_MaintainHash($newVal) {
		CkSecureString_put_MaintainHash($this->_cPtr,$newVal);
	}

	function get_ReadOnly() {
		return CkSecureString_get_ReadOnly($this->_cPtr);
	}

	function put_ReadOnly($newVal) {
		CkSecureString_put_ReadOnly($this->_cPtr,$newVal);
	}

	function access() {
		return CkSecureString_access($this->_cPtr);
	}

	function Append($str) {
		return CkSecureString_Append($this->_cPtr,$str);
	}

	function AppendSb($sb) {
		return CkSecureString_AppendSb($this->_cPtr,$sb);
	}

	function AppendSecure($secStr) {
		return CkSecureString_AppendSecure($this->_cPtr,$secStr);
	}

	function hashVal($encoding) {
		return CkSecureString_hashVal($this->_cPtr,$encoding);
	}

	function LoadFile($path,$charset) {
		return CkSecureString_LoadFile($this->_cPtr,$path,$charset);
	}

	function SecStrEquals($secStr) {
		return CkSecureString_SecStrEquals($this->_cPtr,$secStr);
	}

	function VerifyHash($hashVal,$encoding) {
		return CkSecureString_VerifyHash($this->_cPtr,$hashVal,$encoding);
	}
}