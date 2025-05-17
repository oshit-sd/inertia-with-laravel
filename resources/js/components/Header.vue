<script setup>
import { Link } from "@inertiajs/vue3";
</script>

<template>
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">
      <div class="logo">
        <h1>
          <Link href="/">SoftLand</Link>
        </h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li>
            <Link href="/" :class="{ active: $page.url === '/' }"> Home </Link>
          </li>
          <li>
            <Link href="/todo" :class="{ active: $page.url === '/todo' }">
              Todo
            </Link>
          </li>
          <li>
            <Link href="/quote" :class="{ active: $page.url === '/quote' }">
              Quote
            </Link>
          </li>
          <li>
            <Link
              href="/features"
              :class="{ active: $page.url === '/features' }"
            >
              Features
            </Link>
          </li>
          <li>
            <Link href="/blog" :class="{ active: $page.url === '/blog' }">
              Blog
            </Link>
          </li>
          <li>
            <Link href="/contact" :class="{ active: $page.url === '/contact' }">
              Contact
            </Link>
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- .navbar -->
    </div>
  </header>
</template>