<!DOCTYPE html>
<html lang="nl" style="scroll-behavior: smooth;" class="m-0 p-0 w-screen max-w-full overflow-x-hidden overflow-y-scroll">
	<head>
		<title>@{ sitename }</title>
		<@ Standard/MetaTags {
			description: @{ textTeaser | stripTags },
			ogTitle: @{ sitename | stripTags },
			ogDescription: @{ textTeaser | stripTags },
			ogImage: @{ ogImage }
		} @>
		<link rel="stylesheet" href="/packages/@{ theme }/fonts/font-awesome.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css">
		<link rel="stylesheet" href="/packages/@{ theme }/fonts/elegant-fonts.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css">
		<link rel="stylesheet" href="/packages/@{ theme }/dist/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" type="text/css">
		<link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;family=Oooh+Baby&amp;display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
		<link rel="apple-touch-icon" sizes="180x180" href="/shared/apple-touch-icon.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/shared/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/shared/favicon-16x16.png">
		<link rel="manifest" href="/shared/site.webmanifest">
		<link rel="mask-icon" href="/shared/safari-pinned-tab.svg" color="#5bbad5">
		<meta name="msapplication-TileColor" content="#da532c">
		<!-- <meta name="theme-color" content="#37b048"/> -->
		<meta name="theme-color" content="#ffffff">
	</head>
	<body class="bg-white flex flex-wrap items-center m-0 p-0 w-full overflow-x-hidden font-lato">
		<header class="w-full h-mobile-header md:h-header flex-col items-center fixed top-0 bg-white shadow-3xl z-20 md:flex
		sm:flex sm:py-5
		md:py-3">
			<div class="flex justify-center w-full h-full text-gray-700 
				md:grid md:grid-rows-2 md:grid-cols-4 md:auto-cols-auto md:w-11/12
				xl:w-10/12 xl:grid-cols-3">
				<div class="z-20 flex flex-row items-center 
					md:col-span-2 md:row-span-1 md:h-full
					xl:col-span-1 xl:row-span-2">
					<a href="/">
						<h1 class="text-5xl font-logo text-black">Supervisie voor Jou</h1>
					</a>
				</div>
				<div class="col-span-2 flex-row justify-end items-start uppercase hidden 
					md:flex">
					<span class="border-b border-transparent hover:text-svj-primary hover:border-svj-primary transition duration-200 ease-in-out">
						<i class="icon_mail mr-1"></i>
						<a href="mailto:info@supervisievoorjou.nl">info@supervisievoorjou.nl</a>
					</span>
				</div>
				<@ /navbar.php @>
			</div>
			<!-- <button
				id="toggle-mobile-menu"
				type="button"
				aria-label="Open/sluit mobiel menu"
				class="inline-flex items-center justify-center p-2 rounded-full text-white z-20 bg-svj-primary
				focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white
				fixed bottom-[5%] right-[5%]
				md:invisible"
			>
				<svg
					id="toggle-mobile-open-menu"
					class="block h-12 w-12 p-1"
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke="currentColor"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						d="M4 6h16M4 12h16M4 18h16"
					/>
				</svg>
				<svg
					id="toggle-mobile-close-menu"
					class="hidden h-12 w-12 p-1"
					xmlns="http://www.w3.org/2000/svg"
					fill="none"
					viewBox="0 0 24 24"
					stroke="currentColor"
				>
					<path
						stroke-linecap="round"
						stroke-linejoin="round"
						stroke-width="2"
						d="M6 18L18 6M6 6l12 12"
					/>
				</svg>
			</button> -->
		</header>
