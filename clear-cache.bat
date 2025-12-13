@echo off
echo ========================================
echo  Clear CodeIgniter Cache
echo ========================================
echo.

echo Clearing application cache...
del /Q "application\cache\*" 2>nul
if %errorlevel% equ 0 (
    echo [OK] Cache cleared successfully!
) else (
    echo [INFO] No cache files found or already cleared.
)

echo.
echo ========================================
echo  Cache Clear Complete
echo ========================================
echo.
echo Next steps:
echo 1. Clear your browser cache (Ctrl+Shift+Delete)
echo 2. Or open Incognito/Private mode
echo 3. Try accessing the URLs again
echo.
pause
