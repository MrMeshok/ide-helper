<?php

declare(strict_types=1);

/*
 * Swoole version information.
 */
define('SWOOLE_VERSION', '5.0.0');
define('SWOOLE_VERSION_ID', 50000);
define('SWOOLE_MAJOR_VERSION', 5);
define('SWOOLE_MINOR_VERSION', 0);
define('SWOOLE_RELEASE_VERSION', 0);
define('SWOOLE_EXTRA_VERSION', '');

/*
 * If debug logging is enabled or not in Swoole.
 *
 * Debug logging is enabled when Swoole is installed with configuration option "--enable-debug-log" included.
 */
define('SWOOLE_DEBUG', 0);

#ifdef SW_HAVE_COMPRESSION
define('SWOOLE_HAVE_COMPRESSION', '1');
#endif
#ifdef SW_HAVE_ZLIB
define('SWOOLE_HAVE_ZLIB', '1');
#endif
#ifdef SW_HAVE_BROTLI
define('SWOOLE_HAVE_BROTLI', '1');
#endif

define('SWOOLE_USE_HTTP2', '1');

// Support short names or not. Short names are all the aliases listed in file ./shortnames.php.
define('SWOOLE_USE_SHORTNAME', (bool) ini_get('swoole.use_shortname'));

// Socket types.
define('SWOOLE_SOCK_TCP', 1);
define('SWOOLE_SOCK_UDP', 2);
define('SWOOLE_SOCK_TCP6', 3);
define('SWOOLE_SOCK_UDP6', 4);
define('SWOOLE_SOCK_UNIX_STREAM', 5);
define('SWOOLE_SOCK_UNIX_DGRAM', 6);

// Simple aliases of socket types.
define('SWOOLE_TCP', SWOOLE_SOCK_TCP);
define('SWOOLE_UDP', SWOOLE_SOCK_UDP);
define('SWOOLE_TCP6', SWOOLE_SOCK_TCP6);
define('SWOOLE_UDP6', SWOOLE_SOCK_UDP6);
define('SWOOLE_UNIX_STREAM', SWOOLE_SOCK_UNIX_STREAM);
define('SWOOLE_UNIX_DGRAM', SWOOLE_SOCK_UNIX_DGRAM);

/*
 * Next two constants define types of socket connections. They are used in method Swoole\Client::__construct().
 *
 * There are two types of socket connections: synchronous (blocking) and asynchronous (non-blocking).
 *
 * @see \Swoole\Client
 */
define('SWOOLE_SOCK_SYNC', false);
define('SWOOLE_SOCK_ASYNC', true); // This constant is no longer used anywhere in Swoole.

/*
 * Socket flags.
 *
 * There are four flags in total for socket connections:
 *   - SWOOLE_SSL   (2^9)
 *   - SWOOLE_ASYNC (2^10)
 *   - SWOOLE_SYNC  (2^11)
 *   - SWOOLE_KEEP  (2^12)
 *
 * Socket flags are used in class Swoole\Client and Swoole\Coroutine\Client.
 *
 * @see \Swoole\Client
 * @see \Swoole\Coroutine\Client
 */
define('SWOOLE_ASYNC', 1024); // 2^10
define('SWOOLE_SYNC', 2048);  // 2^11
define('SWOOLE_KEEP', 4096);  // 2^12

define('SWOOLE_EVENT_READ', 512);   // 2^9
define('SWOOLE_EVENT_WRITE', 1024); // 2^10

define('SWOOLE_STRERROR_SYSTEM', 0);
define('SWOOLE_STRERROR_GAI', 1);
define('SWOOLE_STRERROR_DNS', 2);
define('SWOOLE_STRERROR_SWOOLE', 9);
define('SWOOLE_ERROR_MALLOC_FAIL', 501);
define('SWOOLE_ERROR_SYSTEM_CALL_FAIL', 502);
define('SWOOLE_ERROR_PHP_FATAL_ERROR', 503);
define('SWOOLE_ERROR_NAME_TOO_LONG', 504);
define('SWOOLE_ERROR_INVALID_PARAMS', 505);
define('SWOOLE_ERROR_QUEUE_FULL', 506);
define('SWOOLE_ERROR_OPERATION_NOT_SUPPORT', 507);
define('SWOOLE_ERROR_PROTOCOL_ERROR', 508);
define('SWOOLE_ERROR_WRONG_OPERATION', 509);
define('SWOOLE_ERROR_FILE_NOT_EXIST', 700);
define('SWOOLE_ERROR_FILE_TOO_LARGE', 701);
define('SWOOLE_ERROR_FILE_EMPTY', 702);
define('SWOOLE_ERROR_DNSLOOKUP_DUPLICATE_REQUEST', 710);
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_FAILED', 711);
define('SWOOLE_ERROR_DNSLOOKUP_RESOLVE_TIMEOUT', 712);
define('SWOOLE_ERROR_DNSLOOKUP_UNSUPPORTED', 713);
define('SWOOLE_ERROR_DNSLOOKUP_NO_SERVER', 714);
define('SWOOLE_ERROR_BAD_IPV6_ADDRESS', 720);
define('SWOOLE_ERROR_UNREGISTERED_SIGNAL', 721);
define('SWOOLE_ERROR_EVENT_SOCKET_REMOVED', 800);
define('SWOOLE_ERROR_SESSION_CLOSED_BY_SERVER', 1001);
define('SWOOLE_ERROR_SESSION_CLOSED_BY_CLIENT', 1002);
define('SWOOLE_ERROR_SESSION_CLOSING', 1003);
define('SWOOLE_ERROR_SESSION_CLOSED', 1004);
define('SWOOLE_ERROR_SESSION_NOT_EXIST', 1005);
define('SWOOLE_ERROR_SESSION_INVALID_ID', 1006);
define('SWOOLE_ERROR_SESSION_DISCARD_TIMEOUT_DATA', 1007);
define('SWOOLE_ERROR_SESSION_DISCARD_DATA', 1008);
define('SWOOLE_ERROR_OUTPUT_BUFFER_OVERFLOW', 1009);
define('SWOOLE_ERROR_OUTPUT_SEND_YIELD', 1010);
define('SWOOLE_ERROR_SSL_NOT_READY', 1011);
define('SWOOLE_ERROR_SSL_CANNOT_USE_SENFILE', 1012);
define('SWOOLE_ERROR_SSL_EMPTY_PEER_CERTIFICATE', 1013);
define('SWOOLE_ERROR_SSL_VERIFY_FAILED', 1014);
define('SWOOLE_ERROR_SSL_BAD_CLIENT', 1015);
define('SWOOLE_ERROR_SSL_BAD_PROTOCOL', 1016);
define('SWOOLE_ERROR_SSL_RESET', 1017);
define('SWOOLE_ERROR_SSL_HANDSHAKE_FAILED', 1018);
define('SWOOLE_ERROR_PACKAGE_LENGTH_TOO_LARGE', 1201);
define('SWOOLE_ERROR_PACKAGE_LENGTH_NOT_FOUND', 1202);
define('SWOOLE_ERROR_DATA_LENGTH_TOO_LARGE', 1203);
define('SWOOLE_ERROR_PACKAGE_MALFORMED_DATA', 1204);
define('SWOOLE_ERROR_TASK_PACKAGE_TOO_BIG', 2001);
define('SWOOLE_ERROR_TASK_DISPATCH_FAIL', 2002);
define('SWOOLE_ERROR_TASK_TIMEOUT', 2003);
define('SWOOLE_ERROR_HTTP2_STREAM_ID_TOO_BIG', 3001);
define('SWOOLE_ERROR_HTTP2_STREAM_NO_HEADER', 3002);
define('SWOOLE_ERROR_HTTP2_STREAM_NOT_FOUND', 3003);
define('SWOOLE_ERROR_HTTP2_STREAM_IGNORE', 3004);
define('SWOOLE_ERROR_HTTP2_SEND_CONTROL_FRAME_FAILED', 3005);
define('SWOOLE_ERROR_AIO_BAD_REQUEST', 4001);
define('SWOOLE_ERROR_AIO_CANCELED', 4002);
define('SWOOLE_ERROR_AIO_TIMEOUT', 4003);
define('SWOOLE_ERROR_CLIENT_NO_CONNECTION', 5001);
define('SWOOLE_ERROR_SOCKET_CLOSED', 6001);
define('SWOOLE_ERROR_SOCKET_POLL_TIMEOUT', 6002);
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_VERSION', 7001);
define('SWOOLE_ERROR_SOCKS5_UNSUPPORT_METHOD', 7002);
define('SWOOLE_ERROR_SOCKS5_AUTH_FAILED', 7003);
define('SWOOLE_ERROR_SOCKS5_SERVER_ERROR', 7004);
define('SWOOLE_ERROR_SOCKS5_HANDSHAKE_FAILED', 7005);
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_ERROR', 7101);
define('SWOOLE_ERROR_HTTP_INVALID_PROTOCOL', 7102);
define('SWOOLE_ERROR_HTTP_PROXY_HANDSHAKE_FAILED', 7103);
define('SWOOLE_ERROR_HTTP_PROXY_BAD_RESPONSE', 7104);
define('SWOOLE_ERROR_WEBSOCKET_BAD_CLIENT', 8501);
define('SWOOLE_ERROR_WEBSOCKET_BAD_OPCODE', 8502);
define('SWOOLE_ERROR_WEBSOCKET_UNCONNECTED', 8503);
define('SWOOLE_ERROR_WEBSOCKET_HANDSHAKE_FAILED', 8504);
define('SWOOLE_ERROR_WEBSOCKET_PACK_FAILED', 8505);
define('SWOOLE_ERROR_WEBSOCKET_UNPACK_FAILED', 8506);
define('SWOOLE_ERROR_WEBSOCKET_INCOMPLETE_PACKET', 8507);
define('SWOOLE_ERROR_SERVER_MUST_CREATED_BEFORE_CLIENT', 9001);
define('SWOOLE_ERROR_SERVER_TOO_MANY_SOCKET', 9002);
define('SWOOLE_ERROR_SERVER_WORKER_TERMINATED', 9003);
define('SWOOLE_ERROR_SERVER_INVALID_LISTEN_PORT', 9004);
define('SWOOLE_ERROR_SERVER_TOO_MANY_LISTEN_PORT', 9005);
define('SWOOLE_ERROR_SERVER_PIPE_BUFFER_FULL', 9006);
define('SWOOLE_ERROR_SERVER_NO_IDLE_WORKER', 9007);
define('SWOOLE_ERROR_SERVER_ONLY_START_ONE', 9008);
define('SWOOLE_ERROR_SERVER_SEND_IN_MASTER', 9009);
define('SWOOLE_ERROR_SERVER_INVALID_REQUEST', 9010);
define('SWOOLE_ERROR_SERVER_CONNECT_FAIL', 9011);
define('SWOOLE_ERROR_SERVER_INVALID_COMMAND', 9012);
define('SWOOLE_ERROR_SERVER_IS_NOT_REGULAR_FILE', 9013);
define('SWOOLE_ERROR_SERVER_SEND_TO_WOKER_TIMEOUT', 9014);
define('SWOOLE_ERROR_SERVER_WORKER_EXIT_TIMEOUT', 9101);
define('SWOOLE_ERROR_SERVER_WORKER_ABNORMAL_PIPE_DATA', 9102);
define('SWOOLE_ERROR_SERVER_WORKER_UNPROCESSED_DATA', 9103);
define('SWOOLE_ERROR_CO_OUT_OF_COROUTINE', 10001);
define('SWOOLE_ERROR_CO_HAS_BEEN_BOUND', 10002);
define('SWOOLE_ERROR_CO_HAS_BEEN_DISCARDED', 10003);
define('SWOOLE_ERROR_CO_MUTEX_DOUBLE_UNLOCK', 10004);
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_LOCKED', 10005);
define('SWOOLE_ERROR_CO_BLOCK_OBJECT_WAITING', 10006);
define('SWOOLE_ERROR_CO_YIELD_FAILED', 10007);
define('SWOOLE_ERROR_CO_GETCONTEXT_FAILED', 10008);
define('SWOOLE_ERROR_CO_SWAPCONTEXT_FAILED', 10009);
define('SWOOLE_ERROR_CO_MAKECONTEXT_FAILED', 10010);
define('SWOOLE_ERROR_CO_IOCPINIT_FAILED', 10011);
define('SWOOLE_ERROR_CO_PROTECT_STACK_FAILED', 10012);
define('SWOOLE_ERROR_CO_STD_THREAD_LINK_ERROR', 10013);
define('SWOOLE_ERROR_CO_DISABLED_MULTI_THREAD', 10014);
define('SWOOLE_ERROR_CO_CANNOT_CANCEL', 10015);
define('SWOOLE_ERROR_CO_NOT_EXISTS', 10016);
define('SWOOLE_ERROR_CO_CANCELED', 10017);
define('SWOOLE_ERROR_CO_TIMEDOUT', 10018);
define('SWOOLE_TRACE_SERVER', 2);
define('SWOOLE_TRACE_CLIENT', 4);
define('SWOOLE_TRACE_BUFFER', 8);
define('SWOOLE_TRACE_CONN', 16);
define('SWOOLE_TRACE_EVENT', 32);
define('SWOOLE_TRACE_WORKER', 64);
define('SWOOLE_TRACE_MEMORY', 128);
define('SWOOLE_TRACE_REACTOR', 256);
define('SWOOLE_TRACE_PHP', 512);
define('SWOOLE_TRACE_HTTP', 1024);
define('SWOOLE_TRACE_HTTP2', 2048);
define('SWOOLE_TRACE_EOF_PROTOCOL', 4096);
define('SWOOLE_TRACE_LENGTH_PROTOCOL', 8192);
define('SWOOLE_TRACE_CLOSE', 16384);
define('SWOOLE_TRACE_WEBSOCKET', 32768);
define('SWOOLE_TRACE_REDIS_CLIENT', 65536);
define('SWOOLE_TRACE_MYSQL_CLIENT', 131072);
define('SWOOLE_TRACE_HTTP_CLIENT', 262144);
define('SWOOLE_TRACE_AIO', 524288);
define('SWOOLE_TRACE_SSL', 1048576);
define('SWOOLE_TRACE_NORMAL', 2097152);
define('SWOOLE_TRACE_CHANNEL', 4194304);
define('SWOOLE_TRACE_TIMER', 8388608);
define('SWOOLE_TRACE_SOCKET', 16777216);
define('SWOOLE_TRACE_COROUTINE', 33554432);
define('SWOOLE_TRACE_CONTEXT', 67108864);
define('SWOOLE_TRACE_CO_HTTP_SERVER', 134217728);
define('SWOOLE_TRACE_TABLE', 268435456);
define('SWOOLE_TRACE_CO_CURL', 536870912);
define('SWOOLE_TRACE_CARES', 1073741824);
define('SWOOLE_TRACE_ALL', 9223372036854775807);
define('SWOOLE_LOG_DEBUG', 0);
define('SWOOLE_LOG_TRACE', 1);
define('SWOOLE_LOG_INFO', 2);
define('SWOOLE_LOG_NOTICE', 3);
define('SWOOLE_LOG_WARNING', 4);
define('SWOOLE_LOG_ERROR', 5);
define('SWOOLE_LOG_NONE', 6);
define('SWOOLE_LOG_ROTATION_SINGLE', 0);
define('SWOOLE_LOG_ROTATION_MONTHLY', 1);
define('SWOOLE_LOG_ROTATION_DAILY', 2);
define('SWOOLE_LOG_ROTATION_HOURLY', 3);
define('SWOOLE_LOG_ROTATION_EVERY_MINUTE', 4);
define('SWOOLE_IPC_NONE', 0);
define('SWOOLE_IPC_UNIXSOCK', 1);
define('SWOOLE_IPC_SOCKET', 3);
define('SWOOLE_IOV_MAX', 1024);
define('SWOOLE_FILELOCK', 2);
define('SWOOLE_MUTEX', 3);
define('SWOOLE_SEM', 4);
define('SWOOLE_RWLOCK', 1);
define('SWOOLE_SPINLOCK', 5);
define('SIGHUP', 1);
define('SIGINT', 2);
define('SIGQUIT', 3);
define('SIGILL', 4);
define('SIGTRAP', 5);
define('SIGABRT', 6);
define('SIGBUS', 7);
define('SIGFPE', 8);
define('SIGKILL', 9);
define('SIGUSR1', 10);
define('SIGSEGV', 11);
define('SIGUSR2', 12);
define('SIGPIPE', 13);
define('SIGALRM', 14);
define('SIGTERM', 15);
#ifdef SIGSTKFLT
define('SIGSTKFLT', 16);
#endif
define('SIGCHLD', 17);
define('SIGCONT', 18);
define('SIGSTOP', 19);
define('SIGTSTP', 20);
define('SIGTTIN', 21);
define('SIGTTOU', 22);
define('SIGURG', 23);
define('SIGXCPU', 24);
define('SIGXFSZ', 25);
define('SIGVTALRM', 26);
define('SIGPROF', 27);
define('SIGWINCH', 28);
define('SIGIO', 29);
#ifdef SIGPWR
define('SIGPWR', 30);
#endif
#ifdef SIGSYS
define('SIGSYS', 31);
#endif
define('SIG_IGN', 1);
define('PRIO_PROCESS', 0);
define('PRIO_PGRP', 1);
define('PRIO_USER', 2);
define('SWOOLE_DEFAULT_MAX_CORO_NUM', 100000);
define('SWOOLE_CORO_MAX_NUM_LIMIT', 9223372036854775807);
define('SWOOLE_CORO_INIT', 0);
define('SWOOLE_CORO_WAITING', 1);
define('SWOOLE_CORO_RUNNING', 2);
define('SWOOLE_CORO_END', 3);
define('SWOOLE_EXIT_IN_COROUTINE', 2);
define('SWOOLE_EXIT_IN_SERVER', 4);

/*
 * Error codes of channels. They are used in method \Swoole\Coroutine\Channel::push() and \Swoole\Coroutine\Channel::pop() only.
 *
 * @see \Swoole\Coroutine\Channel::push()
 * @see \Swoole\Coroutine\Channel::pop()
 */
define('SWOOLE_CHANNEL_OK', 0);
define('SWOOLE_CHANNEL_TIMEOUT', -1);
define('SWOOLE_CHANNEL_CLOSED', -2);
define('SWOOLE_CHANNEL_CANCELED', -3);

define('SWOOLE_HOOK_TCP', 2);
define('SWOOLE_HOOK_UDP', 4);
define('SWOOLE_HOOK_UNIX', 8);
define('SWOOLE_HOOK_UDG', 16);
define('SWOOLE_HOOK_SSL', 32);
define('SWOOLE_HOOK_TLS', 64);
define('SWOOLE_HOOK_STREAM_FUNCTION', 128);
define('SWOOLE_HOOK_STREAM_SELECT', 128);
define('SWOOLE_HOOK_FILE', 256);
define('SWOOLE_HOOK_STDIO', 32768);
define('SWOOLE_HOOK_SLEEP', 512);
define('SWOOLE_HOOK_PROC', 1024);
define('SWOOLE_HOOK_CURL', 2048);
define('SWOOLE_HOOK_NATIVE_CURL', 4096);
define('SWOOLE_HOOK_BLOCKING_FUNCTION', 8192);
define('SWOOLE_HOOK_SOCKETS', 16384);
define('SWOOLE_HOOK_ALL', 2147481599);
define('SOCKET_ECANCELED', 125);
define('SWOOLE_HTTP_CLIENT_ESTATUS_CONNECT_FAILED', -1);
define('SWOOLE_HTTP_CLIENT_ESTATUS_REQUEST_TIMEOUT', -2);
define('SWOOLE_HTTP_CLIENT_ESTATUS_SERVER_RESET', -3);
define('SWOOLE_HTTP_CLIENT_ESTATUS_SEND_FAILED', -4);
define('SWOOLE_HTTP2_TYPE_DATA', 0);
define('SWOOLE_HTTP2_TYPE_HEADERS', 1);
define('SWOOLE_HTTP2_TYPE_PRIORITY', 2);
define('SWOOLE_HTTP2_TYPE_RST_STREAM', 3);
define('SWOOLE_HTTP2_TYPE_SETTINGS', 4);
define('SWOOLE_HTTP2_TYPE_PUSH_PROMISE', 5);
define('SWOOLE_HTTP2_TYPE_PING', 6);
define('SWOOLE_HTTP2_TYPE_GOAWAY', 7);
define('SWOOLE_HTTP2_TYPE_WINDOW_UPDATE', 8);
define('SWOOLE_HTTP2_TYPE_CONTINUATION', 9);
define('SWOOLE_HTTP2_ERROR_NO_ERROR', 0);
define('SWOOLE_HTTP2_ERROR_PROTOCOL_ERROR', 1);
define('SWOOLE_HTTP2_ERROR_INTERNAL_ERROR', 2);
define('SWOOLE_HTTP2_ERROR_FLOW_CONTROL_ERROR', 3);
define('SWOOLE_HTTP2_ERROR_SETTINGS_TIMEOUT', 4);
define('SWOOLE_HTTP2_ERROR_STREAM_CLOSED', 5);
define('SWOOLE_HTTP2_ERROR_FRAME_SIZE_ERROR', 6);
define('SWOOLE_HTTP2_ERROR_REFUSED_STREAM', 7);
define('SWOOLE_HTTP2_ERROR_CANCEL', 8);
define('SWOOLE_HTTP2_ERROR_COMPRESSION_ERROR', 9);
define('SWOOLE_HTTP2_ERROR_CONNECT_ERROR', 10);
define('SWOOLE_HTTP2_ERROR_ENHANCE_YOUR_CALM', 11);
define('SWOOLE_HTTP2_ERROR_INADEQUATE_SECURITY', 12);
define('SWOOLE_BASE', 1);
define('SWOOLE_PROCESS', 2);
define('SWOOLE_IPC_UNSOCK', 1);
define('SWOOLE_IPC_MSGQUEUE', 2);
define('SWOOLE_IPC_PREEMPTIVE', 3);
define('SWOOLE_SERVER_COMMAND_MASTER', 2);
define('SWOOLE_SERVER_COMMAND_MANAGER', 32);
define('SWOOLE_SERVER_COMMAND_REACTOR_THREAD', 4);
define('SWOOLE_SERVER_COMMAND_EVENT_WORKER', 8);
define('SWOOLE_SERVER_COMMAND_WORKER', 8);
define('SWOOLE_SERVER_COMMAND_TASK_WORKER', 16);
define('SWOOLE_DISPATCH_ROUND', 1);
define('SWOOLE_DISPATCH_FDMOD', 2);
define('SWOOLE_DISPATCH_IDLE_WORKER', 3);
define('SWOOLE_DISPATCH_IPMOD', 4);
define('SWOOLE_DISPATCH_UIDMOD', 5);
define('SWOOLE_DISPATCH_USERFUNC', 6);
define('SWOOLE_DISPATCH_STREAM', 7);
define('SWOOLE_DISPATCH_CO_CONN_LB', 8);
define('SWOOLE_DISPATCH_CO_REQ_LB', 9);
define('SWOOLE_DISPATCH_CONCURRENT_LB', 10);
define('SWOOLE_DISPATCH_RESULT_DISCARD_PACKET', -1);
define('SWOOLE_DISPATCH_RESULT_CLOSE_CONNECTION', -2);
define('SWOOLE_DISPATCH_RESULT_USERFUNC_FALLBACK', -3);
define('SWOOLE_TASK_TMPFILE', 1);
define('SWOOLE_TASK_SERIALIZE', 2);
define('SWOOLE_TASK_NONBLOCK', 4);
define('SWOOLE_TASK_CALLBACK', 8);
define('SWOOLE_TASK_WAITALL', 16);
define('SWOOLE_TASK_COROUTINE', 32);
define('SWOOLE_TASK_PEEK', 64);
define('SWOOLE_TASK_NOREPLY', 128);
define('SWOOLE_WORKER_BUSY', 1);
define('SWOOLE_WORKER_IDLE', 2);
define('SWOOLE_WORKER_EXIT', 3);
define('SWOOLE_WEBSOCKET_STATUS_CONNECTION', 1);
define('SWOOLE_WEBSOCKET_STATUS_HANDSHAKE', 2);
define('SWOOLE_WEBSOCKET_STATUS_ACTIVE', 3);
define('SWOOLE_WEBSOCKET_STATUS_CLOSING', 4);
define('SWOOLE_WEBSOCKET_OPCODE_CONTINUATION', 0);
define('SWOOLE_WEBSOCKET_OPCODE_TEXT', 1);
define('SWOOLE_WEBSOCKET_OPCODE_BINARY', 2);
define('SWOOLE_WEBSOCKET_OPCODE_CLOSE', 8);
define('SWOOLE_WEBSOCKET_OPCODE_PING', 9);
define('SWOOLE_WEBSOCKET_OPCODE_PONG', 10);
define('SWOOLE_WEBSOCKET_FLAG_FIN', 1);
define('SWOOLE_WEBSOCKET_FLAG_RSV1', 4);
define('SWOOLE_WEBSOCKET_FLAG_RSV2', 8);
define('SWOOLE_WEBSOCKET_FLAG_RSV3', 16);
define('SWOOLE_WEBSOCKET_FLAG_MASK', 32);
define('SWOOLE_WEBSOCKET_FLAG_COMPRESS', 2);
define('SWOOLE_WEBSOCKET_CLOSE_NORMAL', 1000);
define('SWOOLE_WEBSOCKET_CLOSE_GOING_AWAY', 1001);
define('SWOOLE_WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);
define('SWOOLE_WEBSOCKET_CLOSE_DATA_ERROR', 1003);
define('SWOOLE_WEBSOCKET_CLOSE_STATUS_ERROR', 1005);
define('SWOOLE_WEBSOCKET_CLOSE_ABNORMAL', 1006);
define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);
define('SWOOLE_WEBSOCKET_CLOSE_POLICY_ERROR', 1008);
define('SWOOLE_WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);
define('SWOOLE_WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);
define('SWOOLE_WEBSOCKET_CLOSE_SERVER_ERROR', 1011);
define('SWOOLE_WEBSOCKET_CLOSE_TLS', 1015);
define('WEBSOCKET_STATUS_CONNECTION', 1);
define('WEBSOCKET_STATUS_HANDSHAKE', 2);
define('WEBSOCKET_STATUS_FRAME', 3);
define('WEBSOCKET_STATUS_ACTIVE', 3);
define('WEBSOCKET_STATUS_CLOSING', 4);
define('WEBSOCKET_OPCODE_CONTINUATION', 0);
define('WEBSOCKET_OPCODE_TEXT', 1);
define('WEBSOCKET_OPCODE_BINARY', 2);
define('WEBSOCKET_OPCODE_CLOSE', 8);
define('WEBSOCKET_OPCODE_PING', 9);
define('WEBSOCKET_OPCODE_PONG', 10);
define('WEBSOCKET_CLOSE_NORMAL', 1000);
define('WEBSOCKET_CLOSE_GOING_AWAY', 1001);
define('WEBSOCKET_CLOSE_PROTOCOL_ERROR', 1002);
define('WEBSOCKET_CLOSE_DATA_ERROR', 1003);
define('WEBSOCKET_CLOSE_STATUS_ERROR', 1005);
define('WEBSOCKET_CLOSE_ABNORMAL', 1006);
define('WEBSOCKET_CLOSE_MESSAGE_ERROR', 1007);
define('WEBSOCKET_CLOSE_POLICY_ERROR', 1008);
define('WEBSOCKET_CLOSE_MESSAGE_TOO_BIG', 1009);
define('WEBSOCKET_CLOSE_EXTENSION_MISSING', 1010);
define('WEBSOCKET_CLOSE_SERVER_ERROR', 1011);
define('WEBSOCKET_CLOSE_TLS', 1015);

/*
 * The minimum number of milliseconds that can be used for time-related operations (e.g., timeout, time intervals, etc)
 * in Swoole.
 */
define('SWOOLE_TIMER_MIN_MS', 1);
/*
 * The minimum number of seconds that can be used for time-related operations (e.g., timeout, time intervals, etc) in
 * Swoole.
 */
define('SWOOLE_TIMER_MIN_SEC', 0.001);
/*
 * The maximum number of milliseconds that can be used for time-related operations (e.g., timeout, time intervals, etc)
 * in Swoole. It equals to the maximum signed long integer that the system can hold, and it varies among different systems.
 */
define('SWOOLE_TIMER_MAX_MS', 9223372036854775807);
/*
 * The maximum number of seconds that can be used for time-related operations (e.g., timeout, time intervals, etc) in
 * Swoole. It equals to `(float) SWOOLE_TIMER_MAX_MS / 1000`.
 */
define('SWOOLE_TIMER_MAX_SEC', 9.2233720368548E+15);

/*
 * Constants in this section are used in class \Swoole\Coroutine\PostgreSQLStatement only. They are available only when
 * Swoole is installed with option "--enable-swoole-pgsql" included.
 */
/*
 * @since 5.0.0
 */
define('SW_PGSQL_ASSOC', 1);
/*
 * @since 5.0.0
 */
define('SW_PGSQL_NUM', 2);
/*
 * @since 5.0.0
 */
define('SW_PGSQL_BOTH', 3);

/*
 * Constants in this section are available only when OpenSSL support is enabled (i.e., when Swoole is installed with
 * configuration option "--enable-openssl" included).
 */
#ifdef SW_USE_OPENSSL
define('SWOOLE_SSL', 512);
define('SWOOLE_SSLv3_METHOD', 1);
define('SWOOLE_SSLv3_SERVER_METHOD', 2);
define('SWOOLE_SSLv3_CLIENT_METHOD', 3);
define('SWOOLE_TLSv1_METHOD', 6);
define('SWOOLE_TLSv1_SERVER_METHOD', 7);
define('SWOOLE_TLSv1_CLIENT_METHOD', 8);

#ifdef TLS1_1_VERSION
define('SWOOLE_TLSv1_1_METHOD', 9);
define('SWOOLE_TLSv1_1_SERVER_METHOD', 10);
define('SWOOLE_TLSv1_1_CLIENT_METHOD', 11);
#endif

#ifdef TLS1_2_VERSION
define('SWOOLE_TLSv1_2_METHOD', 12);
define('SWOOLE_TLSv1_2_SERVER_METHOD', 13);
define('SWOOLE_TLSv1_2_CLIENT_METHOD', 14);
#endif

#ifdef SW_SUPPORT_DTLS
define('SWOOLE_DTLS_SERVER_METHOD', 16);
define('SWOOLE_DTLS_CLIENT_METHOD', 15);
#endif

define('SWOOLE_SSLv23_METHOD', 0);
define('SWOOLE_SSLv23_SERVER_METHOD', 4);
define('SWOOLE_SSLv23_CLIENT_METHOD', 5);
define('SWOOLE_TLS_METHOD', 0);
define('SWOOLE_TLS_SERVER_METHOD', 4);
define('SWOOLE_TLS_CLIENT_METHOD', 5);

define('SWOOLE_SSL_SSLv2', 2);

#ifdef HAVE_SSL3
define('SWOOLE_SSL_SSLv3', 4);
#endif

define('SWOOLE_SSL_TLSv1', 8);

#ifdef TLS1_1_VERSION
define('SWOOLE_SSL_TLSv1_1', 16);
#endif

#ifdef TLS1_2_VERSION
define('SWOOLE_SSL_TLSv1_2', 32);
#endif

#ifdef TLS1_3_VERSION
define('SWOOLE_SSL_TLSv1_3', 64);
#endif

#ifdef SW_SUPPORT_DTLS
define('SWOOLE_SSL_DTLS', 128);
#endif
#endif /* SW_USE_OPENSSL */

/*
 * Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0. Please use PDO_MySQL or mysqli on top of the
 * mysqlnd library, with runtime hook SWOOLE_HOOK_TCP or SWOOLE_HOOK_ALL turned on.
 */
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_UNKNOWN_ERROR', 2000);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_CONNECTION_ERROR', 2002);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_SERVER_GONE_ERROR', 2006);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_OUT_OF_MEMORY', 2008);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_SERVER_LOST', 2013);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_COMMANDS_OUT_OF_SYNC', 2014);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_CANT_FIND_CHARSET', 2019);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_MALFORMED_PACKET', 2027);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_NOT_IMPLEMENTED', 2054);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_NO_PREPARE_STMT', 2030);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_PARAMS_NOT_BOUND', 2031);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_INVALID_PARAMETER_NO', 2034);
/*
 * @deprecated 5.0.0 Coroutine-version of the MySQL driver is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_MYSQLND_CR_INVALID_BUFFER_USE', 2035);

/*
 * Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0. Please use phpredis (the PHP extension for Redis)
 * instead, with runtime hook SWOOLE_HOOK_TCP or SWOOLE_HOOK_ALL turned on.
 */
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_MODE_MULTI', 0);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_MODE_PIPELINE', 1);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_NOT_FOUND', 0);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_STRING', 1);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_SET', 2);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_LIST', 3);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_ZSET', 4);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_TYPE_HASH', 5);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_IO', 1);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_OTHER', 2);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_EOF', 3);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_PROTOCOL', 4);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_OOM', 5);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_CLOSED', 6);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_NOAUTH', 7);
/*
 * @deprecated 5.0.0 Class \Swoole\Coroutine\Redis is deprecated in Swoole 5.0.0.
 */
define('SWOOLE_REDIS_ERR_ALLOC', 8);
