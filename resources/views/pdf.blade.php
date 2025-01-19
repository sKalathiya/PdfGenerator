<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <!-- Styles / Scripts -->
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    @else
        <style>
            /* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */
            *, :before, :after {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style: ;
            }

            ::backdrop {
                --tw-border-spacing-x: 0;
                --tw-border-spacing-y: 0;
                --tw-translate-x: 0;
                --tw-translate-y: 0;
                --tw-rotate: 0;
                --tw-skew-x: 0;
                --tw-skew-y: 0;
                --tw-scale-x: 1;
                --tw-scale-y: 1;
                --tw-pan-x: ;
                --tw-pan-y: ;
                --tw-pinch-zoom: ;
                --tw-scroll-snap-strictness: proximity;
                --tw-gradient-from-position: ;
                --tw-gradient-via-position: ;
                --tw-gradient-to-position: ;
                --tw-ordinal: ;
                --tw-slashed-zero: ;
                --tw-numeric-figure: ;
                --tw-numeric-spacing: ;
                --tw-numeric-fraction: ;
                --tw-ring-inset: ;
                --tw-ring-offset-width: 0px;
                --tw-ring-offset-color: #fff;
                --tw-ring-color: rgb(59 130 246 / .5);
                --tw-ring-offset-shadow: 0 0 #0000;
                --tw-ring-shadow: 0 0 #0000;
                --tw-shadow: 0 0 #0000;
                --tw-shadow-colored: 0 0 #0000;
                --tw-blur: ;
                --tw-brightness: ;
                --tw-contrast: ;
                --tw-grayscale: ;
                --tw-hue-rotate: ;
                --tw-invert: ;
                --tw-saturate: ;
                --tw-sepia: ;
                --tw-drop-shadow: ;
                --tw-backdrop-blur: ;
                --tw-backdrop-brightness: ;
                --tw-backdrop-contrast: ;
                --tw-backdrop-grayscale: ;
                --tw-backdrop-hue-rotate: ;
                --tw-backdrop-invert: ;
                --tw-backdrop-opacity: ;
                --tw-backdrop-saturate: ;
                --tw-backdrop-sepia: ;
                --tw-contain-size: ;
                --tw-contain-layout: ;
                --tw-contain-paint: ;
                --tw-contain-style: ;
            }

            *, :before, :after {
                box-sizing: border-box;
                border-width: 0;
                border-style: solid;
                border-color: #e5e7eb
            }

            :before, :after {
                --tw-content: ""
            }

            html, :host {
                line-height: 1.5;
                -webkit-text-size-adjust: 100%;
                -moz-tab-size: 4;
                -o-tab-size: 4;
                tab-size: 4;
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
                font-feature-settings: normal;
                font-variation-settings: normal;
                -webkit-tap-highlight-color: transparent
            }

            body {
                margin: 0;
                line-height: inherit
            }

            hr {
                height: 0;
                color: inherit;
                border-top-width: 1px
            }

            abbr:where([title]) {
                -webkit-text-decoration: underline dotted;
                text-decoration: underline dotted
            }

            h1, h2, h3, h4, h5, h6 {
                font-size: inherit;
                font-weight: inherit
            }

            a {
                color: inherit;
                text-decoration: inherit
            }

            b, strong {
                font-weight: bolder
            }

            code, kbd, samp, pre {
                font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
                font-feature-settings: normal;
                font-variation-settings: normal;
                font-size: 1em
            }

            small {
                font-size: 80%
            }

            sub, sup {
                font-size: 75%;
                line-height: 0;
                position: relative;
                vertical-align: baseline
            }

            sub {
                bottom: -.25em
            }

            sup {
                top: -.5em
            }

            table {
                text-indent: 0;
                border-color: inherit;
                border-collapse: collapse
            }

            button, input, optgroup, select, textarea {
                font-family: inherit;
                font-feature-settings: inherit;
                font-variation-settings: inherit;
                font-size: 100%;
                font-weight: inherit;
                line-height: inherit;
                letter-spacing: inherit;
                color: inherit;
                margin: 0;
                padding: 0
            }

            button, select {
                text-transform: none
            }

            button, input:where([type=button]), input:where([type=reset]), input:where([type=submit]) {
                -webkit-appearance: button;
                background-color: transparent;
                background-image: none
            }

            :-moz-focusring {
                outline: auto
            }

            :-moz-ui-invalid {
                box-shadow: none
            }

            progress {
                vertical-align: baseline
            }

            ::-webkit-inner-spin-button, ::-webkit-outer-spin-button {
                height: auto
            }

            [type=search] {
                -webkit-appearance: textfield;
                outline-offset: -2px
            }

            ::-webkit-search-decoration {
                -webkit-appearance: none
            }

            ::-webkit-file-upload-button {
                -webkit-appearance: button;
                font: inherit
            }

            summary {
                display: list-item
            }

            blockquote, dl, dd, h1, h2, h3, h4, h5, h6, hr, figure, p, pre {
                margin: 0
            }

            fieldset {
                margin: 0;
                padding: 0
            }

            legend {
                padding: 0
            }

            ol, ul, menu {
                list-style: none;
                margin: 0;
                padding: 0
            }

            dialog {
                padding: 0
            }

            textarea {
                resize: vertical
            }

            input::-moz-placeholder, textarea::-moz-placeholder {
                opacity: 1;
                color: #9ca3af
            }

            input::placeholder, textarea::placeholder {
                opacity: 1;
                color: #9ca3af
            }

            button, [role=button] {
                cursor: pointer
            }

            :disabled {
                cursor: default
            }

            img, svg, video, canvas, audio, iframe, embed, object {
                display: block;
                vertical-align: middle
            }

            img, video {
                max-width: 100%;
                height: auto
            }

            [hidden]:where(:not([hidden=until-found])) {
                display: none
            }

            .absolute {
                position: absolute
            }

            .relative {
                position: relative
            }

            .-bottom-16 {
                bottom: -4rem
            }

            .-left-16 {
                left: -4rem
            }

            .-left-20 {
                left: -5rem
            }

            .top-0 {
                top: 0
            }

            .z-0 {
                z-index: 0
            }

            .\!row-span-1 {
                grid-row: span 1 / span 1 !important
            }

            .-mx-3 {
                margin-left: -.75rem;
                margin-right: -.75rem
            }

            .-ml-px {
                margin-left: -1px
            }

            .ml-3 {
                margin-left: .75rem
            }

            .mt-4 {
                margin-top: 1rem
            }

            .mt-6 {
                margin-top: 1.5rem
            }

            .flex {
                display: flex
            }

            .inline-flex {
                display: inline-flex
            }

            .table {
                display: table
            }

            .grid {
                display: grid
            }

            .\!hidden {
                display: none !important
            }

            .hidden {
                display: none
            }

            .aspect-video {
                aspect-ratio: 16 / 9
            }

            .size-12 {
                width: 3rem;
                height: 3rem
            }

            .size-5 {
                width: 1.25rem;
                height: 1.25rem
            }

            .size-6 {
                width: 1.5rem;
                height: 1.5rem
            }

            .h-12 {
                height: 3rem
            }

            .h-40 {
                height: 10rem
            }

            .h-5 {
                height: 1.25rem
            }

            .h-full {
                height: 100%
            }

            .min-h-screen {
                min-height: 100vh
            }

            .w-5 {
                width: 1.25rem
            }

            .w-\[calc\(100\%_\+_8rem\)\] {
                width: calc(100% + 8rem)
            }

            .w-auto {
                width: auto
            }

            .w-full {
                width: 100%
            }

            .max-w-2xl {
                max-width: 42rem
            }

            .max-w-\[877px\] {
                max-width: 877px
            }

            .flex-1 {
                flex: 1 1 0%
            }

            .shrink-0 {
                flex-shrink: 0
            }

            .transform {
                transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
            }

            .cursor-default {
                cursor: default
            }

            .resize {
                resize: both
            }

            .grid-cols-2 {
                grid-template-columns:repeat(2, minmax(0, 1fr))
            }

            .\!flex-row {
                flex-direction: row !important
            }

            .flex-col {
                flex-direction: column
            }

            .items-start {
                align-items: flex-start
            }

            .items-center {
                align-items: center
            }

            .items-stretch {
                align-items: stretch
            }

            .justify-end {
                justify-content: flex-end
            }

            .justify-center {
                justify-content: center
            }

            .justify-between {
                justify-content: space-between
            }

            .justify-items-center {
                justify-items: center
            }

            .gap-2 {
                gap: .5rem
            }

            .gap-4 {
                gap: 1rem
            }

            .gap-6 {
                gap: 1.5rem
            }

            .self-center {
                align-self: center
            }

            .overflow-hidden {
                overflow: hidden
            }

            .rounded-\[10px\] {
                border-radius: 10px
            }

            .rounded-full {
                border-radius: 9999px
            }

            .rounded-lg {
                border-radius: .5rem
            }

            .rounded-md {
                border-radius: .375rem
            }

            .rounded-sm {
                border-radius: .125rem
            }

            .rounded-l-md {
                border-top-left-radius: .375rem;
                border-bottom-left-radius: .375rem
            }

            .rounded-r-md {
                border-top-right-radius: .375rem;
                border-bottom-right-radius: .375rem
            }

            .border {
                border-width: 1px
            }

            .border-gray-300 {
                --tw-border-opacity: 1;
                border-color: rgb(209 213 219 / var(--tw-border-opacity, 1))
            }

            .bg-\[\#FF2D20\]\/10 {
                background-color: #ff2d201a
            }

            .bg-gray-50 {
                --tw-bg-opacity: 1;
                background-color: rgb(249 250 251 / var(--tw-bg-opacity, 1))
            }

            .bg-white {
                --tw-bg-opacity: 1;
                background-color: rgb(255 255 255 / var(--tw-bg-opacity, 1))
            }

            .bg-gradient-to-b {
                background-image: linear-gradient(to bottom, var(--tw-gradient-stops))
            }

            .from-transparent {
                --tw-gradient-from: transparent var(--tw-gradient-from-position);
                --tw-gradient-to: rgb(0 0 0 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), var(--tw-gradient-to)
            }

            .via-white {
                --tw-gradient-to: rgb(255 255 255 / 0) var(--tw-gradient-to-position);
                --tw-gradient-stops: var(--tw-gradient-from), #fff var(--tw-gradient-via-position), var(--tw-gradient-to)
            }

            .to-white {
                --tw-gradient-to: #fff var(--tw-gradient-to-position)
            }

            .to-zinc-900 {
                --tw-gradient-to: #18181b var(--tw-gradient-to-position)
            }

            .stroke-\[\#FF2D20\] {
                stroke: #ff2d20
            }

            .object-cover {
                -o-object-fit: cover;
                object-fit: cover
            }

            .object-top {
                -o-object-position: top;
                object-position: top
            }

            .p-6 {
                padding: 1.5rem
            }

            .px-2 {
                padding-left: .5rem;
                padding-right: .5rem
            }

            .px-3 {
                padding-left: .75rem;
                padding-right: .75rem
            }

            .px-4 {
                padding-left: 1rem;
                padding-right: 1rem
            }

            .px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .py-10 {
                padding-top: 2.5rem;
                padding-bottom: 2.5rem
            }

            .py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .py-2 {
                padding-top: .5rem;
                padding-bottom: .5rem
            }

            .pt-3 {
                padding-top: .75rem
            }

            .text-center {
                text-align: center
            }

            .font-sans {
                font-family: Figtree, ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji"
            }

            .text-sm {
                font-size: .875rem;
                line-height: 1.25rem
            }

            .text-sm\/relaxed {
                font-size: .875rem;
                line-height: 1.625
            }

            .text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .font-medium {
                font-weight: 500
            }

            .font-semibold {
                font-weight: 600
            }

            .leading-5 {
                line-height: 1.25rem
            }

            .text-black {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .text-black\/50 {
                color: #00000080
            }

            .text-gray-500 {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .text-gray-700 {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            .text-white {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .underline {
                text-decoration-line: underline
            }

            .antialiased {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale
            }

            .shadow-\[0px_14px_34px_0px_rgba\(0\,0\,0\,0\.08\)\] {
                --tw-shadow: 0px 14px 34px 0px rgba(0, 0, 0, .08);
                --tw-shadow-colored: 0px 14px 34px 0px var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .shadow-sm {
                --tw-shadow: 0 1px 2px 0 rgb(0 0 0 / .05);
                --tw-shadow-colored: 0 1px 2px 0 var(--tw-shadow-color);
                box-shadow: var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)
            }

            .ring-1 {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .ring-black {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(0 0 0 / var(--tw-ring-opacity, 1))
            }

            .ring-gray-300 {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(209 213 219 / var(--tw-ring-opacity, 1))
            }

            .ring-transparent {
                --tw-ring-color: transparent
            }

            .ring-white {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
            }

            .ring-white\/\[0\.05\] {
                --tw-ring-color: rgb(255 255 255 / .05)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.06\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .06));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .drop-shadow-\[0px_4px_34px_rgba\(0\,0\,0\,0\.25\)\] {
                --tw-drop-shadow: drop-shadow(0px 4px 34px rgba(0, 0, 0, .25));
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .filter {
                filter: var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)
            }

            .transition {
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, -webkit-backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter;
                transition-property: color, background-color, border-color, text-decoration-color, fill, stroke, opacity, box-shadow, transform, filter, backdrop-filter, -webkit-backdrop-filter;
                transition-timing-function: cubic-bezier(.4, 0, .2, 1);
                transition-duration: .15s
            }

            .duration-150 {
                transition-duration: .15s
            }

            .duration-300 {
                transition-duration: .3s
            }

            .ease-in-out {
                transition-timing-function: cubic-bezier(.4, 0, .2, 1)
            }

            .selection\:bg-\[\#FF2D20\] *::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\] *::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white *::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white *::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::-moz-selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:bg-\[\#FF2D20\]::selection {
                --tw-bg-opacity: 1;
                background-color: rgb(255 45 32 / var(--tw-bg-opacity, 1))
            }

            .selection\:text-white::-moz-selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .selection\:text-white::selection {
                --tw-text-opacity: 1;
                color: rgb(255 255 255 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black:hover {
                --tw-text-opacity: 1;
                color: rgb(0 0 0 / var(--tw-text-opacity, 1))
            }

            .hover\:text-black\/70:hover {
                color: #000000b3
            }

            .hover\:text-gray-400:hover {
                --tw-text-opacity: 1;
                color: rgb(156 163 175 / var(--tw-text-opacity, 1))
            }

            .hover\:text-gray-500:hover {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .hover\:ring-black\/20:hover {
                --tw-ring-color: rgb(0 0 0 / .2)
            }

            .focus\:z-10:focus {
                z-index: 10
            }

            .focus\:border-blue-300:focus {
                --tw-border-opacity: 1;
                border-color: rgb(147 197 253 / var(--tw-border-opacity, 1))
            }

            .focus\:outline-none:focus {
                outline: 2px solid transparent;
                outline-offset: 2px
            }

            .focus\:ring:focus {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(3px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-1:focus-visible {
                --tw-ring-offset-shadow: var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);
                --tw-ring-shadow: var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);
                box-shadow: var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)
            }

            .focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                --tw-ring-opacity: 1;
                --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
            }

            .active\:bg-gray-100:active {
                --tw-bg-opacity: 1;
                background-color: rgb(243 244 246 / var(--tw-bg-opacity, 1))
            }

            .active\:text-gray-500:active {
                --tw-text-opacity: 1;
                color: rgb(107 114 128 / var(--tw-text-opacity, 1))
            }

            .active\:text-gray-700:active {
                --tw-text-opacity: 1;
                color: rgb(55 65 81 / var(--tw-text-opacity, 1))
            }

            @media (min-width: 640px) {
                .sm\:flex {
                    display: flex
                }

                .sm\:hidden {
                    display: none
                }

                .sm\:size-16 {
                    width: 4rem;
                    height: 4rem
                }

                .sm\:size-6 {
                    width: 1.5rem;
                    height: 1.5rem
                }

                .sm\:flex-1 {
                    flex: 1 1 0%
                }

                .sm\:items-center {
                    align-items: center
                }

                .sm\:justify-between {
                    justify-content: space-between
                }

                .sm\:pt-5 {
                    padding-top: 1.25rem
                }
            }

            @media (min-width: 768px) {
                .md\:row-span-3 {
                    grid-row: span 3 / span 3
                }
            }

            @media (min-width: 1024px) {
                .lg\:col-start-2 {
                    grid-column-start: 2
                }

                .lg\:h-16 {
                    height: 4rem
                }

                .lg\:max-w-7xl {
                    max-width: 80rem
                }

                .lg\:grid-cols-2 {
                    grid-template-columns:repeat(2, minmax(0, 1fr))
                }

                .lg\:grid-cols-3 {
                    grid-template-columns:repeat(3, minmax(0, 1fr))
                }

                .lg\:flex-col {
                    flex-direction: column
                }

                .lg\:items-end {
                    align-items: flex-end
                }

                .lg\:justify-center {
                    justify-content: center
                }

                .lg\:gap-8 {
                    gap: 2rem
                }

                .lg\:p-10 {
                    padding: 2.5rem
                }

                .lg\:pb-10 {
                    padding-bottom: 2.5rem
                }

                .lg\:pt-0 {
                    padding-top: 0
                }

                .lg\:text-\[\#FF2D20\] {
                    --tw-text-opacity: 1;
                    color: rgb(255 45 32 / var(--tw-text-opacity, 1))
                }
            }

            .rtl\:flex-row-reverse:where([dir=rtl],[dir=rtl] *) {
                flex-direction: row-reverse
            }

            @media (prefers-color-scheme: dark) {
                .dark\:block {
                    display: block
                }

                .dark\:hidden {
                    display: none
                }

                .dark\:border-gray-600 {
                    --tw-border-opacity: 1;
                    border-color: rgb(75 85 99 / var(--tw-border-opacity, 1))
                }

                .dark\:bg-black {
                    --tw-bg-opacity: 1;
                    background-color: rgb(0 0 0 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-gray-800 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(31 41 55 / var(--tw-bg-opacity, 1))
                }

                .dark\:bg-zinc-900 {
                    --tw-bg-opacity: 1;
                    background-color: rgb(24 24 27 / var(--tw-bg-opacity, 1))
                }

                .dark\:via-zinc-900 {
                    --tw-gradient-to: rgb(24 24 27 / 0) var(--tw-gradient-to-position);
                    --tw-gradient-stops: var(--tw-gradient-from), #18181b var(--tw-gradient-via-position), var(--tw-gradient-to)
                }

                .dark\:to-zinc-900 {
                    --tw-gradient-to: #18181b var(--tw-gradient-to-position)
                }

                .dark\:text-gray-300 {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-400 {
                    --tw-text-opacity: 1;
                    color: rgb(156 163 175 / var(--tw-text-opacity, 1))
                }

                .dark\:text-gray-600 {
                    --tw-text-opacity: 1;
                    color: rgb(75 85 99 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:text-white\/50 {
                    color: #ffffff80
                }

                .dark\:text-white\/70 {
                    color: #ffffffb3
                }

                .dark\:ring-zinc-800 {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(39 39 42 / var(--tw-ring-opacity, 1))
                }

                .dark\:hover\:text-gray-300:hover {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white:hover {
                    --tw-text-opacity: 1;
                    color: rgb(255 255 255 / var(--tw-text-opacity, 1))
                }

                .dark\:hover\:text-white\/70:hover {
                    color: #ffffffb3
                }

                .dark\:hover\:text-white\/80:hover {
                    color: #fffc
                }

                .dark\:hover\:ring-zinc-700:hover {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(63 63 70 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus\:border-blue-700:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(29 78 216 / var(--tw-border-opacity, 1))
                }

                .dark\:focus\:border-blue-800:focus {
                    --tw-border-opacity: 1;
                    border-color: rgb(30 64 175 / var(--tw-border-opacity, 1))
                }

                .dark\:focus-visible\:ring-\[\#FF2D20\]:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 45 32 / var(--tw-ring-opacity, 1))
                }

                .dark\:focus-visible\:ring-white:focus-visible {
                    --tw-ring-opacity: 1;
                    --tw-ring-color: rgb(255 255 255 / var(--tw-ring-opacity, 1))
                }

                .dark\:active\:bg-gray-700:active {
                    --tw-bg-opacity: 1;
                    background-color: rgb(55 65 81 / var(--tw-bg-opacity, 1))
                }

                .dark\:active\:text-gray-300:active {
                    --tw-text-opacity: 1;
                    color: rgb(209 213 219 / var(--tw-text-opacity, 1))
                }
            }
        </style>
    @endif
</head>
<body class="font-sans antialiased bg-white">
<!-- First Page -->
<header>
    <div class="flex flex-col items-center justify-center min-h-screen px-4 py-8 bg-gradient-to-br from-blue-500 via-purple-500 to-pink-500 text-white">
        <!-- Branding Logo -->
        <div class="mb-6">
            <img src="{{public_path("\images/logo.png")}}" alt="Your Logo" class="h-20 w-auto">
        </div>

        <!-- Main Header -->
        <h1 class="text-5xl font-extrabold mb-4">ANALYTICS REPORT</h1>
        <h2 class="text-xl font-medium mb-10 italic">"Measure, Optimize, Succeed"</h2>

        <!-- Website Details -->
        <div class="bg-white rounded-lg shadow-lg px-8 py-6 text-center text-black w-3/4 md:w-2/3 lg:w-1/2">
            <h3 class="text-2xl font-bold mb-2">Website Report for</h3>
            <a href="https://youtube.com" class="text-blue-600 text-xl font-semibold underline">https://youtube.com</a>
        </div>

        <!-- Date -->
        <p class="mt-8 text-lg">Generated on <strong>{{date_format(new DateTime($data["report_date"]), 'F j, Y')}}</strong></p>

        <!-- Footer -->
        <footer class="absolute bottom-6 text-sm opacity-75">
            <p>Powered by <strong>Website Ranking AI</strong></p>
        </footer>
    </div>
</header>

@pageBreak
<main class="mx-4">
<!-- Title -->
<section class="page">
    <!-- First Page Heading-->
    <header
        class="flex flex-row gap-4 w-full bg-gradient-to-r from-gray-100 to-gray-200 rounded-lg p-6 mt-4 justify-between items-center shadow-lg">

        <!-- Website Name -->
        <div class="text-3xl font-extrabold text-gray-800 tracking-wide uppercase">
            {{ $data["website_name"] }}
        </div>

        <!-- WR Score -->
        <div class="flex items-center gap-3 bg-orange-600 text-white font-semibold px-4 py-2 rounded-lg shadow-md">
            <x-heroicon-s-academic-cap class="h-6 w-6 text-white"/>
            <span>{{ "WR Score: " . $data["category_ranking"]["all_ranking_score"]["percent"] . " / 100" ?? 'No data available' }}</span>
        </div>
    </header>
    <!-- First Page Data-->
    <main class="p-4 flex flex-col gap-2 mt-4">
        <div class="flex p-4 items-center rounded-lg border border-gray-200">
            <!-- Icon -->
            <x-heroicon-s-document class="h-6 w-6 text-blue-500 mr-4"/>

            <!-- Title and Detail -->
            <div class="flex flex-col">
                <span class="font-bold text-lg">Description</span>
                <span class="mt-1">{{$data["website_description"] ?? 'No description available'}}</span>
            </div>
        </div>
        <div class="flex items-center p-4 rounded-lg border border-gray-200">
            <!-- Icon -->
            <x-heroicon-s-link class="h-6 w-6 text-green-500 mr-4"/>
            <!-- Title and Detail -->
            <div class="flex flex-col">
                <span class="font-bold text-lg">Website</span>
                <span class="mt-1"><a class="text-blue-500 mt-1" target="_blank" href="{{$data["website_url"]}}">{{$data["website_url"]}}</a></span>
            </div>
        </div>
        <div class="flex items-center p-4 rounded-lg border border-gray-200">
            <!-- Icon -->
            <x-heroicon-s-user class="h-6 w-6 text-teal-500 mr-4"/>
            <!-- Title and Detail -->
            <div class="flex flex-col">
                <span class="font-bold text-lg">Total Visitors</span>
                <span class="mt-1">{{$data["total_visitors"] ?? "No data available"}}</span>
            </div>
        </div>

        <!-- Ranking Section -->
        <div class="flex flex-col rounded-lg py-4">
            <div class="text-lg font-bold col-span-3 inline-flex items-center">
                <x-heroicon-s-hashtag class="size-5"/>
                Rankings
            </div>
            <div class="inline-flex gap-2 mt-1">
                <!-- Global Ranking -->
                <div class="inline-flex gap-2 px-2 py-4 bg-gray-100 rounded-lg items-center text-xl w-full shadow-sm">
                <span class="rounded-full bg-blue-500 p-2"><x-heroicon-s-globe-alt
                        class="bg-inherit text-white size-6"/></span>
                    <p class="font-semibold">Global</p>
                    <span class="ml-auto inline-flex gap-2 items-center">
                            <p class="font-bold">{{$data["global_rank"]["data"] ?? "?" }}</p>

                            @if($data["global_rank"]["direction"] === "down")
                            <x-heroicon-s-arrow-trending-down class="text-red-600 size-6"/>
                        @elseif($data["global_rank"]["direction"] === "up")
                            <x-heroicon-s-arrow-trending-up class="text-green-600 size-6"/>
                        @else
                            <x-heroicon-s-minus class="text-blue-600 size-6"/>
                        @endif
                        </span>
                </div>
                <!-- Country Ranking -->
                <div class="inline-flex gap-2 px-2 py-4 bg-gray-100 rounded-lg items-center text-xl w-full shadow-sm">
                <span class="rounded-full bg-cyan-500 p-2"><x-heroicon-s-rectangle-group
                        class="bg-inherit text-white size-6"/></span>
                    <p class="font-semibold">Country</p>
                    <span class="ml-auto inline-flex gap-2 items-center">
                            <p class="font-bold">{{$data["country_rank"]["data"] ?? "?"}}</p>

                            @if($data["country_rank"]["direction"] === "down")
                            <x-heroicon-s-arrow-trending-down class="text-red-600 size-6"/>
                        @elseif($data["country_rank"]["direction"] === "up")
                            <x-heroicon-s-arrow-trending-up class="text-green-600 size-6"/>
                        @else
                            <x-heroicon-s-minus class="text-blue-600 size-6"/>
                        @endif
                        </span>
                </div>
                <!-- Category Ranking -->
                <div class="inline-flex gap-2 px-2 py-4 bg-gray-100 rounded-lg items-center text-xl w-full shadow-sm">
                <span class="rounded-full bg-orange-500 p-2"><x-heroicon-s-tag
                        class="bg-inherit text-white size-6"/></span>
                    <p class="font-semibold">Category</p>
                    <span class="ml-auto inline-flex gap-2 items-center">
                            <p class="font-bold">{{$data["category_rank"]["data"] ?? "?"}}</p>

                            @if($data["category_rank"]["direction"] === "down")
                            <x-heroicon-s-arrow-trending-down class="text-red-600 size-6"/>
                        @elseif($data["category_rank"]["direction"] === "up")
                            <x-heroicon-s-arrow-trending-up class="text-green-600 size-6"/>
                        @else
                            <x-heroicon-s-minus class="text-blue-600 size-6"/>
                        @endif
                        </span>
                </div>
            </div>
        </div>
        <!-- Snapshot Section -->
        <div class="flex flex-col rounded-lg py-4">
            <div class="text-lg font-bold inline-flex gap-1 items-center">
                <x-heroicon-s-camera class="size-5"/>
                Snapshot
            </div>
            <img class="text-blue-500 mt-1" src="{{public_path('images\ss.png')}}" alt="website snapshot"/>
        </div>
    </main>

</section>

@pageBreak
<!-- Web Contents -->
<section class="page">
    <header
        class="flex flex-row gap-2 w-full bg-blue-800 text-white rounded-lg p-4 mt-4 justify-between items-center shadow-lg">
        <div class="text-2xl font-bold inline-flex gap-2 items-center ">
            <x-heroicon-s-code-bracket class="size-6"/>
            Web Contents
        </div>
    </header>
    <!-- Second Page Data -->
    <main class="p-4 mt-4"><x-web-content :data='$data["web_content_data"]'/> </main>
</section>
<!-- Performance Analysis -->
<section class="page  ">
    <header
        class="flex flex-row gap-2 shadow-lg w-full bg-emerald-300 text-white rounded-lg p-4 mt-4 justify-between items-center">
        <div class="text-2xl font-bold inline-flex gap-2 items-center">
            <x-heroicon-s-star class="size-6"/>
            Performance Analysis
        </div>
    </header>
    <!-- Second Page second section Performance Analysis Data -->
    <main class="p-4 flex flex-col gap-2 mt-4">
        <div class="grid grid-rows-2 grid-cols-2 gap-2">
            @foreach($data['performaceGrade'] as $grade)
                <div class="flex items-center p-4 rounded-lg border border-gray-200">
                    <!-- Icon -->
                    @if($grade['id'] == 1)
                        <x-heroicon-s-sparkles class="h-6 w-6 text-blue-500 mr-4"/>
                    @elseif($grade['id'] == 2)
                        <x-heroicon-s-cloud class="h-6 w-6 text-green-500 mr-4"/>
                    @elseif($grade['id'] == 3)
                        <x-heroicon-s-clock class="h-6 w-6 text-orange-500 mr-4"/>
                    @elseif($grade['id'] == 4)
                        <x-heroicon-s-cog class="h-6 w-6 text-purple-500 mr-4"/>
                    @endif
                    <!-- Title and Detail -->
                    <div class="flex flex-col">
                        <span class="font-bold text-lg">{{ $grade['title'] }}</span>
                        <div class="flex flex-row items-center gap-2 mt-1">
                            <span>{{ $grade['detail'] ?? 'No data available' }}</span>
                            @isset($grade['grade'])
                                <span class="text-sm text-gray-600">Grade: {{ $grade['grade'] }}</span>
                            @endisset
                        </div>

                    </div>
                </div>
            @endforeach
        </div>
        <x-performance :data='$data["charts"]["performance_indicate"]'/>
        @pageBreak
        <x-performance :data='$data["charts"]["size_page"]'/>
        <x-performance :data='$data["charts"]["load_time"]'/>
        <x-performance :data='$data["charts"]["request_total"]'/>
    </main>

</section>

@pageBreak
<!-- Demographics -->
<section class="page">
    <header
        class="flex flex-row gap-2 w-full bg-teal-600 text-white rounded-lg p-4 mt-4 justify-between items-center shadow-lg">
        <div class="text-2xl font-bold inline-flex gap-2 items-center ">
            <x-heroicon-s-cursor-arrow-rays class="size-6"/>
            Demographics
        </div>
    </header>
    <!-- Demographics Data -->
    <main class="p-4 flex flex-col gap-2 mt-4">
        <x-visits :data='$data["monthly_visits"]'/>
        <div class="inline-flex items-center justify-between">
            <x-demographics :data='$data["genders"]' :title='"Genders"'/>
            <x-demographics :data='$data["devicesdata"]' :title='"Devices"'/>
        </div>
    </main>

</section>

@pageBreak
<!-- Category Analysis -->
<section class="page ">
    <header
        class="flex flex-row gap-2 w-full bg-indigo-600 text-white rounded-lg p-4 mt-4 justify-between items-center shadow-lg">
        <div class="text-2xl font-bold inline-flex gap-2 items-center ">
            <x-heroicon-s-tag class="size-6"/>
            Category Analysis
        </div>
    </header>
    <main class="p-4 flex flex-col mt-4">
        <x-progress :categoryRanking='$data["category_ranking"]' />
        <x-category_progress :categories='$data["resultsdata"]["categories"]' :data='$data["resultsdata"]["data"]' />
    </main>
</section>

@pageBreak
<!-- Category Score Insights -->
<section class="page ">
    <header
        class="flex flex-row gap-2 w-full bg-blue-600 text-white rounded-lg p-4 mt-4 justify-between items-center shadow-lg">
        <div class="text-2xl font-bold inline-flex gap-2 items-center ">
            <x-heroicon-s-chart-bar class="size-6" />
            Category Score Insights
        </div>
    </header>
    <main class="p-4 flex flex-col mt-4">
        <x-comparison :comparison-score='$data["comparison_score"]'/>
    </main>
</section>


<x-category title="Security and Privacy" :category="$data['security_privacy']" color="bg-green-600">
    <x-heroicon-s-lock-closed class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Performance and Technical" :category="$data['performance_technical']" color="bg-blue-600">
    <x-heroicon-s-cpu-chip class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Branding and Visual Identity" :category="$data['branding_visual']" color="bg-indigo-600">
    <x-heroicon-s-paint-brush class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Navigation" :category="$data['navigation']" color="bg-purple-600">
    <x-heroicon-s-map class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Mobile Responsiveness" :category="$data['mobile_responsiveness']" color="bg-yellow-600">
    <x-heroicon-s-phone class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Integration and Service" :category="$data['integration_service']" color="bg-red-600">
    <x-heroicon-s-cloud-arrow-up class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Interactivity and Engagement" :category="$data['interactivity_engagement']" color="bg-teal-600">
    <x-heroicon-s-cursor-arrow-ripple class="h-6 w-6 text-white mr-2" />
</x-category>

<x-category title="Content and Information" :category="$data['content_information']" color="bg-pink-600">
    <x-heroicon-s-building-library class="h-6 w-6 text-white mr-2" />
</x-category>


    <x-category title="Accessibility" :category="$data['accessibility']" color="bg-gray-600">
        <x-heroicon-s-user class="h-6 w-6 text-white mr-2" />
    </x-category>


<x-category title="SEO" :category="$data['seo']" color="bg-blue-400">
    <x-heroicon-s-magnifying-glass class="h-6 w-6 text-white mr-2" />
</x-category>

<x-category title="Business Presence" :category="$data['business_presence']" color="bg-green-600">
    <x-heroicon-s-building-office class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Metrics" :category="$data['metrics']" color="bg-orange-600">
    <x-heroicon-s-chart-bar class="h-6 w-6 text-white mr-2" />
</x-category>


<x-category title="Advanced Security" :category="$data['advance_security']" color="bg-red-600">
    <x-heroicon-s-shield-check class="h-6 w-6 text-white mr-2" />
</x-category>
</main>
</body>
</html>
