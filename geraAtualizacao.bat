rm -r -f *.zip
SET arquivo="update_%date:~0,2%_%date:~3,2%_%date:~6,4%.zip"
7z.exe a "%arquivo%" "app\"
7z.exe a "%arquivo%" "config\"
7z.exe a "%arquivo%" "database\"
7z.exe a "%arquivo%" "public\"
7z.exe a "%arquivo%" "resources\assets\"
7z.exe a "%arquivo%" "resources\js\"
7z.exe a "%arquivo%" "resources\lang\"
7z.exe a "%arquivo%" "resources\views\"
7z.exe a "%arquivo%" "routes\"
7z.exe a "%arquivo%" "composer.json"
rm -rf public/uploads/*
7z.exe a "%arquivo%" "public\"