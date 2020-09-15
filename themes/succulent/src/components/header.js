/** @jsx jsx */
import { jsx } from "theme-ui";
import { graphql, Link, useStaticQuery } from "gatsby";
import logo from './logo.png';

function PrimaryLink({ to, linkText }) {
  return (
    <Link
      to={to}
      sx={{
        ":hover": {
          backgroundImage: theme => `linear-gradient(
              transparent,
              transparent 5px,
              ${theme.colors.primary} 5px,
              ${theme.colors.primary}
            )`,
          backgroundPosition: `bottom`,
          backgroundSize: `100% 6px`,
          backgroundRepeat: `repeat-x`,
        },
      }}
    >
      {linkText}
    </Link>
  );
}

const Query = graphql`
  query {
    site {
      siteMetadata {
        title
        author
      }
    }
  }
`;

export default function Header() {
  const {
    site: {
      siteMetadata: {
        title,
      },
    },
  } = useStaticQuery(Query);

  return (
    <header sx={{ variant: `layout.header` }}>
      <Link to="/" className="logo">
        <img src={logo} alt="roastlechon" />
      </Link>
      <Link
        to="/"
        sx={{ variant: `links.secondary`, justifySelf: `flex-start` }}
      >
        <h1>{title}</h1>
      </Link>
      <nav sx={{ variant: `layout.nav` }}>
        <span>
          <PrimaryLink to="/" linkText="Home" />
        </span>
        <span>
          <PrimaryLink to="/about/" linkText="About" />
        </span>
        <span>
          <PrimaryLink to="/archives/" linkText="Writings" />
        </span>
      </nav>
    </header>
  );
}
