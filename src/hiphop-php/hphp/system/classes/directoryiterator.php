<?php

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/class.directoryiterator.php )
 *
 * The DirectoryIterator class provides a simple interface for viewing the
 * contents of filesystem directories.
 *
 */
class DirectoryIterator extends SplFileInfo implements Traversable,
  SeekableIterator {

  public function __construct($path) {
    if (!hphp_directoryiterator___construct($this, $path)) {
      throw new UnexpectedValueException(
          "DirectoryIterator::__construct($path): failed to open dir");
    }
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.current.php )
 *
 * Get the current DirectoryIterator item.
 *
 * @return     mixed   The current DirectoryIterator item.
 */
  public function current() {
    return hphp_directoryiterator_current($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.key.php )
 *
 * Get the key for the current DirectoryIterator item.
 *
 * @return     mixed   The key for the current DirectoryIterator item.
 */
  public function key() {
    return hphp_directoryiterator_key($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.next.php )
 *
 * Move forward to the next DirectoryIterator item.
 *
 * @return     mixed   No value is returned.
 */
  public function next() {
    hphp_directoryiterator_next($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.rewind.php )
 *
 * Rewind the DirectoryIterator back to the start.
 *
 * @return     mixed   No value is returned.
 */
  public function rewind() {
    hphp_directoryiterator_rewind($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.seek.php )
 *
 * Seek to a given position in the DirectoryIterator.
 *
 * @position   mixed   The zero-based numeric position to seek to.
 *
 * @return     mixed   No value is returned.
 */
  public function seek($position) {
    hphp_directoryiterator_seek($this, $position);
  }

  public function __toString() {
    return hphp_directoryiterator___tostring($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.valid.php )
 *
 * Check whether current DirectoryIterator position is a valid file.
 *
 * @return     mixed   Returns TRUE if the position is valid, otherwise
 *                     FALSE
 */
  public function valid() {
    return hphp_directoryiterator_valid($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from http://php.net/manual/en/directoryiterator.isdot.php )
 *
 * Determines if the current DirectoryIterator item is a directory and
 * either . or ...
 *
 * @return     mixed   TRUE if the entry is . or .., otherwise FALSE
 */
  public function isDot() {
    return hphp_directoryiterator_isdot($this);
  }
}

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/class.recursivedirectoryiterator.php )
 *
 * ...
 *
 */
class RecursiveDirectoryIterator extends DirectoryIterator
  implements RecursiveIterator {
  
  const CURRENT_AS_SELF     = 0x0;
  const CURRENT_AS_FILEINFO = 0x00000010;
  const CURRENT_AS_PATHNAME = 0x00000020;
  const KEY_AS_PATHNAME     = 0x0;
  const KEY_AS_FILENAME     = 0x00000100;
  const NEW_CURRENT_AND_KEY = 0x00000110;

  function __construct($path,
    $flags = RecursiveDirectoryIterator::CURRENT_AS_FILEINFO) {
    if (!hphp_recursivedirectoryiterator___construct($this, $path, $flags)) {
      throw new UnexpectedValueException(
          "RecursiveDirectoryIterator::__construct($path): failed to open dir");
    }
  }

  function current() {
    return hphp_recursivedirectoryiterator_current($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.key.php )
 *
 *
 * @return     mixed   The path and filename of the current dir entry.
 */
  function key() {
    return hphp_recursivedirectoryiterator_key($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.next.php )
 *
 *
 * @return     mixed   No value is returned.
 */
  public function next() {
    hphp_recursivedirectoryiterator_next($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.rewind.php )
 *
 *
 * @return     mixed   No value is returned.
 */
  public function rewind() {
    hphp_recursivedirectoryiterator_rewind($this);
  }

  public function seek($position) {
    hphp_recursivedirectoryiterator_seek($this, $position);
  }

  public function __toString() {
    return hphp_recursivedirectoryiterator___toString($this);
  }

  public function valid() {
    return hphp_recursivedirectoryiterator_valid($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.haschildren.php )
 *
 *
 * @return     mixed   Returns whether the current entry is a directory,
 *                     but not '.' or '..'
 */
  function hasChildren() {
    return hphp_recursivedirectoryiterator_haschildren($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.getchildren.php )
 *
 *
 * @return     mixed   An iterator for the current entry, if it is a
 *                     directory.
 */
  function getChildren() {
    return hphp_recursivedirectoryiterator_getchildren($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.getsubpath.php )
 *
 * Gets the sub path. WarningThis function is currently not documented;
 * only its argument list is available.
 *
 * @return     mixed   The sub path (sub directory).
 */
  function getSubPath() {
    return hphp_recursivedirectoryiterator_getsubpath($this);
  }

// Do NOT modifiy this doc comment block generated by idl/sysdoc.php
/**
 * ( excerpt from
 * http://php.net/manual/en/recursivedirectoryiterator.getsubpathname.php )
 *
 * Gets the sub path and filename. WarningThis function is currently not
 * documented; only its argument list is available.
 *
 * @return     mixed   The sub path (sub directory) and filename.
 */
  function getSubPathname() {
    return hphp_recursivedirectoryiterator_getsubpathname($this);
  }
}

