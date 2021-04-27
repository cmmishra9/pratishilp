CREATE TABLE settings
{
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    email VARCHAR(255) NULL,
    co_number VARCHAR(255) NULL,
    site_title VARCHAR(255) NULL,
    site_slogan VARCHAR(255) NULL,
    site_logo VARCHAR(255) NULL,
    site_address VARCHAR(255) NULL,
    fb_addr VARCHAR(255) NULL,
    tw_addr VARCHAR(255) NULL,
    ln_addr VARCHAR(255) NULL,
    copyright VARCHAR(255) NULL
    
};
INSERT INTO settings{
    email, co_number,site_title,site_slogan, site_logo, site_address, fb_addr, tw_addr, ln_addr,copyright 
}
VALUES{
    "contact@pratishilp.com",
    "1234567890",
    "Pratishilp",
    "AnArchitectural firm",
    "uploads/settings/logo.png",
    "D-59/72-Ch, Sigra Mahmoorganj Road, Mahmoorganj Road, Varanasi - 221001, Near Padmini Hotel",
    "https://www.facebook.com",
    "https://www.twitter.com",
    "https://www.linkedin.com",
    "Pratishilp.com"
};