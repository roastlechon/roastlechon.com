const withDefaults = require(`./utils/default-options`);

module.exports = (themeOptions) => {
  const options = withDefaults(themeOptions);

  return {
    plugins: [
      `gatsby-plugin-react-helmet`,
      `gatsby-plugin-theme-ui`,
      {
        resolve: `gatsby-plugin-mdx`,
        options: {
          extensions: [`.mdx`, `.md`],
          gatsbyRemarkPlugins: [
            `gatsby-remark-smartypants`,
            `gatsby-remark-responsive-iframe`,
            `gatsby-remark-copy-linked-files`,
            {
              resolve: `gatsby-remark-autolink-headers`,
              options: {
                icon: false,
              },
            },
            {
              resolve: `gatsby-remark-images`,
              options: {
                maxWidth: 1280,
                linkImagesToOriginal: false,
                withWebp: true,
              },
            },
          ],
        },
      },
      {
        resolve: `gatsby-source-filesystem`,
        options: {
          path: options.contentPath,
          name: options.contentPath,
        },
      },
      {
        resolve: `gatsby-source-filesystem`,
        options: {
          path: options.assetPath,
          name: options.assetPath,
        },
      },
      `gatsby-transformer-sharp`,
      `gatsby-plugin-sharp`,
    ],
  };
};
