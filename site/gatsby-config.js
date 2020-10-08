module.exports = {
  plugins: [
    {
      resolve: '@roastlechon/gatsby-theme-succulent',
      options: {
        /*
          This theme passes all the options to its base theme, gatsby-theme-blog-core
          - basePath: defaults to '/'
          - contentPath: defaults to 'content/posts'
          - assetPath: default to 'content/assets'
        */
      },
    },
  ],
  // Customize your site metadata:
  siteMetadata: {
    title: 'roastlechon',
    siteUrl: 'https://roastlechon.com',
    author: 'Adelbert Noel Madali',
    lang: 'en-US',
    description: 'Ramblings of a software architect',
    social: [
      {
        name: 'LinkedIn',
        icon: 'linkedin',
        url: 'https://www.linkedin.com/in/roastlechon/',
      },
      {
        name: 'Github',
        icon: 'github',
        url: 'https://github.com/roastlechon',
      },
      {
        name: 'Email',
        icon: 'envelope',
        url: 'mailto:amadali@gmail.com',
      },
    ],
    projects: [
      {
        name: 'nodejs-rtorrent',
        url: 'https://github.com/roastlechon/nodejs-rtorrent',
        desc: 'Node.js rtorrent web UI. Currently outdated and not maintained.'
      }
    ],
    writings: [
      {
        name: 'How The Weather Company uses Node.js in production',
        url: 'https://developer.ibm.com/articles/nodejs-weather-company-success-story/',
        date: '20 Apr 2020'
      }
    ],
  },
}
