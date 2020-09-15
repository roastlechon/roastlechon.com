/** @jsx jsx */
import React from "react";
import { jsx } from "theme-ui";
import { useStaticQuery, graphql } from "gatsby";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faEnvelope } from "@fortawesome/free-solid-svg-icons";
import {
  faGithub,
  faLinkedin,
} from "@fortawesome/free-brands-svg-icons";

function SocialLinks({ socialLinks }) {

  return (
    <>
      {
        socialLinks.map((socialLink, index) => {
          let icon;
          
          switch (socialLink.icon) {
            case 'github':
              icon = faGithub;
              break;
            case 'linkedin':
              icon = faLinkedin;
              break;
            case 'envelope':
              icon = faEnvelope;
              break;
            default:
          }

          return (
            <React.Fragment
              key={socialLink.name}
            >
              {index === socialLinks.length - 1 ? ', and ' : ''}
              <a
                sx={{ variant: 'links.social' }}
                href={socialLink.url}
                target="_blank"
                rel="noopener noreferrer"
              >
                <FontAwesomeIcon icon={icon} />
              </a>
              {index >= 0 && (index !== socialLinks.length - 1) && (index !== socialLinks.length - 2) ? ', ' : ''}
            </React.Fragment>
          )
        })
      }
    </>
  );
}

export default function Intro() {
  const {
    site: {
      siteMetadata: { social },
    },
  } = useStaticQuery(socialLinkQuery);

  return (
    <section>
      <p>
        Hi, I am a Web Architect for The Weather Company at IBM.
      </p>
      <p>
        Reach out on{' '}
        <SocialLinks
          socialLinks={social}
        />
      </p>
    </section>
  );
}

const socialLinkQuery = graphql`
  query {
    site {
      siteMetadata {
        social {
          name
          url
          icon
        }
      }
    }
  }
`;
