@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/yaml-lint
<<<<<<< HEAD
SET COMPOSER_BIN_DIR=%~dp0
=======
SET COMPOSER_RUNTIME_BIN_DIR=%~dp0
>>>>>>> origin/front-end
php "%BIN_TARGET%" %*