
/*
 * You can modify this sign to disguise your encrypt file
 */
char encrypt_file_header_sign[] = {
	0x57, 0xc5, 0x6a, 0x42,
	0x54, 0x4d, 0x62, 0x51
};

int encrypt_file_header_length = sizeof(encrypt_file_header_sign);
