/** @jsx jsx */
import { jsx, Styled } from "theme-ui";
import { useStaticQuery, graphql } from "gatsby";
import { Underline } from "@roastlechon/gatsby-theme-succulent/src/components";

function Writing({ href, linkText, date }) {
  return (
    <li sx={{ mb: 2 }}>
      <time
        sx={{ mr: 3, color: `tertiary` }}
      >
        {" "}
        {date}
      </time>
      <Underline themeColor="text" hoverThemeColor="secondary">
        <a
          href={href}
          target="_blank"
          rel="noopener noreferrer"
          sx={{ variant: `links.underline` }}
        >
          {linkText}
        </a>
      </Underline>
    </li>
  );
}

export default function Writings() {
  const {
    site: {
      siteMetadata: { writings = [] },
    },
  } = useStaticQuery(writingsQuery);

  return (
    <section>
      <span>
        <h2 sx={{ variant: 'title' }}>Writings</h2>
      </span>
      <Styled.ul>
        {
          writings.map(writing => <Writing
            key={writing.name}
            href={writing.url}
            linkText={writing.name}
            date={writing.date}
          />)
        }
      </Styled.ul>
    </section>
  );
}


const writingsQuery = graphql`
  query {
    site {
      siteMetadata {
        writings {
          name
          url
          date
        }
      }
    }
  }
`;
