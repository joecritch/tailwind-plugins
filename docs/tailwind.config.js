// A17 tailwind plugins
const { Setup, RatioBox, Layout, GridLine, PseudoElements, DevTools, GridGap, Container, Keyline, Spacing, Typography, ColorTokens, ApplyColorVariables, Underline, Components, CssInJs, GridLayout, SpacingTokens } = require('@area17/a17-tailwind-plugins');

// conf
const feConfig = require('./frontend.config.json');

module.exports = {
  content: ['./docs/**/*.php', './docs/*.php'],
  corePlugins: {
    container: false
  },
  plugins: [Setup, Typography, Spacing, RatioBox, Layout, GridLine, PseudoElements, DevTools, GridGap, Container, Keyline, ColorTokens, Underline, Components, CssInJs, GridLayout],
  theme: {
    screens: feConfig.structure.breakpoints,
    mainColWidths: feConfig.structure.container,
    innerGutters: feConfig.structure.gutters.inner,
    outerGutters: feConfig.structure.gutters.outer,
    columnCount: feConfig.structure.columns,
    fontFamilies: feConfig.typography.families,
    typesets: feConfig.typography.typesets,
    spacingGroups: feConfig.spacing.groups,
    spacing: SpacingTokens(feConfig.spacing.tokens),
    colors: feConfig.color.tokens,
    borderColor: ApplyColorVariables(feConfig.color.tokens, feConfig.color.borderColor),
    textColor: ApplyColorVariables(feConfig.color.tokens, feConfig.color.textColor),
    backgroundColor: ApplyColorVariables(feConfig.color.tokens, feConfig.color.backgroundColor),
    ratios: feConfig.ratios,
    components: feConfig.components,
    css: feConfig.css,
    extend: {
      minHeight: ({ theme }) => theme('spacing'),
      spacing: {
        'safe-top': 'env(safe-area-inset-top)',
        'safe-bottom': 'env(safe-area-inset-bottom)',
        'safe-left': 'env(safe-area-inset-left)',
        'safe-right': 'env(safe-area-inset-right)',
        'gutter': 'var(--inner-gutter)',
        'outer-gutter': 'var(--outer-gutter)'
      }
    }
  }
}