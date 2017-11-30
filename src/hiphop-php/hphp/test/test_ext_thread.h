/*
   +----------------------------------------------------------------------+
   | HipHop for PHP                                                       |
   +----------------------------------------------------------------------+
   | Copyright (c) 2010- Facebook, Inc. (http://www.facebook.com)         |
   +----------------------------------------------------------------------+
   | This source file is subject to version 3.01 of the PHP license,      |
   | that is bundled with this package in the file LICENSE, and is        |
   | available through the world-wide-web at the following url:           |
   | http://www.php.net/license/3_01.txt                                  |
   | If you did not receive a copy of the PHP license and are unable to   |
   | obtain it through the world-wide-web, please send a note to          |
   | license@php.net so we can mail you a copy immediately.               |
   +----------------------------------------------------------------------+
*/

#ifndef __TEST_EXT_THREAD_H__
#define __TEST_EXT_THREAD_H__

// >>>>>> Generated by idl.php. Do NOT modify. <<<<<<

#include <test/test_cpp_ext.h>

///////////////////////////////////////////////////////////////////////////////

class TestExtThread : public TestCppExt {
 public:
  virtual bool RunTests(const std::string &which);

  bool test_hphp_is_service_thread();
  bool test_hphp_service_thread_started();
  bool test_hphp_service_thread_stopped();
  bool test_hphp_thread_is_warmup_enabled();
  bool test_hphp_thread_set_warmup_enabled();
  bool test_hphp_get_thread_id();
};

///////////////////////////////////////////////////////////////////////////////

#endif // __TEST_EXT_THREAD_H__
