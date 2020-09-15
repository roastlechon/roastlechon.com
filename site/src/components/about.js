/** @jsx jsx */
import { jsx } from "theme-ui";
import {
  SEO,
  Layout,
} from "@roastlechon/gatsby-theme-succulent/src/components";

export default function About() {
  return (
    <Layout>
      <SEO title="About" description="Here's a little bit about myself" />
      <h2 sx={{ mt: 0 }}>About the guy behind roastlechon</h2>
      
      <h3>Who am I?</h3>

      <p>My name is Adelbert Noel Madali. I am a Filipino-American,
      born and raised in Georgia.</p>

      <h3>Adelbert? That's an interesting name.</h3>

      <p>Adelbert is Germanic in origin. It is a variant of the name,
      Adalbert, which is composed of the elements "adal" and "beraht".
      "Adal" and "beraht" respectively mean noble and bright.
      See <a href="https://en.wikipedia.org/wiki/Adalbert">Wikipedia</a> for more of it's origins.
      </p>

      <h3>What do you do?</h3>

      <p>I am a web architect for <a href="https://weather.com">weather.com</a>.
      I work for The Weather Company at IBM.</p>

      <h3>What do you like to do?</h3>

      <p>I like cooking, going out to eat, playing games, taking pictures, watching videos on YouTube.</p>

      <p>Over the years, I picked up newer hobbies like fishing and woodworking.</p>

      <h3>What is roastlechon?</h3>

      <p>Roastlechon has been my alias for years. The name is a reflection of my love for 
      food and my cultural background. I grew up cooking and eating delicious food. Lechon is
      a common Filipino pork dish which is a roasted suckling pig. I added roast in front of
      lechon to make the name more unique as an alias.</p>
    </Layout>
  );
}
