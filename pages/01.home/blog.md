---
title: Home
metadata:
    'twitter:card': summary
    'twitter:site': '@getgrav'
    'twitter:title': 'Grav CMS Open Course Hub Title'
    'twitter:description': 'Grav CMS Open Course Hub Description'
    'twitter:image': ''
body_classes: 'header-image fullwidth'
child_type: item
content:
    items: '@self.children'
    limit: 4
    order:
        by: date
        dir: desc
    pagination: '1'
hide_sidebar: false
display_post_summary: false
post_icon: calendar-o
hide_post_date: true
hide_post_taxonomy: true
hide_git_sync_repo_link: false
modular_content:
    items: '@self.modular'
    order:
        by: default
        custom:
            - _important-reminders
            - _unit-preparations
feed:
    description: 'Grav CMS Open Course Hub Description'
    limit: 10
---

