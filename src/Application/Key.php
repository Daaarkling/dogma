<?php declare(strict_types = 1);
/**
 * This file is part of the Dogma library (https://github.com/paranoiq/dogma)
 *
 * Copyright (c) 2012 Vlasta Neubauer (@paranoiq)
 *
 * For the full copyright and license information read the file 'license.md', distributed with this source code
 */

namespace Dogma\Application;

use Dogma\StaticClassMixin;

/**
 * Keyboard scan codes
 *
 * https://gist.github.com/MightyPork/6da26e382a7ad91b5496ee55fdc73db2
 */
class Key
{
    use StaticClassMixin;

    public const NONE = 0x00;
    public const ERR_OVF = 0x01; // Error Roll Over
    public const ERR_POST_FAIL = 0x02; // POST Fail
    public const ERR_UNDEFINED = 0x03; // Error Undefined

    // letters
    public const A = 0x04;
    public const B = 0x05;
    public const C = 0x06;
    public const D = 0x07;
    public const E = 0x08;
    public const F = 0x09;
    public const G = 0x0a;
    public const H = 0x0b;
    public const I = 0x0c;
    public const J = 0x0d;
    public const K = 0x0e;
    public const L = 0x0f;
    public const M = 0x10;
    public const N = 0x11;
    public const O = 0x12;
    public const P = 0x13;
    public const Q = 0x14;
    public const R = 0x15;
    public const S = 0x16;
    public const T = 0x17;
    public const U = 0x18;
    public const V = 0x19;
    public const W = 0x1a;
    public const X = 0x1b;
    public const Y = 0x1c;
    public const Z = 0x1d;

    // number keys
    public const KEY_1 = 0x1e; // +
    public const KEY_2 = 0x1f; // @
    public const KEY_3 = 0x20; // #
    public const KEY_4 = 0x21; // $
    public const KEY_5 = 0x22; // %
    public const KEY_6 = 0x23; // ^
    public const KEY_7 = 0x24; // &
    public const KEY_8 = 0x25; // *
    public const KEY_9 = 0x26; // '
    public const KEY_0 = 0x27; // "

    // special keys
    public const ENTER = 0x28;
    public const ESC = 0x29;
    public const BACKSPACE = 0x2a;
    public const TAB = 0x2b;
    public const SPACE = 0x2c;
    public const MINUS_UNDER = 0x2d; // - _
    public const EQUAL_PLUS = 0x2e; // = +
    public const LEFT_BRACE = 0x2f; // [ {
    public const RIGHT_BRACE = 0x30; // ] }
    public const BACKSLASH = 0x31; // \ |
    public const HASH_TILDE = 0x32; // Non-US # ~
    public const SEMICOLON = 0x33; // ; :
    public const APOSTROPHE = 0x34; // ' "
    public const GRAVE_TILDE = 0x35; // ` ~
    public const COMMA = 0x36; // , <
    public const DOT = 0x37; // . >
    public const SLASH = 0x38; // / ?

    public const CAPS_LOCK = 0x39;

    // F keys
    public const F1 = 0x3a;
    public const F2 = 0x3b;
    public const F3 = 0x3c;
    public const F4 = 0x3d;
    public const F5 = 0x3e;
    public const F6 = 0x3f;
    public const F7 = 0x40;
    public const F8 = 0x41;
    public const F9 = 0x42;
    public const F10 = 0x43;
    public const F11 = 0x44;
    public const F12 = 0x45;

    // function keys
    public const PRINT_SCREEN_SYS_RQ = 0x46;
    public const SCROLL_LOCK = 0x47;
    public const PAUSE = 0x48;
    public const INSERT = 0x49;
    public const HOME = 0x4a;
    public const PAGE_UP = 0x4b;
    public const DELETE = 0x4c;
    public const END = 0x4d;
    public const PAGE_DOWN = 0x4e;
    public const RIGHT_ARROW = 0x4f;
    public const LEFT_ARROW = 0x50;
    public const DOWN_ARROW = 0x51;
    public const UP_ARROW = 0x52;

    // numpad keys
    public const NUM_LOCK_CLEAR = 0x53;
    public const KP_SLASH = 0x54;
    public const KP_ASTERISK = 0x55;
    public const KP_MINUS = 0x56;
    public const KP_PLUS = 0x57;
    public const KP_ENTER = 0x58;
    public const KP_1_END = 0x59;
    public const KP_2_DOWN = 0x5a;
    public const KP_3_PG_DN = 0x5b;
    public const KP_4_LEFT = 0x5c;
    public const KP_5 = 0x5d;
    public const KP_6_RIGHT = 0x5e;
    public const KP_7_HOME = 0x5f;
    public const KP_8_UP = 0x60;
    public const KP_9_PG_UP = 0x61;
    public const KP_0_INSERT = 0x62;
    public const KP_DOT_DELETE = 0x63;

    // misc
    public const KEY_102 = 0x64; // Non-US \ |
    public const COMPOSE = 0x65; // Application
    public const POWER = 0x66;
    public const KP_EQUAL = 0x67;

    // F keys
    public const F13 = 0x68;
    public const F14 = 0x69;
    public const F15 = 0x6a;
    public const F16 = 0x6b;
    public const F17 = 0x6c;
    public const F18 = 0x6d;
    public const F19 = 0x6e;
    public const F20 = 0x6f;
    public const F21 = 0x70;
    public const F22 = 0x71;
    public const F23 = 0x72;
    public const F24 = 0x73;

    // action keys
    public const OPEN = 0x74;
    public const HELP = 0x75;
    public const MENU = 0x76;
    public const SELECT = 0x77;
    public const STOP = 0x78;
    public const AGAIN = 0x79;
    public const UNDO = 0x7a;
    public const CUT = 0x7b;
    public const COPY = 0x7c;
    public const PASTE = 0x7d;
    public const FIND = 0x7e;

    // media keys
    public const MUTE = 0x7f;
    public const VOLUME_UP = 0x80;
    public const VOLUME_DOWN = 0x81;

    //public const CAPS_LOCK = 0x82; // Locking Caps Lock
    public const NUM_LOCK = 0x83; // Locking Num Lock
    //public const SCROLL_LOCK = 0x84; // Locking Scroll Lock
    public const KP_COMMA = 0x85; // Keypad Comma
    //public const KP_EQUAL = 0x86; // Keypad Equal Sign

    // international
    public const RO = 0x87; // International1
    public const KATAKANA_HIRAGANA = 0x88; // International2
    public const YEN = 0x89; // International3
    public const HEN_KAN = 0x8a; // International4
    public const MU_HEN_KAN = 0x8b; // International5
    public const KP_JP_COMMA = 0x8c; // International6
    public const INTERNATIONAL_7 = 0x8d; // International7
    public const INTERNATIONAL_8 = 0x8e; // International8
    public const INTERNATIONAL_9 = 0x8f; // International9
    public const HANGEUL = 0x90; // LANG1
    public const HANJA = 0x91; // LANG2
    public const KATAKANA = 0x92; // LANG3
    public const HIRAGANA = 0x93; // LANG4
    public const ZENKAKU_HANKAKU = 0x94; // LANG5
    public const LANG_6 = 0x95; // LANG6
    public const LANG_7 = 0x96; // LANG7
    public const LANG_8 = 0x97; // LANG8
    public const LANG_9 = 0x98; // LANG9

    // historical
    public const ALTERNATE_ERASE = 0x99; // Alternate Erase
    public const SYS_REQ = 0x9a; // SysReq/Attention
    public const CANCEL = 0x9b; // Cancel
    public const CLEAR = 0x9c; // Clear
    public const PRIOR = 0x9d; // Prior
    public const RETURN = 0x9e; // Return
    public const SEPARATOR = 0x9f; // Separator
    public const OUT = 0xa0; // Out
    public const OPERATOR = 0xa1; // Oper
    public const CLEAR_AGAIN = 0xa2; // Clear/Again
    public const CR_SEL = 0xa3; // CrSel/Props
    public const EX_SEL = 0xa4; // ExSel

    // extended keypad keys
    public const KP_00 = 0xb0; // Keypad 00
    public const KP_000 = 0xb1; // Keypad 000
    public const KP_THOUSANDS_SEPARATOR = 0xb2; // Thousands Separator
    public const KP_DECIMAL_SEPARATOR = 0xb3; // Decimal Separator
    public const KP_CURRENCY_UNIT = 0xb4; // Currency Unit
    public const KP_CURRENCY_SUBUNIT = 0xb5; // Currency Sub-unit
    public const KP_LEFT_PAREN = 0xb6; // Keypad (
    public const KP_RIGHT_PAREN = 0xb7; // Keypad )
    public const KP_LEFT_BRACE = 0xb8; // Keypad {
    public const KP_RIGHT_BRACE = 0xb9; // Keypad }
    public const KP_TAB = 0xba; // Keypad Tab
    public const KP_BACKSPACE = 0xbb; // Keypad Backspace
    public const KP_A = 0xbc; // Keypad A
    public const KP_B = 0xbd; // Keypad B
    public const KP_C = 0xbe; // Keypad C
    public const KP_D = 0xbf; // Keypad D
    public const KP_E = 0xc0; // Keypad E
    public const KP_F = 0xc1; // Keypad F
    public const KP_XOR = 0xc2; // Keypad XOR
    public const KP_CIRCUMFLEX = 0xc3; // Keypad ^
    public const KP_PERCENT = 0xc4; // Keypad %
    public const KP_LOWER_THAN = 0xc5; // Keypad <
    public const KP_HIGHER_THEN = 0xc6; // Keypad >
    public const KP_AND = 0xc7; // Keypad &
    public const KP_DOUBLE_AND = 0xc8; // Keypad &&
    public const KP_OR = 0xc9; // Keypad |
    public const KP_DOUBLE_OR = 0xca; // Keypad ||
    public const KP_COLON = 0xcb; // Keypad :
    public const KP_HASH = 0xcc; // Keypad #
    public const KP_SPACE = 0xcd; // Keypad Space
    public const KP_AT = 0xce; // Keypad @
    public const KP_EXCLAMATION = 0xcf; // Keypad !
    public const KP_MEMORY_STORE = 0xd0; // Keypad Memory Store
    public const KP_MEMORY_RECALL = 0xd1; // Keypad Memory Recall
    public const KP_MEMORY_CLEAR = 0xd2; // Keypad Memory Clear
    public const KP_MEMORY_ADD = 0xd3; // Keypad Memory Add
    public const KP_MEMORY_SUBTRACT = 0xd4; // Keypad Memory Subtract
    public const KP_MEMORY_MULTIPLY = 0xd5; // Keypad Memory Multiply
    public const KP_MEMORY_DIVIDE = 0xd6; // Keypad Memory Divide
    public const KP_PLUS_MINUS = 0xd7; // Keypad +/-
    public const KP_CLEAR = 0xd8; // Keypad Clear
    public const KP_CLEAR_ENTRY = 0xd9; // Keypad Clear Entry
    public const KP_BINARY = 0xda; // Keypad Binary
    public const KP_OCTAL = 0xdb; // Keypad Octal
    public const KP_DECIMAL = 0xdc; // Keypad Decimal
    public const KP_HEXADECIMAL = 0xdd; // Keypad Hexadecimal

    // modifier keys
    public const LEFT_CTRL = 0xe0;
    public const LEFT_SHIFT = 0xe1;
    public const LEFT_ALT = 0xe2;
    public const LEFT_META = 0xe3;
    public const RIGHT_CTRL = 0xe4;
    public const RIGHT_SHIFT = 0xe5;
    public const RIGHT_ALT = 0xe6;
    public const RIGHT_META = 0xe7;

    // media keys
    public const MEDIA_PLAY_PAUSE = 0xe8;
    public const MEDIA_STOP_CD = 0xe9;
    public const MEDIA_PREVIOUS_SONG = 0xea;
    public const MEDIA_NEXT_SONG = 0xeb;
    public const MEDIA_EJECT_CD = 0xec;
    public const MEDIA_VOLUME_UP = 0xed;
    public const MEDIA_VOLUME_DOWN = 0xee;
    public const MEDIA_MUTE = 0xef;
    public const MEDIA_WWW = 0xf0;
    public const MEDIA_BACK = 0xf1;
    public const MEDIA_FORWARD = 0xf2;
    public const MEDIA_STOP = 0xf3;
    public const MEDIA_FIND = 0xf4;
    public const MEDIA_SCROLL_UP = 0xf5;
    public const MEDIA_SCROLL_DOWN = 0xf6;
    public const MEDIA_EDIT = 0xf7;
    public const MEDIA_SLEEP = 0xf8;
    public const MEDIA_COFFEE = 0xf9;
    public const MEDIA_REFRESH = 0xfa;
    public const MEDIA_CALC = 0xfb;

}
