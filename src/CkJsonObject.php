<?php

namespace AgileBM\Chilkat;

class CkJsonObject {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkJsonObject') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkJsonObject();
	}

	function get_Utf8() {
		return CkJsonObject_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkJsonObject_put_Utf8($this->_cPtr,$b);
	}

	function get_DebugLogFilePath($str) {
		CkJsonObject_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkJsonObject_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkJsonObject_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_DelimiterChar($str) {
		CkJsonObject_get_DelimiterChar($this->_cPtr,$str);
	}

	function delimiterChar() {
		return CkJsonObject_delimiterChar($this->_cPtr);
	}

	function put_DelimiterChar($newVal) {
		CkJsonObject_put_DelimiterChar($this->_cPtr,$newVal);
	}

	function get_EmitCompact() {
		return CkJsonObject_get_EmitCompact($this->_cPtr);
	}

	function put_EmitCompact($newVal) {
		CkJsonObject_put_EmitCompact($this->_cPtr,$newVal);
	}

	function get_EmitCrLf() {
		return CkJsonObject_get_EmitCrLf($this->_cPtr);
	}

	function put_EmitCrLf($newVal) {
		CkJsonObject_put_EmitCrLf($this->_cPtr,$newVal);
	}

	function get_I() {
		return CkJsonObject_get_I($this->_cPtr);
	}

	function put_I($newVal) {
		CkJsonObject_put_I($this->_cPtr,$newVal);
	}

	function get_J() {
		return CkJsonObject_get_J($this->_cPtr);
	}

	function put_J($newVal) {
		CkJsonObject_put_J($this->_cPtr,$newVal);
	}

	function get_K() {
		return CkJsonObject_get_K($this->_cPtr);
	}

	function put_K($newVal) {
		CkJsonObject_put_K($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkJsonObject_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkJsonObject_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkJsonObject_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkJsonObject_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkJsonObject_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkJsonObject_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkJsonObject_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkJsonObject_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_LowerCaseNames() {
		return CkJsonObject_get_LowerCaseNames($this->_cPtr);
	}

	function put_LowerCaseNames($newVal) {
		CkJsonObject_put_LowerCaseNames($this->_cPtr,$newVal);
	}

	function get_PathPrefix($str) {
		CkJsonObject_get_PathPrefix($this->_cPtr,$str);
	}

	function pathPrefix() {
		return CkJsonObject_pathPrefix($this->_cPtr);
	}

	function put_PathPrefix($newVal) {
		CkJsonObject_put_PathPrefix($this->_cPtr,$newVal);
	}

	function get_Size() {
		return CkJsonObject_get_Size($this->_cPtr);
	}

	function get_VerboseLogging() {
		return CkJsonObject_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkJsonObject_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkJsonObject_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkJsonObject_version($this->_cPtr);
	}

	function AddArrayAt($index,$name) {
		return CkJsonObject_AddArrayAt($this->_cPtr,$index,$name);
	}

	function AddArrayCopyAt($index,$name,$jarr) {
		return CkJsonObject_AddArrayCopyAt($this->_cPtr,$index,$name,$jarr);
	}

	function AddBoolAt($index,$name,$value) {
		return CkJsonObject_AddBoolAt($this->_cPtr,$index,$name,$value);
	}

	function AddIntAt($index,$name,$value) {
		return CkJsonObject_AddIntAt($this->_cPtr,$index,$name,$value);
	}

	function AddNullAt($index,$name) {
		return CkJsonObject_AddNullAt($this->_cPtr,$index,$name);
	}

	function AddNumberAt($index,$name,$numericStr) {
		return CkJsonObject_AddNumberAt($this->_cPtr,$index,$name,$numericStr);
	}

	function AddObjectAt($index,$name) {
		return CkJsonObject_AddObjectAt($this->_cPtr,$index,$name);
	}

	function AddObjectCopyAt($index,$name,$jsonObj) {
		return CkJsonObject_AddObjectCopyAt($this->_cPtr,$index,$name,$jsonObj);
	}

	function AddStringAt($index,$name,$value) {
		return CkJsonObject_AddStringAt($this->_cPtr,$index,$name,$value);
	}

	function AppendArray($name) {
		$r=CkJsonObject_AppendArray($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonArray($r);
		}
		return $r;
	}

	function AppendArrayCopy($name,$jarr) {
		return CkJsonObject_AppendArrayCopy($this->_cPtr,$name,$jarr);
	}

	function AppendBool($name,$value) {
		return CkJsonObject_AppendBool($this->_cPtr,$name,$value);
	}

	function AppendInt($name,$value) {
		return CkJsonObject_AppendInt($this->_cPtr,$name,$value);
	}

	function AppendObject($name) {
		$r=CkJsonObject_AppendObject($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function AppendObjectCopy($name,$jsonObj) {
		return CkJsonObject_AppendObjectCopy($this->_cPtr,$name,$jsonObj);
	}

	function AppendString($name,$value) {
		return CkJsonObject_AppendString($this->_cPtr,$name,$value);
	}

	function AppendStringArray($name,$values) {
		return CkJsonObject_AppendStringArray($this->_cPtr,$name,$values);
	}

	function ArrayAt($index) {
		$r=CkJsonObject_ArrayAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonArray($r);
		}
		return $r;
	}

	function ArrayOf($jsonPath) {
		$r=CkJsonObject_ArrayOf($this->_cPtr,$jsonPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonArray($r);
		}
		return $r;
	}

	function BoolAt($index) {
		return CkJsonObject_BoolAt($this->_cPtr,$index);
	}

	function BoolOf($jsonPath) {
		return CkJsonObject_BoolOf($this->_cPtr,$jsonPath);
	}

	function BytesOf($jsonPath,$encoding,$bd) {
		return CkJsonObject_BytesOf($this->_cPtr,$jsonPath,$encoding,$bd);
	}

	function Clear() {
		CkJsonObject_Clear($this->_cPtr);
	}

	function c_Clone() {
		$r=CkJsonObject_c_Clone($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function DateOf($jsonPath,$dateTime) {
		return CkJsonObject_DateOf($this->_cPtr,$jsonPath,$dateTime);
	}

	function Delete($name) {
		return CkJsonObject_Delete($this->_cPtr,$name);
	}

	function DeleteAt($index) {
		return CkJsonObject_DeleteAt($this->_cPtr,$index);
	}

	function DeleteRecords($arrayPath,$relpath,$value,$caseSensitive) {
		return CkJsonObject_DeleteRecords($this->_cPtr,$arrayPath,$relpath,$value,$caseSensitive);
	}

	function DtOf($jsonPath,$bLocal,$dt) {
		return CkJsonObject_DtOf($this->_cPtr,$jsonPath,$bLocal,$dt);
	}

	function emit() {
		return CkJsonObject_emit($this->_cPtr);
	}

	function EmitBd($bd) {
		return CkJsonObject_EmitBd($this->_cPtr,$bd);
	}

	function EmitSb($sb) {
		return CkJsonObject_EmitSb($this->_cPtr,$sb);
	}

	function emitWithSubs($subs,$omitEmpty) {
		return CkJsonObject_emitWithSubs($this->_cPtr,$subs,$omitEmpty);
	}

	function FindObjectWithMember($name) {
		$r=CkJsonObject_FindObjectWithMember($this->_cPtr,$name);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function FindRecord($arrayPath,$relPath,$value,$caseSensitive) {
		$r=CkJsonObject_FindRecord($this->_cPtr,$arrayPath,$relPath,$value,$caseSensitive);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function findRecordString($arrayPath,$relPath,$value,$caseSensitive,$retRelPath) {
		return CkJsonObject_findRecordString($this->_cPtr,$arrayPath,$relPath,$value,$caseSensitive,$retRelPath);
	}

	function FirebaseApplyEvent($name,$data) {
		return CkJsonObject_FirebaseApplyEvent($this->_cPtr,$name,$data);
	}

	function FirebasePatch($jsonPath,$jsonData) {
		return CkJsonObject_FirebasePatch($this->_cPtr,$jsonPath,$jsonData);
	}

	function FirebasePut($jsonPath,$value) {
		return CkJsonObject_FirebasePut($this->_cPtr,$jsonPath,$value);
	}

	function GetDocRoot() {
		$r=CkJsonObject_GetDocRoot($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function HasMember($jsonPath) {
		return CkJsonObject_HasMember($this->_cPtr,$jsonPath);
	}

	function IndexOf($name) {
		return CkJsonObject_IndexOf($this->_cPtr,$name);
	}

	function IntAt($index) {
		return CkJsonObject_IntAt($this->_cPtr,$index);
	}

	function IntOf($jsonPath) {
		return CkJsonObject_IntOf($this->_cPtr,$jsonPath);
	}

	function IsNullAt($index) {
		return CkJsonObject_IsNullAt($this->_cPtr,$index);
	}

	function IsNullOf($jsonPath) {
		return CkJsonObject_IsNullOf($this->_cPtr,$jsonPath);
	}

	function JsonTypeOf($jsonPath) {
		return CkJsonObject_JsonTypeOf($this->_cPtr,$jsonPath);
	}

	function Load($json) {
		return CkJsonObject_Load($this->_cPtr,$json);
	}

	function LoadBd($bd) {
		return CkJsonObject_LoadBd($this->_cPtr,$bd);
	}

	function LoadFile($path) {
		return CkJsonObject_LoadFile($this->_cPtr,$path);
	}

	function LoadPredefined($name) {
		return CkJsonObject_LoadPredefined($this->_cPtr,$name);
	}

	function LoadSb($sb) {
		return CkJsonObject_LoadSb($this->_cPtr,$sb);
	}

	function MoveMember($fromIndex,$toIndex) {
		return CkJsonObject_MoveMember($this->_cPtr,$fromIndex,$toIndex);
	}

	function nameAt($index) {
		return CkJsonObject_nameAt($this->_cPtr,$index);
	}

	function ObjectAt($index) {
		$r=CkJsonObject_ObjectAt($this->_cPtr,$index);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function ObjectOf($jsonPath) {
		$r=CkJsonObject_ObjectOf($this->_cPtr,$jsonPath);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkJsonObject($r);
		}
		return $r;
	}

	function Predefine($name) {
		return CkJsonObject_Predefine($this->_cPtr,$name);
	}

	function Rename($oldName,$newName) {
		return CkJsonObject_Rename($this->_cPtr,$oldName,$newName);
	}

	function RenameAt($index,$name) {
		return CkJsonObject_RenameAt($this->_cPtr,$index,$name);
	}

	function SaveLastError($path) {
		return CkJsonObject_SaveLastError($this->_cPtr,$path);
	}

	function SetBoolAt($index,$value) {
		return CkJsonObject_SetBoolAt($this->_cPtr,$index,$value);
	}

	function SetBoolOf($jsonPath,$value) {
		return CkJsonObject_SetBoolOf($this->_cPtr,$jsonPath,$value);
	}

	function SetIntAt($index,$value) {
		return CkJsonObject_SetIntAt($this->_cPtr,$index,$value);
	}

	function SetIntOf($jsonPath,$value) {
		return CkJsonObject_SetIntOf($this->_cPtr,$jsonPath,$value);
	}

	function SetNullAt($index) {
		return CkJsonObject_SetNullAt($this->_cPtr,$index);
	}

	function SetNullOf($jsonPath) {
		return CkJsonObject_SetNullOf($this->_cPtr,$jsonPath);
	}

	function SetNumberAt($index,$value) {
		return CkJsonObject_SetNumberAt($this->_cPtr,$index,$value);
	}

	function SetNumberOf($jsonPath,$value) {
		return CkJsonObject_SetNumberOf($this->_cPtr,$jsonPath,$value);
	}

	function SetStringAt($index,$value) {
		return CkJsonObject_SetStringAt($this->_cPtr,$index,$value);
	}

	function SetStringOf($jsonPath,$value) {
		return CkJsonObject_SetStringOf($this->_cPtr,$jsonPath,$value);
	}

	function SizeOfArray($jsonPath) {
		return CkJsonObject_SizeOfArray($this->_cPtr,$jsonPath);
	}

	function stringAt($index) {
		return CkJsonObject_stringAt($this->_cPtr,$index);
	}

	function stringOf($jsonPath) {
		return CkJsonObject_stringOf($this->_cPtr,$jsonPath);
	}

	function StringOfSb($jsonPath,$sb) {
		return CkJsonObject_StringOfSb($this->_cPtr,$jsonPath,$sb);
	}

	function Swap($index1,$index2) {
		return CkJsonObject_Swap($this->_cPtr,$index1,$index2);
	}

	function TypeAt($index) {
		return CkJsonObject_TypeAt($this->_cPtr,$index);
	}

	function UpdateBd($jsonPath,$encoding,$bd) {
		return CkJsonObject_UpdateBd($this->_cPtr,$jsonPath,$encoding,$bd);
	}

	function UpdateBool($jsonPath,$value) {
		return CkJsonObject_UpdateBool($this->_cPtr,$jsonPath,$value);
	}

	function UpdateInt($jsonPath,$value) {
		return CkJsonObject_UpdateInt($this->_cPtr,$jsonPath,$value);
	}

	function UpdateNewArray($jsonPath) {
		return CkJsonObject_UpdateNewArray($this->_cPtr,$jsonPath);
	}

	function UpdateNewObject($jsonPath) {
		return CkJsonObject_UpdateNewObject($this->_cPtr,$jsonPath);
	}

	function UpdateNull($jsonPath) {
		return CkJsonObject_UpdateNull($this->_cPtr,$jsonPath);
	}

	function UpdateNumber($jsonPath,$numericStr) {
		return CkJsonObject_UpdateNumber($this->_cPtr,$jsonPath,$numericStr);
	}

	function UpdateSb($jsonPath,$sb) {
		return CkJsonObject_UpdateSb($this->_cPtr,$jsonPath,$sb);
	}

	function UpdateString($jsonPath,$value) {
		return CkJsonObject_UpdateString($this->_cPtr,$jsonPath,$value);
	}

	function WriteFile($path) {
		return CkJsonObject_WriteFile($this->_cPtr,$path);
	}
}