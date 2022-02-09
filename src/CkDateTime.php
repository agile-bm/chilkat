<?php

namespace AgileBM\Chilkat;

class CkDateTime {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkDateTime') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkDateTime();
	}

	function get_Utf8() {
		return CkDateTime_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkDateTime_put_Utf8($this->_cPtr,$b);
	}

	function get_IsDst() {
		return CkDateTime_get_IsDst($this->_cPtr);
	}

	function get_UtcOffset() {
		return CkDateTime_get_UtcOffset($this->_cPtr);
	}

	function SetFromCurrentSystemTime() {
		CkDateTime_SetFromCurrentSystemTime($this->_cPtr);
	}

	function SetFromRfc822($rfc822Str) {
		return CkDateTime_SetFromRfc822($this->_cPtr,$rfc822Str);
	}

	function GetAsUnixTimeInt($bLocal) {
		return CkDateTime_GetAsUnixTimeInt($this->_cPtr,$bLocal);
	}

	function GetAsOleDate($bLocal) {
		return CkDateTime_GetAsOleDate($this->_cPtr,$bLocal);
	}

	function GetAsDosDate($bLocal) {
		return CkDateTime_GetAsDosDate($this->_cPtr,$bLocal);
	}

	function SetFromOleDate($bLocal,$dt) {
		CkDateTime_SetFromOleDate($this->_cPtr,$bLocal,$dt);
	}

	function SetFromDosDate($bLocal,$t) {
		CkDateTime_SetFromDosDate($this->_cPtr,$bLocal,$t);
	}

	function serialize() {
		return CkDateTime_serialize($this->_cPtr);
	}

	function DeSerialize($serializedDateTime) {
		CkDateTime_DeSerialize($this->_cPtr,$serializedDateTime);
	}

	function AddDays($numDays) {
		return CkDateTime_AddDays($this->_cPtr,$numDays);
	}

	function getAsRfc822($bLocal) {
		return CkDateTime_getAsRfc822($this->_cPtr,$bLocal);
	}

	function get_LastMethodSuccess() {
		return CkDateTime_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkDateTime_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function AddSeconds($numSeconds) {
		return CkDateTime_AddSeconds($this->_cPtr,$numSeconds);
	}

	function DiffSeconds($dt) {
		return CkDateTime_DiffSeconds($this->_cPtr,$dt);
	}

	function getAsUnixTimeStr($bLocal) {
		return CkDateTime_getAsUnixTimeStr($this->_cPtr,$bLocal);
	}

	function getAsIso8601($formatStr,$bLocal) {
		return CkDateTime_getAsIso8601($this->_cPtr,$formatStr,$bLocal);
	}

	function getAsTimestamp($bLocal) {
		return CkDateTime_getAsTimestamp($this->_cPtr,$bLocal);
	}

	function ExpiresWithin($n,$units) {
		return CkDateTime_ExpiresWithin($this->_cPtr,$n,$units);
	}

	function OlderThan($n,$units) {
		return CkDateTime_OlderThan($this->_cPtr,$n,$units);
	}

	function GetDtObj($bLocal) {
		$r=CkDateTime_GetDtObj($this->_cPtr,$bLocal);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkDtObj($r);
		}
		return $r;
	}

	function SetFromDtObj($dtObj) {
		return CkDateTime_SetFromDtObj($this->_cPtr,$dtObj);
	}

	function LoadTaskResult($task) {
		return CkDateTime_LoadTaskResult($this->_cPtr,$task);
	}

	function SetFromNtpTime($t) {
		return CkDateTime_SetFromNtpTime($this->_cPtr,$t);
	}

	function SetFromTimestamp($rfc3339Str) {
		return CkDateTime_SetFromTimestamp($this->_cPtr,$rfc3339Str);
	}
}