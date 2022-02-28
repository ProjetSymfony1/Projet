@ECHO OFF
setlocal DISABLEDELAYEDEXPANSION
SET BIN_TARGET=%~dp0/doctrine-dbal
<<<<<<< HEAD
SET COMPOSER_BIN_DIR=%~dp0
=======
SET COMPOSER_RUNTIME_BIN_DIR=%~dp0
>>>>>>> origin/front-end
php "%BIN_TARGET%" %*
