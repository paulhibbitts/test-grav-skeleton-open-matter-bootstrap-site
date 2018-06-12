---
title: Blog
sitemap:
    changefreq: monthly
body_classes: 'header-image fullwidth'
content:
    items: '@self.children'
    limit: 5
    order:
        by: date
        dir: desc
    pagination: '1'
show_sidebar: false
display_post_summary: false
post_icon: newspaper-o
hide_post_date: false
hide_post_taxonomy: false
hide_git_sync_repo_link: false
modular_content:
    items: '@self.modular'
    order:
        by: default
        custom:
            - _important-reminders
            - _unit-preparations
blog_url: home
feed:
    description: 'Sample Blog Description'
    limit: 10
pagination: true
---

# My Gravtastic Blog
## A tale of **awesomazing** adventures
