<?php

namespace AgileBM\Chilkat;

class CkOAuth2 {
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
		if (is_resource($res) && get_resource_type($res) === '_p_CkOAuth2') {
			$this->_cPtr=$res;
			return;
		}
		$this->_cPtr=new_CkOAuth2();
	}

	function get_Utf8() {
		return CkOAuth2_get_Utf8($this->_cPtr);
	}

	function put_Utf8($b) {
		CkOAuth2_put_Utf8($this->_cPtr,$b);
	}

	function put_EventCallbackObject($progress) {
		CkOAuth2_put_EventCallbackObject($this->_cPtr,$progress);
	}

	function get_AccessToken($str) {
		CkOAuth2_get_AccessToken($this->_cPtr,$str);
	}

	function accessToken() {
		return CkOAuth2_accessToken($this->_cPtr);
	}

	function put_AccessToken($newVal) {
		CkOAuth2_put_AccessToken($this->_cPtr,$newVal);
	}

	function get_AccessTokenResponse($str) {
		CkOAuth2_get_AccessTokenResponse($this->_cPtr,$str);
	}

	function accessTokenResponse() {
		return CkOAuth2_accessTokenResponse($this->_cPtr);
	}

	function get_AppCallbackUrl($str) {
		CkOAuth2_get_AppCallbackUrl($this->_cPtr,$str);
	}

	function appCallbackUrl() {
		return CkOAuth2_appCallbackUrl($this->_cPtr);
	}

	function put_AppCallbackUrl($newVal) {
		CkOAuth2_put_AppCallbackUrl($this->_cPtr,$newVal);
	}

	function get_AuthFlowState() {
		return CkOAuth2_get_AuthFlowState($this->_cPtr);
	}

	function get_AuthorizationEndpoint($str) {
		CkOAuth2_get_AuthorizationEndpoint($this->_cPtr,$str);
	}

	function authorizationEndpoint() {
		return CkOAuth2_authorizationEndpoint($this->_cPtr);
	}

	function put_AuthorizationEndpoint($newVal) {
		CkOAuth2_put_AuthorizationEndpoint($this->_cPtr,$newVal);
	}

	function get_ClientId($str) {
		CkOAuth2_get_ClientId($this->_cPtr,$str);
	}

	function clientId() {
		return CkOAuth2_clientId($this->_cPtr);
	}

	function put_ClientId($newVal) {
		CkOAuth2_put_ClientId($this->_cPtr,$newVal);
	}

	function get_ClientSecret($str) {
		CkOAuth2_get_ClientSecret($this->_cPtr,$str);
	}

	function clientSecret() {
		return CkOAuth2_clientSecret($this->_cPtr);
	}

	function put_ClientSecret($newVal) {
		CkOAuth2_put_ClientSecret($this->_cPtr,$newVal);
	}

	function get_CodeChallenge() {
		return CkOAuth2_get_CodeChallenge($this->_cPtr);
	}

	function put_CodeChallenge($newVal) {
		CkOAuth2_put_CodeChallenge($this->_cPtr,$newVal);
	}

	function get_CodeChallengeMethod($str) {
		CkOAuth2_get_CodeChallengeMethod($this->_cPtr,$str);
	}

	function codeChallengeMethod() {
		return CkOAuth2_codeChallengeMethod($this->_cPtr);
	}

	function put_CodeChallengeMethod($newVal) {
		CkOAuth2_put_CodeChallengeMethod($this->_cPtr,$newVal);
	}

	function get_DebugLogFilePath($str) {
		CkOAuth2_get_DebugLogFilePath($this->_cPtr,$str);
	}

	function debugLogFilePath() {
		return CkOAuth2_debugLogFilePath($this->_cPtr);
	}

	function put_DebugLogFilePath($newVal) {
		CkOAuth2_put_DebugLogFilePath($this->_cPtr,$newVal);
	}

	function get_FailureInfo($str) {
		CkOAuth2_get_FailureInfo($this->_cPtr,$str);
	}

	function failureInfo() {
		return CkOAuth2_failureInfo($this->_cPtr);
	}

	function get_IncludeNonce() {
		return CkOAuth2_get_IncludeNonce($this->_cPtr);
	}

	function put_IncludeNonce($newVal) {
		CkOAuth2_put_IncludeNonce($this->_cPtr,$newVal);
	}

	function get_LastErrorHtml($str) {
		CkOAuth2_get_LastErrorHtml($this->_cPtr,$str);
	}

	function lastErrorHtml() {
		return CkOAuth2_lastErrorHtml($this->_cPtr);
	}

	function get_LastErrorText($str) {
		CkOAuth2_get_LastErrorText($this->_cPtr,$str);
	}

	function lastErrorText() {
		return CkOAuth2_lastErrorText($this->_cPtr);
	}

	function get_LastErrorXml($str) {
		CkOAuth2_get_LastErrorXml($this->_cPtr,$str);
	}

	function lastErrorXml() {
		return CkOAuth2_lastErrorXml($this->_cPtr);
	}

	function get_LastMethodSuccess() {
		return CkOAuth2_get_LastMethodSuccess($this->_cPtr);
	}

	function put_LastMethodSuccess($newVal) {
		CkOAuth2_put_LastMethodSuccess($this->_cPtr,$newVal);
	}

	function get_ListenPort() {
		return CkOAuth2_get_ListenPort($this->_cPtr);
	}

	function put_ListenPort($newVal) {
		CkOAuth2_put_ListenPort($this->_cPtr,$newVal);
	}

	function get_ListenPortRangeEnd() {
		return CkOAuth2_get_ListenPortRangeEnd($this->_cPtr);
	}

	function put_ListenPortRangeEnd($newVal) {
		CkOAuth2_put_ListenPortRangeEnd($this->_cPtr,$newVal);
	}

	function get_LocalHost($str) {
		CkOAuth2_get_LocalHost($this->_cPtr,$str);
	}

	function localHost() {
		return CkOAuth2_localHost($this->_cPtr);
	}

	function put_LocalHost($newVal) {
		CkOAuth2_put_LocalHost($this->_cPtr,$newVal);
	}

	function get_NonceLength() {
		return CkOAuth2_get_NonceLength($this->_cPtr);
	}

	function put_NonceLength($newVal) {
		CkOAuth2_put_NonceLength($this->_cPtr,$newVal);
	}

	function get_RedirectAllowHtml($str) {
		CkOAuth2_get_RedirectAllowHtml($this->_cPtr,$str);
	}

	function redirectAllowHtml() {
		return CkOAuth2_redirectAllowHtml($this->_cPtr);
	}

	function put_RedirectAllowHtml($newVal) {
		CkOAuth2_put_RedirectAllowHtml($this->_cPtr,$newVal);
	}

	function get_RedirectDenyHtml($str) {
		CkOAuth2_get_RedirectDenyHtml($this->_cPtr,$str);
	}

	function redirectDenyHtml() {
		return CkOAuth2_redirectDenyHtml($this->_cPtr);
	}

	function put_RedirectDenyHtml($newVal) {
		CkOAuth2_put_RedirectDenyHtml($this->_cPtr,$newVal);
	}

	function get_RefreshToken($str) {
		CkOAuth2_get_RefreshToken($this->_cPtr,$str);
	}

	function refreshToken() {
		return CkOAuth2_refreshToken($this->_cPtr);
	}

	function put_RefreshToken($newVal) {
		CkOAuth2_put_RefreshToken($this->_cPtr,$newVal);
	}

	function get_Resource($str) {
		CkOAuth2_get_Resource($this->_cPtr,$str);
	}

	function resource() {
		return CkOAuth2_resource($this->_cPtr);
	}

	function put_Resource($newVal) {
		CkOAuth2_put_Resource($this->_cPtr,$newVal);
	}

	function get_ResponseMode($str) {
		CkOAuth2_get_ResponseMode($this->_cPtr,$str);
	}

	function responseMode() {
		return CkOAuth2_responseMode($this->_cPtr);
	}

	function put_ResponseMode($newVal) {
		CkOAuth2_put_ResponseMode($this->_cPtr,$newVal);
	}

	function get_ResponseType($str) {
		CkOAuth2_get_ResponseType($this->_cPtr,$str);
	}

	function responseType() {
		return CkOAuth2_responseType($this->_cPtr);
	}

	function put_ResponseType($newVal) {
		CkOAuth2_put_ResponseType($this->_cPtr,$newVal);
	}

	function get_Scope($str) {
		CkOAuth2_get_Scope($this->_cPtr,$str);
	}

	function scope() {
		return CkOAuth2_scope($this->_cPtr);
	}

	function put_Scope($newVal) {
		CkOAuth2_put_Scope($this->_cPtr,$newVal);
	}

	function get_TokenEndpoint($str) {
		CkOAuth2_get_TokenEndpoint($this->_cPtr,$str);
	}

	function tokenEndpoint() {
		return CkOAuth2_tokenEndpoint($this->_cPtr);
	}

	function put_TokenEndpoint($newVal) {
		CkOAuth2_put_TokenEndpoint($this->_cPtr,$newVal);
	}

	function get_TokenType($str) {
		CkOAuth2_get_TokenType($this->_cPtr,$str);
	}

	function tokenType() {
		return CkOAuth2_tokenType($this->_cPtr);
	}

	function put_TokenType($newVal) {
		CkOAuth2_put_TokenType($this->_cPtr,$newVal);
	}

	function get_UncommonOptions($str) {
		CkOAuth2_get_UncommonOptions($this->_cPtr,$str);
	}

	function uncommonOptions() {
		return CkOAuth2_uncommonOptions($this->_cPtr);
	}

	function put_UncommonOptions($newVal) {
		CkOAuth2_put_UncommonOptions($this->_cPtr,$newVal);
	}

	function get_UseBasicAuth() {
		return CkOAuth2_get_UseBasicAuth($this->_cPtr);
	}

	function put_UseBasicAuth($newVal) {
		CkOAuth2_put_UseBasicAuth($this->_cPtr,$newVal);
	}

	function get_VerboseLogging() {
		return CkOAuth2_get_VerboseLogging($this->_cPtr);
	}

	function put_VerboseLogging($newVal) {
		CkOAuth2_put_VerboseLogging($this->_cPtr,$newVal);
	}

	function get_Version($str) {
		CkOAuth2_get_Version($this->_cPtr,$str);
	}

	function version() {
		return CkOAuth2_version($this->_cPtr);
	}

	function AddAuthQueryParam($name,$value) {
		return CkOAuth2_AddAuthQueryParam($this->_cPtr,$name,$value);
	}

	function AddTokenQueryParam($name,$value) {
		return CkOAuth2_AddTokenQueryParam($this->_cPtr,$name,$value);
	}

	function Cancel() {
		return CkOAuth2_Cancel($this->_cPtr);
	}

	function getRedirectRequestParam($paramName) {
		return CkOAuth2_getRedirectRequestParam($this->_cPtr,$paramName);
	}

	function redirectRequestParam($paramName) {
		return CkOAuth2_redirectRequestParam($this->_cPtr,$paramName);
	}

	function LoadTaskCaller($task) {
		return CkOAuth2_LoadTaskCaller($this->_cPtr,$task);
	}

	function Monitor() {
		return CkOAuth2_Monitor($this->_cPtr);
	}

	function MonitorAsync() {
		$r=CkOAuth2_MonitorAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function RefreshAccessToken() {
		return CkOAuth2_RefreshAccessToken($this->_cPtr);
	}

	function RefreshAccessTokenAsync() {
		$r=CkOAuth2_RefreshAccessTokenAsync($this->_cPtr);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SaveLastError($path) {
		return CkOAuth2_SaveLastError($this->_cPtr,$path);
	}

	function SetRefreshHeader($name,$value) {
		return CkOAuth2_SetRefreshHeader($this->_cPtr,$name,$value);
	}

	function SetRefreshHeaderAsync($name,$value) {
		$r=CkOAuth2_SetRefreshHeaderAsync($this->_cPtr,$name,$value);
		if (is_resource($r)) {
			$c=substr(get_resource_type($r), (strpos(get_resource_type($r), '__') ? strpos(get_resource_type($r), '__') + 2 : 3));
			if (class_exists($c)) return new $c($r);
			return new CkTask($r);
		}
		return $r;
	}

	function SleepMs($millisec) {
		CkOAuth2_SleepMs($this->_cPtr,$millisec);
	}

	function startAuth() {
		return CkOAuth2_startAuth($this->_cPtr);
	}

	function UseConnection($sock) {
		return CkOAuth2_UseConnection($this->_cPtr,$sock);
	}
}