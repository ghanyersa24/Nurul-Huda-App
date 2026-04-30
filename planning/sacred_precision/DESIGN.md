---
name: Sacred Precision
colors:
  surface: '#f7f9fb'
  surface-dim: '#d8dadc'
  surface-bright: '#f7f9fb'
  surface-container-lowest: '#ffffff'
  surface-container-low: '#f2f4f6'
  surface-container: '#eceef0'
  surface-container-high: '#e6e8ea'
  surface-container-highest: '#e0e3e5'
  on-surface: '#191c1e'
  on-surface-variant: '#404944'
  inverse-surface: '#2d3133'
  inverse-on-surface: '#eff1f3'
  outline: '#707974'
  outline-variant: '#bfc9c3'
  surface-tint: '#2b6954'
  primary: '#003527'
  on-primary: '#ffffff'
  primary-container: '#064e3b'
  on-primary-container: '#80bea6'
  inverse-primary: '#95d3ba'
  secondary: '#426657'
  on-secondary: '#ffffff'
  secondary-container: '#c1e8d6'
  on-secondary-container: '#466a5b'
  tertiary: '#183327'
  on-tertiary: '#ffffff'
  tertiary-container: '#2e4a3d'
  on-tertiary-container: '#9ab9a8'
  error: '#ba1a1a'
  on-error: '#ffffff'
  error-container: '#ffdad6'
  on-error-container: '#93000a'
  primary-fixed: '#b0f0d6'
  primary-fixed-dim: '#95d3ba'
  on-primary-fixed: '#002117'
  on-primary-fixed-variant: '#0b513d'
  secondary-fixed: '#c4ebd9'
  secondary-fixed-dim: '#a8cfbd'
  on-secondary-fixed: '#002116'
  on-secondary-fixed-variant: '#2a4d40'
  tertiary-fixed: '#caead8'
  tertiary-fixed-dim: '#aecebc'
  on-tertiary-fixed: '#042015'
  on-tertiary-fixed-variant: '#314c3f'
  background: '#f7f9fb'
  on-background: '#191c1e'
  surface-variant: '#e0e3e5'
typography:
  h1:
    fontFamily: Inter
    fontSize: 40px
    fontWeight: '700'
    lineHeight: 48px
    letterSpacing: -0.02em
  h2:
    fontFamily: Inter
    fontSize: 32px
    fontWeight: '600'
    lineHeight: 40px
    letterSpacing: -0.02em
  h3:
    fontFamily: Inter
    fontSize: 24px
    fontWeight: '600'
    lineHeight: 32px
    letterSpacing: -0.01em
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: 28px
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: 24px
  body-sm:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '400'
    lineHeight: 20px
  label-md:
    fontFamily: Inter
    fontSize: 14px
    fontWeight: '600'
    lineHeight: 16px
    letterSpacing: 0.01em
  label-sm:
    fontFamily: Inter
    fontSize: 12px
    fontWeight: '500'
    lineHeight: 16px
    letterSpacing: 0.02em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 4px
  xs: 4px
  sm: 8px
  md: 16px
  lg: 24px
  xl: 40px
  gutter: 24px
  margin: 32px
---

## Brand & Style

The brand personality for this design system is rooted in serenity, reliability, and communal service. It balances the spiritual weight of mosque management with the technical efficiency required for modern administration. The aesthetic follows a **Corporate Modern** approach with a **Minimalist** lens, prioritizing clarity and ease of use for diverse user groups—from administrators to congregants. 

The emotional response should be one of "quiet confidence." By utilizing generous whitespace and a restrained palette, the UI recedes to let sacred information (prayer times, community announcements, and financial transparency) take center stage. The visual language avoids decorative excess, instead finding beauty in alignment, structural harmony, and high-quality typography.

## Colors

The palette is anchored by "Deep Emerald," a color deeply associated with Islamic heritage, representing growth and peace. This is complemented by "Sage" and "Muted Mint" to soften the interface and provide accessible layering options.

- **Primary (Deep Emerald):** Used for key actions, brand identity, and high-level navigation.
- **Secondary (Sage):** Used for subtle accents, success states, and secondary buttons.
- **Tertiary (Mint):** Used for decorative elements, soft backgrounds, and non-critical progress indicators.
- **Neutrals:** A range of Cool Grays (from #F8FAFC to #1E293B) ensures that text remains legible and structural boundaries (like table borders) are present but unobtrusive.
- **Semantic Colors:** Traditional red for errors and amber for warnings should be desaturated to fit the calm aesthetic of the system.

## Typography

This design system utilizes **Inter** exclusively to leverage its exceptional legibility and systematic modularity. The typographic scale is designed for high information density, particularly within management tables and dashboards.

- **Headlines:** Use tighter letter-spacing and heavier weights to create a strong visual anchor on pages.
- **Body Text:** Uses standard weights with comfortable line heights to ensure long-form announcements or reports are easy to digest.
- **Labels:** Utilized for form headers and button text, these are slightly tracked out and bolded for immediate recognition.
- **Numerical Data:** In financial sections or prayer time tables, ensure the use of tabular num font-features to maintain vertical alignment in columns.

## Layout & Spacing

This design system employs a **Fixed Grid** approach for desktop dashboards and a **Fluid Grid** for mobile views to ensure consistency across the administrative suite. 

- **Grid:** A 12-column grid is used for the main content area, with a standard 24px gutter.
- **Spacing Rhythm:** Based on a 4px baseline grid. Internal component padding (e.g., inside a card) should typically be 24px (lg) to provide enough "breathing room" for a respectful atmosphere.
- **Margins:** Page margins are generous (32px+) to prevent the interface from feeling cluttered or overwhelming, which is critical for a tool used in a religious context.

## Elevation & Depth

To maintain a modern and professional feel, depth is achieved through **Tonal Layers** and **Low-Contrast Outlines**. 

- **Surfaces:** The primary background is the lightest neutral (#F8FAFC). Cards and containers use pure white (#FFFFFF).
- **Outlines:** Instead of heavy shadows, use 1px borders in a soft gray (#E2E8F0) to define sections.
- **Subtle Shadows:** Reserve shadows for interactive elements like modals or hovering states over cards. These should be "Ambient Shadows"—large blur radius (12px-24px), very low opacity (4-8%), and a slight tint of the Primary Deep Emerald to tie the elevation into the brand's color story.

## Shapes

The shape language is **Rounded**, reflecting a friendly and approachable community character. 

- **Base Radius:** 0.5rem (8px) for standard buttons, input fields, and small cards.
- **Large Radius:** 1rem (16px) for main dashboard containers and featured content sections.
- **Full Radius:** Reserved for status chips, avatars, and search bars to provide visual variety and signify interactive "pills."

## Components

Components are designed for utility and accessibility, ensuring they perform well under high-use management scenarios.

- **Buttons:** Primary buttons use the Deep Emerald background with white text. Secondary buttons use a Sage outline. Ghost buttons are used for less frequent actions to reduce visual noise.
- **Cards:** The core of the layout. Cards should have a 1px border and no shadow in their default state. They feature a 24px internal padding and clear headers.
- **Tables:** Essential for management. Tables should be "Clean Style"—no vertical lines, only soft horizontal dividers. Rows should have a subtle hover state in the Tertiary Mint color.
- **Forms:** Input fields use a 1px border that thickens and changes to Deep Emerald on focus. Labels are always positioned above the field for maximum accessibility.
- **Chips:** Small, pill-shaped indicators for categories (e.g., "Donation," "Maintenance," "Event"). They use a desaturated version of the category color with high-contrast text.
- **Icons:** Use a custom-picked or standard minimal line-art set (e.g., Lucide). Stroke weights should be consistent (1.5px or 2px) to match the typography's visual weight.
- **Prayer Time Widget:** A specialized component featuring a vertical list or horizontal cards with a "Highlight State" for the current/upcoming prayer time using the Primary color.