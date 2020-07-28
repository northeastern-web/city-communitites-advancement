<nav
    x-init="init"
    x-data="{
        navIsOpen: false,
        activeSection: null,
        focusableElements: [],
        init: function () {
            this.focusableElements = Array.from(this.$refs.desktopNav.querySelectorAll(`a[href], area[href], input:not([disabled]), select:not([disabled]), textarea:not([disabled]), button:not([disabled]), [tabindex='0']`));
        },
        toggle: function (section) {
            if (this.activeSection === section) {
                return this.activeSection = null;
            }

            this.activeSection = section;
        },
        focusPreviousLink: function (event) {
            var index = this.focusableElements.indexOf(event.target);

            this.focusableElements[index - 1].focus();
        },
        focusNextLink: function (event, section = null) {
            if (section && this.activeSection !== section) {
                return this.activeSection = section;
            }

            var index = this.focusableElements.indexOf(event.target);

            this.focusableElements[index + 1].focus();
        }
    }"
    class="py-3 bg-white"
>
    <div class="mx-auto px-4 text-gray-900 lg:flex lg:items-center lg:justify-between lg:px-16">
        <div class="flex items-center justify-between">
            <a class="inline-block text-black focus:outline-none focus:shadow-outline" href="/">
                <svg
                    class="w-full"
                    height="40"
                    width="290"
                    viewBox="0 0 290 40"
                    fill="none"
                    aria-label="Northeastern University - City and Community Engagement"
                >
                    <g clip-path="url(#clip0)" fill="currentColor">
                        <path d="M204.7 15.68l3.44-7.64c.68-1.5.92-1.84 1.6-2.01v-.5h-3.59v.52c1.19.25 1.31.86.77 2.14l-1.39 3.3-1.75-3.86c-.37-.85-.31-1.35.92-1.5v-.6h-4.81v.57c.56.15.78.38 1.28 1.4l3.06 6.58-.45 1.13c-.2.52-.5 1-.88 1.4-.22-.75-.64-1.16-1.3-1.15a1.19 1.19 0 00-1.22 1.3 1.51 1.51 0 001.56 1.5c1.17 0 1.9-.6 2.76-2.55v-.03zm-4.88-2.26l-.28-.58c-.41.19-.86.3-1.31.32-.87 0-1.08-.44-1.09-1.03V6.59h2.33V5.53h-2.33V3.88h-.33l-3.28 2.16v.59h1.33v5.98c0 1.2.68 1.85 2.01 1.85a4.98 4.98 0 002.95-1.02v-.02zm-6.95.3c-1.13-.17-1.3-.4-1.3-1.41v-7h-.92l-2.68 1.75v.4h1.3v4.85c0 1-.19 1.24-1.3 1.41v.56h4.88l.02-.57zm-2.62-9.78a1.4 1.4 0 001.3-1.9 1.23 1.23 0 00-1.15-.78 1.4 1.4 0 00-1.37 1.37 1.25 1.25 0 001.26 1.28l-.04.03zm-3.14 7.63c0-1.7-1.41-2.22-2.77-2.64-1.35-.43-2.2-.7-2.2-1.65a1.02 1.02 0 011.14-.98c.93 0 1.75.56 2.77 1.68l.48-.23-.73-2.22h-.3l-.32.28a4.36 4.36 0 00-1.69-.39c-1.93 0-3.19 1.12-3.19 2.77s1.41 2.18 2.77 2.63c1.36.44 2.2.69 2.2 1.66 0 .6-.46 1.06-1.34 1.06-1.22 0-2.16-.8-3.28-2.23l-.48.19.72 2.85h.3l.53-.39c.64.3 1.33.46 2.03.45 1.85 0 3.4-1.1 3.4-2.87l-.04.03zm-9.48 2.1c-1.19-.18-1.35-.43-1.35-1.56V8.37a5.5 5.5 0 011.07-1.46 1.1 1.1 0 001.63 1.03 1.29 1.29 0 00.7-1.31 1.15 1.15 0 00-.32-.94 1.17 1.17 0 00-.94-.35c-.92 0-1.58.75-2.24 1.84V5.34h-.8l-2.65 1.74v.4H174v4.87c0 1-.17 1.26-1.21 1.4v.57h4.85l-.01-.65zM166.1 8.76c0-1.48.62-2.36 1.85-2.36.85 0 1.37.6 1.6 1.79l-3.4 1.17v-.6h-.05zm5.78 3.88l-.5-.38a2.75 2.75 0 01-2.1.93c-1.68 0-2.63-1.28-2.98-2.95l5.47-1.84a3.08 3.08 0 00-3.34-2.99 4.42 4.42 0 00-4.4 4.61 4.17 4.17 0 004.45 4.44 3.69 3.69 0 003.4-1.85v.03zm-9.6-4.48c.68-1.5.93-1.84 1.61-2.01v-.52h-3.6v.52c1.2.25 1.32.85.77 2.13l-1.38 3.31-1.73-3.9c-.36-.85-.31-1.34.93-1.48v-.57h-4.8v.57c.55.14.8.38 1.27 1.4l3.14 6.78h.92l2.88-6.23zm-8.3 5.59c-1.13-.16-1.28-.4-1.3-1.4v-7h-.91L149 7.1v.4h1.29v4.85c0 1-.19 1.23-1.3 1.4v.57h4.89l.1-.58zm-2.6-9.78a1.38 1.38 0 001.38-1.4 1.24 1.24 0 00-.35-.9 1.22 1.22 0 00-.9-.36 1.38 1.38 0 00-1.4 1.4 1.24 1.24 0 001.27 1.26zm-9.22 9.8c-1.04-.14-1.21-.4-1.21-1.4V8.14c.6-.67 1.42-1.1 2.31-1.22.93 0 1.16.45 1.17 1.28v4.17c0 1-.16 1.25-1.2 1.4v.57h4.7v-.56c-1.05-.15-1.22-.41-1.22-1.41V7.99a2.2 2.2 0 00-2.57-2.46 5.53 5.53 0 00-3.34 1.63v-1.8h-.84l-2.64 1.75v.4h1.26v4.87c0 1-.17 1.27-1.2 1.41v.57h4.7l.08-.58zm-20.03-10.7v5.48c0 3.54 1.84 6.01 6.52 6 4.67 0 6.5-2.48 6.45-5.96V4.2c0-2.14.6-2.69 1.64-2.98V.64h-4.42v.57c1.04.28 1.64.84 1.65 2.97v4.41c0 3.1-1.62 4.52-4.7 4.53-3.06.01-4.7-1.42-4.7-4.5V3.07c0-1.38.4-1.62 1.55-1.79V.65h-5.53v.61c1.15.16 1.52.4 1.52 1.8M107.49 13.83c-1.05-.15-1.21-.4-1.21-1.4V8.2c.6-.68 1.43-1.11 2.32-1.23.93 0 1.16.46 1.16 1.28v4.17c0 1-.17 1.26-1.21 1.41v.56h4.7v-.57c-1.04-.15-1.2-.4-1.2-1.4V8.05c0-1.47-.63-2.5-2.49-2.5a5.6 5.6 0 00-3.34 1.62V5.43h-.84l-2.66 1.74v.41h1.26v4.86c0 1-.16 1.26-1.2 1.41v.56h4.7v-.58zm-7.28 0c-1.19-.17-1.35-.43-1.35-1.57V8.52c.27-.54.64-1.04 1.08-1.47a1.09 1.09 0 001.11 1.17 1.28 1.28 0 001.23-1.44 1.18 1.18 0 00-.76-1.23 1.17 1.17 0 00-.5-.07c-.93 0-1.6.75-2.26 1.84V5.48h-.8L95.3 7.19v.4h1.25v4.86c0 1-.16 1.26-1.2 1.4v.58h4.84l.02-.6zM88.76 8.9c0-1.48.62-2.36 1.84-2.36.84 0 1.38.6 1.6 1.79L88.8 9.5V8.9h-.04zm5.76 3.88l-.49-.38a2.77 2.77 0 01-2.1.92c-1.68 0-2.64-1.27-2.99-2.93l5.54-1.84a3.1 3.1 0 00-3.36-2.99 4.44 4.44 0 00-4.44 4.58 4.19 4.19 0 004.45 4.44 3.62 3.62 0 003.4-1.85v.05zm-8.43.8l-.28-.59c-.41.2-.86.32-1.32.33-.86 0-1.08-.44-1.08-1.04V6.75h2.33v-.97h-2.37v-1.7h-.33l-3.3 2.17v.58h1.34v5.98c0 1.19.68 1.84 2.02 1.84 1.06 0 2.1-.36 2.94-1.01l.05-.07zm-6.97-1.79c0-1.7-1.4-2.22-2.76-2.64-1.36-.43-2.2-.7-2.2-1.64a1.02 1.02 0 011.18-1.06c.93 0 1.76.57 2.77 1.68l.48-.22-.7-2.27h-.3l-.32.28a4.53 4.53 0 00-1.72-.34c-1.94 0-3.2 1.11-3.2 2.76 0 1.66 1.42 2.26 2.7 2.72 1.3.47 2.2.7 2.2 1.66 0 .6-.45 1.07-1.33 1.07-1.22 0-2.16-.8-3.28-2.23l-.49.19.7 2.83h.3l.53-.39c.64.3 1.33.46 2.03.45 1.85 0 3.4-1.1 3.4-2.87l.01.02zm-14.09.35c0-.92.42-1.37 2.56-1.96v2.66c-.4.34-.9.55-1.42.58-.72 0-1.14-.38-1.14-1.28zm4.02 2.45c.8-.04 1.56-.3 2.2-.76l-.16-.52c-.92.17-1.22.05-1.22-.56V7.87c0-1.46-.65-2.25-2.71-2.24-2.32 0-4.02 1.25-4.02 2.42a1 1 0 001.04 1.04 1.18 1.18 0 001.21-.98 1.25 1.25 0 00-.34-1.23c.43-.22.9-.33 1.39-.33.78 0 1.17.26 1.17.98v1.85c-3.28.8-4.78 1.52-4.77 3.26a1.95 1.95 0 002.21 2.04c.98-.04 1.93-.4 2.69-1.02a1.19 1.19 0 001.33.92h-.02zM56.12 8.95c0-1.47.62-2.35 1.84-2.36.85 0 1.38.61 1.6 1.8l-3.4 1.17v-.6h-.04zm5.77 3.9l-.5-.4a2.77 2.77 0 01-2.1.93c-1.68 0-2.63-1.28-2.98-2.94l5.48-1.85a3.1 3.1 0 00-3.35-3 4.43 4.43 0 00-4.4 4.62 4.19 4.19 0 004.45 4.43 3.69 3.69 0 003.4-1.84v.04zm-14.6 1.1c-1.04-.12-1.19-.4-1.19-1.41V8.3a3.5 3.5 0 012.33-1.2c.92 0 1.15.44 1.15 1.26v4.17c0 1-.17 1.26-1.2 1.41v.57h4.7v-.57c-1.05-.14-1.2-.4-1.21-1.4V8.16c0-1.47-.62-2.5-2.47-2.5a5.4 5.4 0 00-3.3 1.58V0h-.67l-3.01 1.93v.4h1.33v10.21c0 1-.16 1.26-1.2 1.41v.57h4.7l.04-.58zm-5.24-.25l-.28-.59c-.41.2-.86.32-1.32.33-.86 0-1.08-.43-1.08-1.04V6.87h2.33V5.86h-2.34v-1.7h-.33l-3.28 2.17v.58h1.33v5.97c0 1.2.67 1.85 2 1.85a4.9 4.9 0 002.95-1l.02-.03zm-8.97.29c-1.2-.18-1.36-.44-1.36-1.57V8.64c.27-.55.64-1.04 1.08-1.47a1.09 1.09 0 001.12 1.13 1.27 1.27 0 001.22-1.44 1.17 1.17 0 00-1.26-1.3c-.92 0-1.59.76-2.24 1.84V5.53h-.8L28.17 7.3v.4h1.26v4.87c0 1-.16 1.26-1.2 1.4v.58h4.84v-.56zm-13.2-4.7c0-1.64.71-2.68 2.21-2.69 1.94 0 2.51 2.38 2.51 4.55 0 1.65-.7 2.69-2.2 2.69-1.94 0-2.51-2.37-2.52-4.55zm7 .82a4.25 4.25 0 00-4.56-4.4 4.5 4.5 0 00-4.72 4.6 4.25 4.25 0 004.53 4.44 4.52 4.52 0 004.73-4.6l.03-.04zM14.97 4.4c0-2.14.6-2.7 1.64-2.99V.86h-4.43v.56c1.04.3 1.65.84 1.65 2.98v6.45L4.5 1.45C3.98.92 3.78.92 3.46.92H0v.57c.8.1 1.54.52 2.05 1.15a1.4 1.4 0 01.53 1.05v7.38c0 2.13-.59 2.68-1.63 2.97v.58h4.43v-.6c-1.05-.29-1.65-.83-1.7-2.96V4.13l10.55 10.53h.74l-.01-10.25zM12.6 27.05l-3.13.8a2.66 2.66 0 00-2.7-1.96c-1.84 0-3.04 1.46-3.04 4.08s1.1 4.15 3.1 4.15a2.94 2.94 0 002.97-2.25l3.1.92a6.3 6.3 0 01-6.18 4C3.46 36.8.38 34.82.38 30c0-4.84 3.08-6.77 6.38-6.77a5.8 5.8 0 015.84 3.83zM17.24 23.6a1.77 1.77 0 11-1.77-1.67 1.74 1.74 0 011.77 1.68zm-.22 12.86h-3.1v-9.87h3.1v9.87zM22.33 26.83h2.3v2.18h-2.3v4.06c0 .8.24 1.18 1.1 1.18.46 0 .92-.07 1.36-.19v2.33c-.73.22-1.48.33-2.24.33-2.49 0-3.32-1.18-3.32-3.17V29h-1.32v-2.18h1.32V24.3h3.1v2.54zM32.2 36.66c-.6 2.01-1.46 3.34-4.13 3.34-.5 0-1-.04-1.5-.15v-2.04h.93c1.32 0 1.67-.24 1.84-1.35h-1.18l-3.19-9.87h3.5l1.7 7.75 1.57-7.75h3.41L32.2 36.66zM48.08 29.43v4.83c-.04.75.08 1.5.33 2.2h-3c-.17-.3-.29-.64-.36-.98a3.33 3.33 0 01-2.84 1.24 2.94 2.94 0 01-3.26-3.03c0-1.9 1.12-3.02 4.17-3.4l1.84-.23v-.44c0-.92-.24-1.2-1.23-1.2-1 0-1.31.33-1.31 1.14h-3.08c.07-2.14 1.7-3.24 4.46-3.24 3.08 0 4.28 1.14 4.28 3.11zm-4.24 2.64c-1.28.18-1.74.57-1.74 1.3 0 .71.39 1.02 1.13 1.02a1.65 1.65 0 001.75-1.62v-.87l-1.14.17zM59.12 30.02v6.46h-3.1v-5.53c0-1.35-.33-2-1.36-2s-1.77.87-1.77 2.18v5.37h-3.1v-9.9h2.97v1.32a3.48 3.48 0 013.12-1.6c2.05 0 3.24 1.34 3.24 3.7zM70.47 36.46H67.5v-1.03a3.58 3.58 0 01-2.86 1.29c-2.6 0-4.3-2.16-4.3-5.2 0-3.05 1.97-5.2 4.43-5.2a3.4 3.4 0 012.6 1.01v-3.78h3.1v12.9zm-6.85-4.92c0 1.84.74 2.76 2.01 2.76 1.28 0 1.98-.92 1.98-2.76 0-1.85-.81-2.83-1.98-2.83-1.16 0-2 .96-2 2.83zM87.76 27.05l-3.13.8a2.66 2.66 0 00-2.7-1.96c-1.84 0-3.04 1.46-3.04 4.08s1.1 4.15 3.1 4.15a2.94 2.94 0 002.97-2.25l3.08.92a6.29 6.29 0 01-6.16 4c-3.26 0-6.34-1.97-6.34-6.8 0-4.84 3.08-6.77 6.38-6.77a5.8 5.8 0 015.84 3.83zM99.46 31.52c0 3.11-2.07 5.2-5.33 5.2-3.27 0-5.33-2.16-5.33-5.2 0-3.05 1.99-5.2 5.33-5.2a5 5 0 015.33 5.2zm-7.38 0c0 1.84.77 2.82 2.08 2.82s2.07-.92 2.07-2.82-.81-2.77-2.07-2.77c-1.25 0-2.12.81-2.12 2.73l.04.04zM115.44 30.08v6.38h-3.1v-5.42c0-1.53-.26-2.12-1.2-2.12s-1.51.79-1.51 2.04v5.54h-3.1v-5.46c0-1.53-.19-2.12-1.2-2.12-.87 0-1.51.79-1.51 2.04v5.54h-3.1v-9.9h2.97v1.14a3.31 3.31 0 012.86-1.42 2.71 2.71 0 012.69 1.6 3.55 3.55 0 013.12-1.6c2.02 0 3.08 1.34 3.08 3.76zM131.86 30.08v6.38h-3.1v-5.42c0-1.53-.26-2.12-1.2-2.12s-1.51.79-1.51 2.04v5.54h-3.1v-5.46c0-1.53-.2-2.12-1.2-2.12-.87 0-1.52.79-1.52 2.04v5.54h-3.1v-9.9h2.97v1.14a3.3 3.3 0 012.86-1.42 2.77 2.77 0 012.7 1.6 3.54 3.54 0 013.12-1.6c2.05 0 3.08 1.34 3.08 3.76zM142.74 36.46h-2.98v-1.2a3.53 3.53 0 01-2.99 1.46c-1.84 0-3.26-1.05-3.26-3.45v-6.68h3.1v5.92c0 1.15.42 1.55 1.29 1.55a1.79 1.79 0 001.74-2v-5.47h3.1v9.87zM153.83 30.02v6.46h-3.1v-5.53c0-1.35-.33-2-1.36-2s-1.77.87-1.77 2.18v5.37h-3.1v-9.9h2.97v1.32a3.48 3.48 0 013.12-1.6c2.04 0 3.24 1.34 3.24 3.7zM158.83 23.6a1.77 1.77 0 11-3.54.19 1.77 1.77 0 013.54-.18zm-.23 12.86h-3.1v-9.87h3.1v9.87zM163.92 26.83h2.3v2.18h-2.3v4.06c0 .8.24 1.18 1.1 1.18.46 0 .91-.07 1.35-.19v2.33c-.72.22-1.47.33-2.23.33-2.49 0-3.32-1.18-3.32-3.17V29h-1.3v-2.18h1.33V24.3h3.1l-.03 2.54zM173.78 36.66c-.59 2.01-1.45 3.34-4.13 3.34-.5 0-1-.04-1.49-.15v-2.04h.92c1.33 0 1.68-.24 1.85-1.35h-1.22l-3.2-9.87h3.51l1.7 7.75 1.57-7.75h3.4l-2.9 10.07zM190.13 26.19h-5.67v2.4h5.28v2.54h-5.28v2.67h5.83v2.64h-9.07v-12.9h8.9v2.65zM201.13 30.02v6.46h-3.1v-5.53c0-1.35-.33-2-1.36-2s-1.77.87-1.77 2.18v5.37h-3.1v-9.9h2.97v1.32a3.48 3.48 0 013.12-1.6c2.05 0 3.24 1.34 3.24 3.7zM212.58 28.03c-.47-.03-.94.03-1.39.17.32.44.48.97.47 1.51 0 1.79-1.44 3.2-4.43 3.2-.65.02-1.29-.08-1.9-.29a.86.86 0 00-.26.56c0 .4.28.64 1.24.64h1.6c2.93 0 4.34 1.26 4.34 3 0 1.96-1.72 3.18-5.2 3.18-3.75 0-4.87-1.07-4.87-2.5a2.1 2.1 0 011.42-1.93 1.84 1.84 0 01-.98-1.66 2.37 2.37 0 011.25-1.84 2.76 2.76 0 01-1.4-2.42c0-1.84 1.5-3.32 4.54-3.32.91-.01 1.82.17 2.65.54a3.64 3.64 0 012.92-1.3v2.46zm-7.38 8.13a1 1 0 00-.5.85c0 .6.4.92 2.2.92 1.55 0 2.14-.35 2.14-.92 0-.57-.48-.83-1.68-.83l-2.16-.02zm.31-6.58c0 .76.56 1.25 1.53 1.25.98 0 1.55-.47 1.55-1.27s-.55-1.29-1.53-1.29c-.97 0-1.5.52-1.5 1.31h-.05zM222.01 29.43v4.83c-.03.75.08 1.5.33 2.2h-3a3.4 3.4 0 01-.35-.98 3.33 3.33 0 01-2.84 1.24 2.94 2.94 0 01-3.27-3.03c0-1.9 1.13-3.02 4.17-3.4l1.84-.23v-.44c0-.92-.24-1.2-1.23-1.2-1 0-1.31.33-1.35 1.14h-3.06c.07-2.14 1.7-3.24 4.46-3.24 3.1 0 4.3 1.14 4.3 3.11zm-4.24 2.64c-1.27.18-1.74.57-1.74 1.3 0 .71.4 1.02 1.13 1.02a1.65 1.65 0 001.75-1.62v-.87l-1.14.17zM233.52 28.03c-.47-.03-.94.03-1.39.17.32.44.48.97.47 1.51 0 1.79-1.44 3.2-4.44 3.2a5.9 5.9 0 01-1.9-.29.86.86 0 00-.26.56c0 .4.28.64 1.24.64h1.61c2.93 0 4.34 1.26 4.34 3 0 1.96-1.72 3.18-5.21 3.18-3.75 0-4.87-1.07-4.87-2.5a2.1 2.1 0 011.42-1.93 1.84 1.84 0 01-.98-1.66 2.37 2.37 0 011.25-1.84 2.76 2.76 0 01-1.4-2.42c0-1.84 1.5-3.32 4.54-3.32.92-.01 1.82.17 2.66.54a3.64 3.64 0 012.92-1.3v2.46zm-7.38 8.13a.98.98 0 00-.5.85c0 .6.4.92 2.2.92 1.56 0 2.14-.35 2.14-.92 0-.57-.47-.83-1.68-.83l-2.16-.02zm.32-6.58c0 .76.55 1.25 1.53 1.25.97 0 1.55-.47 1.55-1.27s-.56-1.29-1.53-1.29-1.53.52-1.53 1.31h-.02zM243.72 31.72v.55h-6.74a2.01 2.01 0 002.15 2.12 2.32 2.32 0 002.08-1.2l2.43 1.17a5.16 5.16 0 01-4.68 2.38 4.9 4.9 0 01-5.18-5.2c0-3.05 1.84-5.2 5-5.2 3.15 0 4.94 2.04 4.94 5.38zm-6.74-1.3h3.63c-.08-1.36-.76-1.93-1.85-1.93-1.08 0-1.72.56-1.78 1.94zM259.74 30.08v6.38h-3.1v-5.42c0-1.53-.26-2.12-1.2-2.12s-1.52.79-1.52 2.04v5.54h-3.11v-5.46c0-1.53-.19-2.12-1.2-2.12-.87 0-1.51.79-1.51 2.04v5.54H245v-9.9h2.97v1.14a3.3 3.3 0 012.85-1.42 2.7 2.7 0 012.75 1.6 3.54 3.54 0 013.12-1.6c2 0 3.05 1.34 3.05 3.76zM270.9 31.72v.55h-6.74a2.01 2.01 0 002.16 2.12 2.31 2.31 0 002.08-1.2l2.43 1.17a5.16 5.16 0 01-4.68 2.38 4.9 4.9 0 01-5.2-5.22c0-3.05 1.84-5.2 5-5.2 3.15 0 4.96 2.06 4.96 5.4zm-6.76-1.3h3.63c-.07-1.36-.75-1.93-1.84-1.93s-1.7.56-1.79 1.94zM281.54 30.02v6.46h-3.07v-5.53c0-1.35-.33-2-1.37-2-1.03 0-1.77.87-1.77 2.18v5.37h-3.1v-9.9h2.97v1.32a3.5 3.5 0 013.12-1.6c2 0 3.22 1.34 3.22 3.7zM286.77 26.83h2.3v2.18h-2.3v4.06c0 .8.24 1.18 1.1 1.18.46 0 .91-.07 1.35-.19v2.33c-.72.22-1.47.33-2.23.33-2.49 0-3.32-1.18-3.32-3.17V29h-1.33v-2.18h1.33V24.3h3.1v2.54z"/>
                    </g>
                </svg>
            </a>
            <button
                class="ml-6 flex-shrink-0 lg:hidden focus:outline-none focus:shadow-outline"
                type="button"
                data-toggle="collapse"
                data-target="#navbarContent"
                aria-controls="navbarContent"
                :aria-expanded="navIsOpen"
                aria-label="Toggle navigation"
                @click="navIsOpen = ! navIsOpen"
            >
                <svg class="w-10 h-10 text-gray-900" viewBox="0 0 21 12" fill="none">
                    <g clip-path="url(#clip0)">
                        <path d="M20.35 10.13a.67.67 0 11-.96.92c-.8-.9-2.34-2.59-2.4-2.54a4.07 4.07 0 01-4.82.11 4.31 4.31 0 01-1.53-1.95 4.5 4.5 0 01.9-4.72 3.95 3.95 0 015.84 0 4.2 4.2 0 011.22 3.08c.01.9-.26 1.8-.77 2.54a36.2 36.2 0 002.52 2.56zm-7.9-2.98a2.77 2.77 0 003.14.65c.35-.15.67-.37.93-.65a2.87 2.87 0 00.85-2.12 3.12 3.12 0 00-.85-2.14A2.9 2.9 0 0014.47 2a2.67 2.67 0 00-2.04.89A2.96 2.96 0 0011.59 5a2.98 2.98 0 00.85 2.14zM.82 6.47c0-.37.3-.68.68-.68h5.24a.69.69 0 010 1.37H1.51a.69.69 0 01-.68-.69zm0-4.8c0-.38.3-.7.68-.7h5.9a.69.69 0 010 1.38h-5.9a.69.69 0 01-.68-.69zm0 9.6c0-.37.3-.68.68-.68h9.2a.69.69 0 110 1.37h-9.2a.69.69 0 01-.68-.68z" fill="#000"/>
                    </g>
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div class="relative z-10" x-cloak>
            <div
                x-show="navIsOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="opacity-0"
                x-transition:enter-end="opacity-100"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="opacity-100"
                x-transition:leave-end="opacity-0"
                class="fixed inset-0 bg-black-semi-5 transition-opacity lg:hidden"
                @click="navIsOpen = false"
            ></div>
            <div
                id="navbarContent"
                x-show="navIsOpen"
                x-transition:enter="ease-out duration-300"
                x-transition:enter-start="-translate-x-full"
                x-transition:enter-end="translate-x-0"
                x-transition:leave="ease-in duration-200"
                x-transition:leave-start="translate-x-0"
                x-transition:leave-end="-translate-x-full"
                class="fixed inset-y-0 left-0 px-4 pt-6 pb-16 bg-white overflow-y-auto transition-transform lg:hidden"
            >
                <div class="flex items-start justify-between">
                    <a class="inline-block focus:outline-none focus:shadow-outline" href="#">
                        <svg
                            aria-label="Northeastern University"
                            title="Northeastern University"
                            width="195"
                            height="18"
                            viewBox="0 0 195 18"
                            fill="none"
                        >
                            <path d="M189.958 15.114l3.166-7.2c.599-1.389.856-1.736 1.455-1.91v-.52h-3.337v.52c1.112.26 1.198.781.684 1.996l-1.283 3.123-1.54-3.557c-.343-.78-.257-1.301.855-1.388v-.52h-4.449v.52c.513.173.77.347 1.198 1.301l2.823 6.16-.513 1.041c-.257.608-.513 1.041-.77 1.302-.171-.694-.599-1.041-1.198-1.041s-1.112.433-1.112 1.214c0 .781.684 1.388 1.369 1.388 1.112 0 1.797-.52 2.652-2.429zm-4.535-2.169l-.257-.52c-.427.173-.855.347-1.197.347-.771 0-1.027-.434-1.027-.955V6.612h2.139v-.955h-2.139V4.096h-.343l-3.08 1.995v.52h1.198v5.64c0 1.128.599 1.735 1.882 1.735 1.027-.087 2.054-.347 2.824-1.04zm-6.417.26c-1.027-.173-1.198-.347-1.198-1.301V5.31h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.172 1.128-1.198 1.301v.52h4.535v-.52zm-2.482-9.196c.685 0 1.284-.607 1.284-1.301s-.514-1.215-1.198-1.215c-.77 0-1.284.607-1.284 1.301.086.694.514 1.215 1.198 1.215zm-2.909 7.288c0-1.562-1.284-2.082-2.567-2.516-1.198-.434-2.054-.608-2.054-1.562 0-.52.343-.954 1.027-.954.856 0 1.626.52 2.567 1.561l.428-.173-.599-2.082h-.257l-.342.26c-.513-.174-1.027-.347-1.626-.347-1.797 0-2.995 1.041-2.995 2.603 0 1.561 1.284 2.082 2.567 2.429 1.198.434 2.054.607 2.054 1.562 0 .607-.428 1.04-1.198 1.04-1.112 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.514-.348c.598.26 1.197.434 1.882.434 1.711 0 3.166-1.04 3.166-2.69zm-8.813 1.995c-1.113-.173-1.284-.434-1.284-1.475V8.26a6.397 6.397 0 011.027-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.428-1.215-1.198-1.215-.856 0-1.455.694-2.053 1.735V5.397h-.771l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.214-1.112 1.301v.52h4.535v-.52zm-10.696-4.685c0-1.388.599-2.255 1.711-2.255.77 0 1.284.607 1.455 1.648l-3.166 1.128v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.868-1.968.868-1.54 0-2.481-1.215-2.738-2.777l5.048-1.735c-.085-1.822-1.454-2.776-3.08-2.776-2.396 0-4.107 1.909-4.107 4.338 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.652-.694 3.166-1.735zm-8.813-4.164c.598-1.388.855-1.736 1.454-1.909v-.52h-3.337v.52c1.112.26 1.198.78.685 1.995l-1.284 3.124-1.626-3.644c-.342-.781-.256-1.301.856-1.388v-.52h-4.449v.52c.513.173.77.347 1.197 1.301l2.91 6.333h.855l2.739-5.812zm-7.787 5.205c-1.027-.173-1.198-.347-1.198-1.301V5.397h-.856l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.128-1.198 1.301v.52h4.535v-.52zm-2.396-9.196c.685 0 1.284-.608 1.284-1.302 0-.694-.514-1.214-1.198-1.214-.77 0-1.284.607-1.284 1.301s.514 1.215 1.198 1.215zm-8.557 9.196c-.941-.173-1.112-.347-1.112-1.301V8c.856-.78 1.54-1.128 2.139-1.128.856 0 1.027.434 1.113 1.215v3.904c0 .954-.172 1.214-1.113 1.301v.52h4.364v-.52c-.941-.173-1.112-.347-1.112-1.301V7.913c0-1.388-.599-2.342-2.311-2.342-1.026 0-2.053.694-3.08 1.561V5.484h-.77l-2.481 1.648v.347h1.197v4.599c0 .954-.171 1.214-1.112 1.3v.521h4.364l-.086-.607zM113.29 3.228v5.119c0 3.297 1.712 5.64 6.076 5.64s6.075-2.343 5.989-5.64V4.183c0-1.996.514-2.516 1.541-2.777v-.52h-4.108v.52c.942.26 1.541.781 1.541 2.777v4.164c0 2.95-1.541 4.251-4.364 4.251-2.824 0-4.364-1.301-4.364-4.251V3.14c0-1.3.342-1.561 1.454-1.648V.886h-5.134v.607c1.027.26 1.369.434 1.369 1.735zM99.77 13.379c-.94-.174-1.112-.347-1.112-1.301V8.087c.856-.781 1.541-1.128 2.14-1.128.855 0 1.026.434 1.112 1.214v3.905c0 .954-.171 1.214-1.112 1.3v.521h4.363v-.52c-.941-.174-1.112-.347-1.112-1.301V8c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.695-3.08 1.562V5.571h-.77l-2.482 1.648v.347h1.198v4.598c0 .955-.171 1.215-1.113 1.302v.52h4.364l-.085-.607zm-6.759 0c-1.112-.174-1.283-.434-1.283-1.475V8.347a6.393 6.393 0 011.026-1.388c0 .694.428 1.128 1.027 1.128s1.112-.434 1.112-1.388c0-.781-.427-1.215-1.198-1.215-.855 0-1.454.694-2.053 1.735V5.484h-.77L88.39 7.132v.347h1.198v4.599c0 .954-.17 1.214-1.112 1.3v.521h4.535v-.52zM82.401 8.78c0-1.388.599-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L82.4 9.301v-.52zm5.305 3.644l-.428-.347c-.428.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.048-1.735c-.085-1.822-1.454-2.777-3.08-2.777-2.396 0-4.107 1.91-4.107 4.252 0 2.342 1.54 4.164 4.107 4.164 1.626 0 2.567-.694 3.166-1.648zm-7.872.78l-.257-.607c-.428.174-.856.347-1.198.347-.77 0-1.027-.434-1.027-.954V6.785h2.14v-.954h-2.14V4.269h-.342l-3.08 1.996v.52h1.197v5.64c0 1.127.6 1.735 1.883 1.735 1.112 0 2.054-.347 2.824-.955zm-6.418-1.735c0-1.561-1.283-2.082-2.567-2.516-1.198-.434-2.053-.607-2.053-1.561 0-.52.342-.955 1.026-.955.856 0 1.626.52 2.567 1.562l.428-.174-.684-2.169h-.257l-.342.26c-.514-.173-1.027-.346-1.626-.346-1.797 0-2.995 1.04-2.995 2.602 0 1.562 1.284 2.083 2.567 2.43 1.198.434 2.054.607 2.054 1.561 0 .608-.428 1.041-1.198 1.041-1.113 0-1.968-.78-3.08-2.082l-.428.174.684 2.69h.257l.513-.348c.6.26 1.198.434 1.883.434 1.882.087 3.251-.954 3.251-2.603zm-13.006.347c0-.867.428-1.301 2.396-1.822v2.516c-.514.347-.856.52-1.284.52-.77 0-1.112-.433-1.112-1.214zm3.68 2.256c.77 0 1.54-.347 2.053-.694l-.171-.52c-.856.173-1.112 0-1.112-.521V7.74c0-1.388-.6-2.083-2.482-2.083-2.14 0-3.765 1.215-3.765 2.256 0 .52.342.955.941.955.685 0 1.027-.434 1.113-.955.085-.52-.086-.954-.343-1.128.428-.173.856-.347 1.284-.347.77 0 1.112.26 1.112.955v1.735c-2.995.78-4.45 1.475-4.45 3.036 0 1.215.771 1.909 2.054 1.909.77 0 1.712-.347 2.482-.954.171.607.599.954 1.283.954zM52.11 8.781c0-1.388.6-2.256 1.711-2.256.77 0 1.284.607 1.455 1.648L52.11 9.301v-.52zm5.305 3.644l-.428-.347c-.427.52-1.112.867-1.968.867-1.54 0-2.481-1.215-2.738-2.776l5.049-1.735c-.086-1.822-1.455-2.777-3.08-2.777-2.397 0-4.108 1.91-4.108 4.338 0 2.343 1.54 4.165 4.107 4.165 1.626 0 2.567-.694 3.166-1.735zm-13.52 1.04c-.94-.086-1.112-.346-1.112-1.3V8.172c.856-.78 1.455-1.127 2.14-1.127.855 0 1.026.433 1.112 1.214v3.904c0 .955-.171 1.215-1.112 1.302v.52h4.363v-.52c-.94-.174-1.112-.347-1.112-1.302V8.087c0-1.388-.599-2.343-2.31-2.343-1.027 0-2.054.608-3.08 1.475V.365h-.6l-2.823 1.822v.347h1.198v9.63c0 .955-.171 1.215-1.113 1.302v.52h4.364l.086-.52zm-4.877-.173l-.256-.52c-.428.173-.856.347-1.198.347-.77 0-1.027-.434-1.027-.955V6.96h2.14v-.954h-2.14V4.442h-.342l-3.08 1.995v.52h1.197v5.64c0 1.128.6 1.735 1.883 1.735a5.616 5.616 0 002.823-1.04zm-8.3.26c-1.112-.173-1.283-.433-1.283-1.474V8.52a6.4 6.4 0 011.027-1.388c0 .694.428 1.128 1.026 1.128.6 0 1.113-.434 1.113-1.388 0-.78-.428-1.215-1.198-1.215-.856 0-1.455.695-2.054 1.736V5.657h-.77l-2.481 1.649v.347h1.198v4.598c0 .954-.171 1.215-1.113 1.301v.521h4.535v-.52zM18.482 9.128c0-1.562.685-2.516 2.054-2.516 1.797 0 2.31 2.256 2.31 4.251 0 1.562-.684 2.516-2.053 2.516-1.797 0-2.31-2.256-2.31-4.251zm6.503.78c0-2.255-1.54-4.164-4.192-4.164-2.738 0-4.364 1.996-4.364 4.338 0 2.256 1.54 4.164 4.193 4.164 2.652 0 4.363-1.995 4.363-4.337zM13.862 4.53c0-1.996.513-2.516 1.54-2.777v-.52h-4.107v.52c.941.26 1.54.781 1.54 2.777v6.073l-8.642-8.85c-.514-.52-.685-.52-1.027-.52H0v.52c.685.087 1.112.347 1.882 1.128.257.174.514.52.514.955v6.853c0 1.996-.514 2.516-1.54 2.777v.52h4.107v-.52c-.941-.174-1.54-.694-1.54-2.69V4.27l9.754 9.89h.685V4.53z" fill="currentColor"/>
                        </svg>

                        <h2 class="mt-1 text-black font-black">{{ $page->title }}</h2>
                    </a>

                    <button
                        class="ml-8 focus:outline-none focus:shadow-outline"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarContent"
                        aria-controls="navbarContent"
                        :aria-expanded="navIsOpen"
                        aria-label="Close navigation"
                        @click="navIsOpen = false"
                    >
                        <i data-feather="x" class="w-6 h-6 text-gray-600"></i>
                    </button>
                </div>

                <ul class="mt-8 w-full">
                    <li class="block">
                        <a
                            id="mobile-programs-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/programs"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'programs'"
                            @keydown.space="toggle('programs')"
                            @click.prevent="toggle('programs')"
                        >
                            Our Programs

                            <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-transition:enter="ease-out duration-300"
                            x-transition:enter-start="opacity-0"
                            x-transition:enter-end="opacity-100"
                            x-transition:leave="ease-in duration-200"
                            x-transition:leave-start="opacity-100"
                            x-transition:leave-end="opacity-0"
                            x-show="activeSection == 'programs'"
                            aria-labelledby="mobile-programs-dropdown"
                        >
                            @foreach ($programs as $program)
                                <li class="relative w-full border-b">
                                    <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                        <a
                                            class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                            href="{{ $program->getPath() }}"
                                        >
                                            $program->title
                                        </a>
                                    </span>
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li class="block">
                        <a
                            id="mobile-engage-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/engage"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'engage'"
                            @keydown.space="toggle('engage')"
                            @click.prevent="toggle('engage')"
                        >
                            Engage With Us

                            <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-show.transition.opacity.duration.300ms="activeSection == 'engage'"
                            aria-labelledby="mobile-engage-dropdown"
                        >
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/engage/students"
                                >
                                    Students
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Another action</a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline" href="#">Something else here</a>
                            </li>
                        </ul>
                    </li>
                    <li class="block">
                        <a
                            class="inline-block w-full py-4 border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/events"
                        >
                            Events
                        </a>
                    </li>
                    <li class="block">
                        <a
                            class="inline-block w-full py-4 border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/news"
                        >
                            News
                        </a>
                    </li>

                    <li class="block">
                        <a
                            id="mobile-about-dropdown"
                            class="inline-flex items-center justify-between w-full py-4 border-b rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about"
                            role="button"
                            data-toggle="dropdown"
                            aria-haspopup="true"
                            :aria-expanded="activeSection === 'about'"
                            @keydown.space="toggle('about')"
                            @click.prevent="toggle('about')"
                        >
                            About

                            <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                        </a>
                        <ul
                            x-show.transition.opacity.duration.300ms="activeSection == 'about'"
                            aria-labelledby="mobile-about-dropdown"
                        >
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/mission"
                                >
                                    Mission
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/staff"
                                >
                                    Our Staff
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/careers"
                                >
                                    Job Opportunities
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/partners"
                                >
                                    Our Partners
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/community-advisory-board"
                                >
                                    Community Advisory Board
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/awards"
                                >
                                    Awards, Grants, and Recognitions
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/donations"
                                >
                                    Donations and Sponsorships
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/annual-reports"
                                >
                                    Annual Reports
                                </a>
                            </li>
                            <li class="relative w-full border-b">
                                <span aria-hidden class="absolute inset-y-0 left-0 ml-1 flex items-center text-gray-600 text-xl leading-none">&middot;</span>
                                <a
                                    class="block py-4 pr-4 pl-6 whitespace-no-wrap hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                    href="/about/contact"
                                >
                                    Contact Us
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Desktop Navigation -->
        <div x-ref="desktopNav" class="hidden lg:block">
            <ul class="-mx-2 flex items-center">
                <li
                    class="relative"
                    @mouseenter="activeSection = 'programs'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-programs-dropdown"
                        class="inline-flex items-center px-4 py-3 text-sm rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/programs"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'programs'"
                        @keydown.space="toggle('programs')"
                        @keydown.enter="toggle('programs')"
                        @keydown.arrow-down="focusNextLink($event, 'programs')"
                    >
                        <span class="py-1 {{ \Illuminate\Support\Str::startsWith($page->getPath(), '/programs') ? 'border-b-2 border-gray-900' : '' }}">
                            Our Programs
                        </span>

                        <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'programs', 'hidden': activeSection !== 'programs' }"
                        aria-labelledby="navbar-programs-dropdown"
                        class="absolute right-0 top-0 z-10 w-48 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                        x-cloak
                    >
                        @foreach ($programs as $program)
                            <a
                                class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                                href="{{ $program->getPath() }}"
                                @keydown.arrow-up="focusPreviousLink"
                                @keydown.arrow-down="focusNextLink"
                            >
                                {{ $program->title }}
                            </a>
                        @endforeach
                    </div>
                </li>
                <li
                    class="relative"
                    @mouseenter="activeSection = 'engage'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-engage-dropdown"
                        class="inline-flex items-center px-4 py-3 text-sm rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/engage"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'engage'"
                        @keydown.space="toggle('engage')"
                        @keydown.enter="toggle('engage')"
                        @keydown.arrow-down="focusNextLink($event, 'engage')"
                    >
                        <span class="py-1 {{ \Illuminate\Support\Str::startsWith($page->getPath(), '/engage') ? 'border-b-2 border-gray-900' : '' }}">
                           Engage With Us
                        </span>

                        <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'engage', 'hidden': activeSection !== 'engage' }"
                        aria-labelledby="navbar-engage-dropdown"
                        class="absolute right-0 top-0 z-10 w-48 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                        x-cloak
                    >
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/engage/students"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Students
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Another action
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="#"
                            @keydown.arrow-up="focusPreviousLink"
                        >
                            Something else here
                        </a>
                    </div>
                </li>
                <li>
                    <a
                        class="px-4 py-3 text-sm rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/events"
                    >
                        <span class="py-1 {{ \Illuminate\Support\Str::startsWith($page->getPath(), '/events') ? 'border-b-2 border-gray-900' : '' }}">
                            Events
                        </span>
                    </a>
                </li>
                <li>
                    <a
                        class="px-4 py-3 text-sm rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/news"
                    >
                        <span class="py-1 {{ \Illuminate\Support\Str::startsWith($page->getPath(), '/news') ? 'border-b-2 border-gray-900' : '' }}">
                           News
                        </span>
                    </a>
                </li>
                <li
                    class="relative"
                    @mouseenter="activeSection = 'about'"
                    @mouseleave="activeSection = null"
                >
                    <a
                        id="navbar-about-dropdown"
                        class="inline-flex items-center px-4 py-3 text-sm rounded-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                        href="/about"
                        role="button"
                        data-toggle="dropdown"
                        aria-haspopup="true"
                        :aria-expanded="activeSection === 'about'"
                        @keydown.space="toggle('about')"
                        @keydown.enter="toggle('about')"
                        @keydown.arrow-down="focusNextLink($event, 'about')"
                    >
                        <span class="py-1 {{ \Illuminate\Support\Str::startsWith($page->getPath(), '/about') ? 'border-b-2 border-gray-900' : '' }}">
                            About
                        </span>

                        <i class="ml-2 w-4 h-4 text-gray-900" data-feather="chevron-down"></i>
                    </a>
                    <div
                        :class="{ 'flex': activeSection === 'about', 'hidden': activeSection !== 'about' }"
                        aria-labelledby="navbar-about-dropdown"
                        class="absolute right-0 top-0 z-10 w-48 mt-12 flex-col items-start justify-start py-1 bg-white border rounded-sm"
                        x-cloak
                    >
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/mission"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Mission
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/staff"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Our Staff
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/careers"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Job Opportunities
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/partners"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Our Partners
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/community-advisory-board"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Community Advisory Board
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/awards"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Awards, Grants, and Recognitions
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/donations"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Donations and Sponsorships
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/annual-reports"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Annual Reports
                        </a>
                        <a
                            class="w-full py-2 px-2 text-sm hover:bg-gray-100 focus:outline-none focus:shadow-outline"
                            href="/about/contact"
                            @keydown.arrow-up="focusPreviousLink"
                            @keydown.arrow-down="focusNextLink"
                        >
                            Contact Us
                        </a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>