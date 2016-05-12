function polycryptHash(){
	var polystring=util.str2abv(password);
	var op=window.polycrypt.digest("SHA-256",polystring);
	op.oncomplete=function(e){
		var hex=util.abv2hex(e.target.result);
		// hex is the hash
	}
}
window.polycrypt.onalive=polycryptHash;

/* CRYPTOJS HASH */
var cryptohash = CryptoJS.SHA256(password);

/* SJCL HASH */
var bitArray = sjcl.hash.sha256.hash(password);
var digest_sha256 = sjcl.codec.hex.fromBits(bitArray);

var encrypted = CryptoJS.TripleDES.encrypt(secretString, password);
var decrypted = CryptoJS.TripleDES.decrypt(encrypted.toString(), password);

// SJCL
var encrypted = sjcl.encrypt(password, secretString);
var decrypted = sjcl.decrypt(password, encrypted);
