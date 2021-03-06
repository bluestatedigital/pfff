<?php
// THIS IS AUTOGENERATED BY builtins_php.ml
//pad: is also in hphp_constants.php ... but this one is right
define('MCC_IPPROTO_TCP', 0);
define('MCC_IPPROTO_UDP', 0);
define('MCC_SERVER_UP', 0);
define('MCC_SERVER_DOWN', 0);
define('MCC_SERVER_DISABLED', 0);
define('MCC_SERVER_RETRY_TMO_MS', 0);
define('MCC_DGRAM_TMO_THRESHOLD', 0);
define('MCC_PORT_DEFAULT', 0);
define('MCC_POOLPREFIX_LEN', 0);
define('MCC_MTU', 0);
define('MCC_RXDGRAM_MAX', 0);
define('MCC_CONN_TMO_MS', 0);
define('MCC_CONN_NTRIES', 0);
define('MCC_DGRAM_NTRIES', 0);
define('MCC_DGRAM_TMO_WEIGHT', 0);
define('MCC_NODELAY', 0);
define('MCC_POLL_TMO_US', 0);
define('MCC_PROXY_DELETE_OP', 0);
define('MCC_PROXY_UPDATE_OP', 0);
define('MCC_PROXY_ARITH_OP', 0);
define('MCC_PROXY_GET_OP', 0);
define('MCC_TMO_MS', 0);
define('MCC_UDP_REPLY_PORTS', 0);
define('MCC_WINDOW_MAX', 0);
define('MCC_HAVE_FB_SERIALIZATION', 0);
define('MCC_ARG_FB_SERIALIZE_ENABLED', 0);
define('MCC_ARG_CONSISTENT_HASHING_PREFIXES', 0);
define('MCC_HAVE_DEBUG_LOG', 0);
define('MCC_ARG_DEBUG', 0);
define('MCC_ARG_DEBUG_LOGFILE', 0);
define('MCC_HAVE_ZLIB_COMPRESSION', 0);
define('MCC_COMPRESSION_THRESHOLD', 0);
//pad: wtf ? see flib/core/cache/client/mcc.php, but the H and HH are used
define('MCC_COMPRESSION_THRESHHOLD', 0);
define('MCC_ARG_SERVERS', 0);
define('MCC_ARG_MIRROR_CFG', 0);
define('MCC_ARG_MIRROR_CFG_NAME', 0);
define('MCC_ARG_MIRROR_CFG_MODEL', 0);
define('MCC_ARG_MIRROR_CFG_SERVERPOOLS', 0);
define('MCC_ARG_COMPRESSION_THRESHOLD', 0);
define('MCC_ARG_NZLIB_COMPRESSION', 0);
define('MCC_ARG_QUICKLZ_COMPRESSION', 0);
define('MCC_ARG_CONN_TMO', 0);
define('MCC_ARG_CONN_NTRIES', 0);
define('MCC_ARG_DEFAULT_PREFIX', 0);
define('MCC_ARG_DELETE_PROXY', 0);
define('MCC_ARG_DGRAM_NTRIES', 0);
define('MCC_ARG_DGRAM_TMO_WEIGHT', 0);
define('MCC_ARG_NODELAY', 0);
define('MCC_ARG_PERSISTENT', 0);
define('MCC_ARG_POLL_TMO', 0);
define('MCC_ARG_PROXY', 0);
define('MCC_ARG_PROXY_OPS', 0);
define('MCC_ARG_TMO', 0);
define('MCC_ARG_TCP_INACTIVITY_TIME', 0);
define('MCC_ARG_NPOOLPREFIX', 0);
define('MCC_TCP_INACTIVITY_TMO_DEFAULT', 0);
define('MCC_ARG_UDP_REPLY_PORTS', 0);
define('MCC_ARG_WINDOW_MAX', 0);
define('MCC_CONSISTENCY_IGNORE', 0);
define('MCC_CONSISTENCY_MATCH_ALL', 0);
define('MCC_CONSISTENCY_MATCH_HITS', 0);
define('MCC_CONSISTENCY_MATCH_HITS_SUPERCEDES', 0);
define('MCC_ARG_SERVER_RETRY_TMO_MS', 0);
define('MCC_ARG_DGRAM_TMO_THRESHOLD', 0);
define('MCC_ARG_RANDOMIZE_APS', 0);
define('MCC_ARG_PREFER_FIRST_AP', 0);
define('MCC_GET_RECORD_ERRORS', 0);
define('MCC_HAVE_LEASE_SET_GET', 0);
define('MCC_DELETE_DELETED', 0);
define('MCC_DELETE_NOTFOUND', 0);
define('MCC_DELETE_ERROR_LOG', 0);
define('MCC_DELETE_ERROR_NOLOG', 0);
//define('PHPMCC_NEW_HANDLE', 0);
//define('PHPMCC_USED_FAST_PATH', 0);
//define('PHPMCC_USED_SLOW_PATH', 0);
//define('PHPMCC_VERSION', 0);

//from _checkModuleLib.php in $extension_defines
define('MCC_NZLIB_COMPRESSION', 0);
define('MCC_ARG_FB_SERIALIZE_PREFIXES', 0);
 
class phpmcc {
const IPPROTO_TCP = 0;
const IPPROTO_UDP = 0;
const LEASE_TOKEN_ALWAYS_ACCEPT = 0;
const LEASE_TOKEN_NEVER_ACCEPT = 0;
const LEASE_TOKEN_HOT_MISS = 0;
const LEASE_GET_HIT = 0;
const LEASE_GET_MISS = 0;
const LEASE_GET_HOT_MISS = 0;
const LEASE_GET_UNKNOWN = 0;
const DETAILED_GET_HIT = 0;
const DETAILED_GET_MISS = 0;
const DETAILED_GET_HOT_MISS = 0;
const DETAILED_GET_UNKNOWN = 0;
function __construct() { }
function __destruct() { }
function __tostring() { }
function __set() { }
function __get() { }
function close() { }
function del() { }
function add_accesspoint() { }
function remove_accesspoint() { }
function get_accesspoints() { }
function get_server() { }
function add_mirror_accesspoint() { }
function remove_mirror_accesspoint() { }
function add_server() { }
function remove_server() { }
function server_flush() { }
function server_version() { }
function server_is_alive() { }
function test_proxy() { }
function add_mirror() { }
function remove_mirror() { }
function add_serverpool() { }
function add_serverpool_ex() { }
function remove_serverpool() { }
function add_accesspoint_listener() { }
function remove_accesspoint_listener() { }
function add_server_listener() { }
function remove_server_listener() { }
function add_error_listener() { }
function remove_error_listener() { }
function get_server_by_key() { }
function get_host() { }
function get_serverpool_by_key() { }
function serverpool_add_server() { }
function serverpool_remove_server() { }
function serverpool_get_servers() { }
function serverpool_get_consistent_hashing_enabled() { }
function serverpool_get_consistent_hashing_version() { }
function multi_add() { }
function multi_replace() { }
function multi_set() { }
function multi_lease_set() { }
function add() { }
function decr() { }
function incr() { }
function delete() { }
function delete_details() { }
function get() { }
function lease_get() { }
function detailed_get() { }
function get_multi() { }
function lease_get_multi() { }
function replace() { }
function set() { }
function lease_set() { }
function stats() { }
function metaget() { }
function get_mcc_version() { }
}
