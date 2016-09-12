<?php
/** 
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} 
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni 
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define('DB_NAME', 'bodoart');

/** MySQL felhasználónév */
define('DB_USER', 'bodoart');

/** MySQL jelszó. */
define('DB_PASSWORD', 'muF4dBAf,CedU<=H');

/** MySQL  kiszolgáló neve */
define('DB_HOST', 'localhost');

/** Az adatbázis karakter kódolása */
define('DB_CHARSET', 'utf8mb4');

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról. 
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '^z-AYMF4XdhtS..NkwI$|mKS0B{fY;EsG^}b*H4iGax~pU@M|pAKkI]z;A&5{sE$');
define('SECURE_AUTH_KEY', 'p-4]t4Tp3ylM46V?)2YvwJ}I#3r)EjG:jc1*l`@C?Pf@0de[08?{$]#4i~qvT)`f');
define('LOGGED_IN_KEY', 'e8F~r%+^J2uGYV(c,T<bdR&Jj^q:Thpdg?kRb1P@kzry^2dNsLY$9~*MFB/)nU@5');
define('NONCE_KEY', '`@,QY1/Y8wlkRL,!MBAwr3]Cr_8OW~7hK<*t[SJ/5Zd.. z$i%y@P2jZX<=pUMZ$');
define('AUTH_SALT',        'w/KY&Cap<r/AD#tlwKs:6:z0 u9dL4,}]JaKVEB_kb:,)h@^B0F,<h?Sf`b!<<Un');
define('SECURE_AUTH_SALT', 'soqRy:D,cHn2k#L*Waj&qYMfv*dL2|oD}0/z^SjlFMjXx$>^Q,!,_zv`~1}of5.P');
define('LOGGED_IN_SALT',   '~l|5DKGad%~Xj.|sND56gsAm:N/qz/36OzmHay&.XF9{vupv_:+b:vt8euX&t{o*');
define('NONCE_SALT',       'Zf IGFX`b&Tem7Nh`5&_%Mm=)2 !G}$k4,+@cPu08C]kGeC.0IAK*=qT?#^=wy!r');

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix  = 'bwp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során. 
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
