windex
======


.htaccess file


```sh

#========================================================================
# .htaccess file for Windex
#
# Copy the contents of this file at the top of the directory tree whose 
# directory Windex you want to affect.  Be sure that the file paths
# point to the correct absolute URL of /windex on your server.
#
#========================================================================
# Options -Indexes
Options +Indexes
# IndexIgnore *
ErrorDocument 404 /windex/404.php

IndexOptions FancyIndexing
IndexOptions FoldersFirst IgnoreCase XHTML NameWidth=* VersionSort
IndexOptions SuppressHTMLPreamble SuppressRules HTMLTable
IndexOptions IconHeight=24 IconWidth=24
IndexOptions IconsAreLinks
IndexOptions TrackModified
# IndexOptions SuppressColumnSorting
IndexOptions SuppressDescription

AddType text/html .php
Addhandler application/x-httpd-php .php
HeaderName /windex/header.php
ReadmeName /windex/footer.php


DefaultIcon /windex/icons/default.png

AddIcon /windex/icons/pixel.gif       ^^BLANKICON^^
AddIcon /windex/icons/pixel.gif       ..
AddIcon /windex/icons/dir.png         ^^DIRECTORY^^
AddIcon /windex/icons/text.png        .txt .text .textile .rtf
AddIcon /windex/icons/textmate.png    .htaccess .js .css .html .htm .php .json .jsonp
AddIcon /windex/icons/img.png         .jpg .jpeg .png .gif .tif .tiff .ico
AddIcon /windex/icons/ai.png          .ai .eps
AddIcon /windex/icons/doc.png         .doc .docx
AddIcon /windex/icons/movie.png       .mov .qt .avi .wmv
AddIcon /windex/icons/mp3.png         .mp3 .ogg .wav .m4a
AddIcon /windex/icons/pdf.png         .pdf
AddIcon /windex/icons/ppt.png         .ppt .pptx
AddIcon /windex/icons/psd.png         .psd .psb
AddIcon /windex/icons/xls.png         .xls .xlsx
AddIcon /windex/icons/zip.png         .zip .bin .tar .rar .tgz .7z
AddIcon /windex/icons/fl.png          .fla .flv
AddIcon /windex/icons/swf.png         .swf
AddIcon /windex/icons/as.png          .as

```