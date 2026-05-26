---
name: Obsidian Aura
colors:
  surface: '#131313'
  surface-dim: '#131313'
  surface-bright: '#3a3939'
  surface-container-lowest: '#0e0e0e'
  surface-container-low: '#1c1b1b'
  surface-container: '#201f1f'
  surface-container-high: '#2a2a2a'
  surface-container-highest: '#353534'
  on-surface: '#e5e2e1'
  on-surface-variant: '#c7c4d7'
  inverse-surface: '#e5e2e1'
  inverse-on-surface: '#313030'
  outline: '#908fa0'
  outline-variant: '#464554'
  surface-tint: '#c0c1ff'
  primary: '#c0c1ff'
  on-primary: '#1000a9'
  primary-container: '#8083ff'
  on-primary-container: '#0d0096'
  inverse-primary: '#494bd6'
  secondary: '#ddb7ff'
  on-secondary: '#490080'
  secondary-container: '#6f00be'
  on-secondary-container: '#d6a9ff'
  tertiary: '#89ceff'
  on-tertiary: '#00344d'
  tertiary-container: '#009ada'
  on-tertiary-container: '#002d43'
  error: '#ffb4ab'
  on-error: '#690005'
  error-container: '#93000a'
  on-error-container: '#ffdad6'
  primary-fixed: '#e1e0ff'
  primary-fixed-dim: '#c0c1ff'
  on-primary-fixed: '#07006c'
  on-primary-fixed-variant: '#2f2ebe'
  secondary-fixed: '#f0dbff'
  secondary-fixed-dim: '#ddb7ff'
  on-secondary-fixed: '#2c0051'
  on-secondary-fixed-variant: '#6900b3'
  tertiary-fixed: '#c9e6ff'
  tertiary-fixed-dim: '#89ceff'
  on-tertiary-fixed: '#001e2f'
  on-tertiary-fixed-variant: '#004c6e'
  background: '#131313'
  on-background: '#e5e2e1'
  surface-variant: '#353534'
typography:
  display-xl:
    fontFamily: Sora
    fontSize: 80px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.04em
  display-xl-mobile:
    fontFamily: Sora
    fontSize: 48px
    fontWeight: '700'
    lineHeight: '1.1'
    letterSpacing: -0.02em
  headline-lg:
    fontFamily: Sora
    fontSize: 48px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  headline-lg-mobile:
    fontFamily: Sora
    fontSize: 32px
    fontWeight: '600'
    lineHeight: '1.2'
    letterSpacing: -0.02em
  body-lg:
    fontFamily: Inter
    fontSize: 18px
    fontWeight: '400'
    lineHeight: '1.6'
    letterSpacing: 0em
  body-md:
    fontFamily: Inter
    fontSize: 16px
    fontWeight: '400'
    lineHeight: '1.6'
    letterSpacing: 0em
  label-caps:
    fontFamily: JetBrains Mono
    fontSize: 12px
    fontWeight: '500'
    lineHeight: '1.0'
    letterSpacing: 0.1em
rounded:
  sm: 0.25rem
  DEFAULT: 0.5rem
  md: 0.75rem
  lg: 1rem
  xl: 1.5rem
  full: 9999px
spacing:
  unit: 8px
  container-max: 1440px
  gutter: 32px
  margin-desktop: 80px
  margin-mobile: 24px
  section-gap: 160px
---

## Brand & Style

The visual identity of this design system is rooted in the intersection of high-end technical precision and cinematic artistry. It targets a sophisticated audience of creative directors, founders, and tech visionaries who value both functional excellence and aesthetic narrative. 

The design style is a meticulous blend of **Minimalism** and **Glassmorphism**. It leverages deep obsidian voids to create a sense of infinite depth, contrasted by ultra-sharp typography and ethereal light leaks. The emotional response is one of "Technical Luxury"—feeling both exceptionally well-engineered and effortlessly elegant. Every element is treated as a piece of digital jewelry: refined, purposeful, and polished.

## Colors

This design system utilizes a "Deep Dark" philosophy. The foundation is **Obsidian (#050505)**, providing a purer black than standard dark modes to enhance contrast with vibrant accents. 

- **Primary & Secondary:** A cinematic pairing of Electric Indigo and Soft Violet, used primarily for interactive states, focal points, and data visualization.
- **Neutrals:** A scale of Slate Grays is used to define hierarchy and surface depth without breaking the dark atmosphere.
- **Gradients:** Employed sparingly as "light leaks" or background glows to simulate a physical environment where light interacts with glass.

## Typography

Typography in this design system emphasizes contrast and technical clarity. 

**Sora** is utilized for headlines to provide a modern, geometric, and slightly futuristic tone. Headlines should feature tight letter-spacing to create a "blocky" high-end editorial feel. 

**Inter** handles body copy for its exceptional readability and neutral, professional character. 

**JetBrains Mono** is used for labels and metadata to lean into the "Developer" aspect of the brand, signaling precision and technical craft. 

Hierarchy is established through extreme scale—pairing massive display titles with small, widely-spaced mono labels.

## Layout & Spacing

This design system follows a **Fixed Grid** model for desktop, centered within the viewport to maintain a premium "gallery" feel. 

- **Grid:** A 12-column system with generous 32px gutters.
- **Whitespace:** Emphasize verticality with large 160px gaps between major sections. This "breathability" is essential for the Awwwards-level aesthetic.
- **Reflow:** On mobile, margins shrink to 24px and the grid collapses to 1 column. 
- **Alignment:** Consistent use of left-aligned typography contrasted with right-aligned metadata creates a sophisticated asymmetrical balance.

## Elevation & Depth

Depth is not created through traditional drop shadows, but through **translucency and fine-line borders.**

1.  **Glass Surfaces:** Use `backdrop-filter: blur(24px)` combined with a highly transparent white fill (`rgba(255, 255, 255, 0.03)`).
2.  **Fine Borders:** Elements are defined by 1px solid borders using a low-opacity Slate Gray (`rgba(255, 255, 255, 0.1)`). This creates a "blueprint" or "glass edge" effect.
3.  **Inner Glows:** Instead of outer shadows, use subtle inner borders or "rim lights" on the top edge of components to simulate an overhead light source.
4.  **Z-Axis Hierarchy:** Higher-level elements (like modals or floating nav) increase their background blur and border brightness, rather than adding darker shadows.

## Shapes

The shape language is "Sophisticated Softness." 

Standard components utilize a **0.5rem (8px)** radius to feel modern and approachable. Large containers and cards scale up to **1.5rem (24px)** to emphasize the "object" quality of the content. 

Avoid fully circular buttons (except for icon-only triggers); instead, use the standard roundedness to maintain a structured, professional appearance. Interactive "Skill Pills" should use a pill-shape (full radius) to differentiate them from functional UI components.

## Components

### Buttons
- **Primary:** Gradient fill (Electric Indigo to Violet) with white text. High-contrast, no border.
- **Secondary/Ghost:** 1px Slate border, transparent background. On hover, a subtle white tint fill (5% opacity).

### Project Cards
- **Structure:** Large image container with a "Glassmorphic" info overlay at the bottom.
- **Interaction:** On hover, the image should subtly scale (1.05x) while the fine-line border brightens to primary color indigo.

### Skill Pills
- **Style:** Small, pill-shaped elements with a mono-font label. 
- **Interaction:** Hover triggers a soft "glow" effect—an Indigo outer shadow with high spread and low opacity.

### Input Fields
- **Style:** Underline-only or very subtle glass-filled rectangles. 
- **Active State:** The bottom border transforms into the brand gradient, and the label floats upwards using the mono-font style.

### Navigation
- **Style:** A floating, glassmorphic "Dock" centered at the bottom or top of the screen. 
- **Blurs:** High blur (40px) to ensure legibility over any background content.