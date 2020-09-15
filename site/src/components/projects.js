/** @jsx jsx */
import { jsx, Styled } from "theme-ui";
import { useStaticQuery, graphql } from "gatsby";
import { Underline } from "@roastlechon/gatsby-theme-succulent/src/components";

function ProjectItem({ href, linkText, desc }) {
  return (
    <li sx={{ mb: 2 }}>
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
      : <p sx={{ display: `inline` }}>{desc}</p>
    </li>
  );
}

export default function Projects() {
  const {
    site: {
      siteMetadata: { projects = [] },
    },
  } = useStaticQuery(projectsQuery);

  return (
    <section>
      <span>
        <h2 sx={{ variant: 'title' }}>Projects</h2>
      </span>
      <Styled.ul>
        {
          projects.map(project => <ProjectItem
            key={project.name}
            href={project.url}
            linkText={project.name}
            desc={project.desc}
          />)
        }
      </Styled.ul>
    </section>
  );
}


const projectsQuery = graphql`
  query {
    site {
      siteMetadata {
        projects {
          name
          url
          desc
        }
      }
    }
  }
`;
