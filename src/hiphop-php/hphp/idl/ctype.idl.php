<?php
/**
 * Automatically generated by running "php schema.php ctype".
 *
 * You may modify the file, but re-running schema.php against this file will
 * standardize the format without losing your schema changes. It does lose
 * any changes that are not part of schema. Use "note" field to comment on
 * schema itself, and "note" fields are not used in any code generation but
 * only staying within this file.
 */
///////////////////////////////////////////////////////////////////////////////
// Preamble: C++ code inserted at beginning of ext_{name}.h

DefinePreamble(<<<CPP

CPP
);

///////////////////////////////////////////////////////////////////////////////
// Constants
//
// array (
//   'name' => name of the constant
//   'type' => type of the constant
//   'note' => additional note about this constant's schema
// )


///////////////////////////////////////////////////////////////////////////////
// Functions
//
// array (
//   'name'   => name of the function
//   'desc'   => description of the function's purpose
//   'flags'  => attributes of the function, see base.php for possible values
//   'opt'    => optimization callback function's name for compiler
//   'note'   => additional note about this function's schema
//   'return' =>
//      array (
//        'type'  => return type, use Reference for ref return
//        'desc'  => description of the return value
//      )
//   'args'   => arguments
//      array (
//        'name'  => name of the argument
//        'type'  => type of the argument, use Reference for output parameter
//        'value' => default value of the argument
//        'desc'  => description of the argument
//      )
// )

DefineFunction(
  array(
    'name'   => "ctype_alnum",
    'desc'   => "Checks if all of the characters in the provided string, text, are alphanumeric. In the standard C locale letters are just [A-Za-z].",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is either a letter or a digit, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_alpha",
    'desc'   => "Checks if all of the characters in the provided string, text, are alphabetic. In the standard C locale letters are just [A-Za-z] and ctype_alpha() is equivalent to (ctype_upper(\$text) || ctype_lower(\$text)) if \$text is just a single character, but other languages have letters that are considered neither upper nor lower case.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is a letter from the current locale, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_cntrl",
    'desc'   => "Checks if all of the characters in the provided string, text, are control characters. Control characters are e.g. line feed, tab, escape.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is a control character from the current locale, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_digit",
    'desc'   => "Checks if all of the characters in the provided string, text, are numerical.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in the string text is a decimal digit, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_graph",
    'desc'   => "Checks if all of the characters in the provided string, text, creates visible output.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is printable and actually creates visible output (no white space), FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_lower",
    'desc'   => "Checks if all of the characters in the provided string, text, are lowercase letters.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is a lowercase letter in the current locale.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_print",
    'desc'   => "Checks if all of the characters in the provided string, text, are printable.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text will actually create output (including blanks). Returns FALSE if text contains control characters or characters that do not have any output or control function at all.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_punct",
    'desc'   => "Checks if all of the characters in the provided string, text, are punctuation character.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is printable, but neither letter, digit or blank, FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_space",
    'desc'   => "Checks if all of the characters in the provided string, text, creates whitespace.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text creates some sort of white space, FALSE otherwise. Besides the blank character this also includes tab, vertical tab, line feed, carriage return and form feed characters.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_upper",
    'desc'   => "Checks if all of the characters in the provided string, text, are uppercase characters.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is an uppercase letter in the current locale.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));

DefineFunction(
  array(
    'name'   => "ctype_xdigit",
    'desc'   => "Checks if all of the characters in the provided string, text, are hexadecimal 'digits'.",
    'flags'  =>  HasDocComment,
    'return' => array(
      'type'   => Boolean,
      'desc'   => "Returns TRUE if every character in text is a hexadecimal 'digit', that is a decimal digit or a character from [A-Fa-f] , FALSE otherwise.",
    ),
    'args'   => array(
      array(
        'name'   => "text",
        'type'   => Variant,
        'desc'   => "The tested string.",
      ),
    ),
    'taint_observer' => false,
  ));


///////////////////////////////////////////////////////////////////////////////
// Classes
//
// BeginClass
// array (
//   'name'   => name of the class
//   'desc'   => description of the class's purpose
//   'flags'  => attributes of the class, see base.php for possible values
//   'note'   => additional note about this class's schema
//   'parent' => parent class name, if any
//   'ifaces' => array of interfaces tihs class implements
//   'bases'  => extra internal and special base classes this class requires
//   'footer' => extra C++ inserted at end of class declaration
// )
//
// DefineConstant(..)
// DefineConstant(..)
// ...
// DefineFunction(..)
// DefineFunction(..)
// ...
// DefineProperty
// DefineProperty
//
// array (
//   'name'  => name of the property
//   'type'  => type of the property
//   'flags' => attributes of the property
//   'desc'  => description of the property
//   'note'  => additional note about this property's schema
// )
//
// EndClass()
