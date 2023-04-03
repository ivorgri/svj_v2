# Dev steps

* Commit changes in VSCode
* Run ```git push origin main```
* When developing: ```npx tailwindcss -i ./packages/svj/svj_theme/css/input.css -o ./packages/svj/svj_theme/dist/style.min.css --watch --minify```

# Usage info

## Images
Images should first be uploaded to https://www.responsivebreakpoints.com/, followed by selecting "Art-direction > smartphone". This generates images. Download those images. This is then followed by converting them to webp using https://convertio.co/nl/jpg-webp/. Upload all the files with the supervisor and make sure to rename the highest resolution one to 02-filename. 