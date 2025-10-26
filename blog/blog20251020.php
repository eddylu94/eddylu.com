<!DOCTYPE html>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Eddy Lu</title>
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/blog-post.css">
  </head>
  <body>
    <div id="page_wrapper">
      <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/header.php'; ?>
      <div id="body_wrapper">
        <div id="container">
          <div class="blog-story">
            <div style="font-weight: bold; font-size: 48px;">A Day without AWS</div>
            <div style="font-style: italic; margin-top: 22px;">Monday, October 20, 2025</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">

            <img class="blogImage" src="/assets/images/blog/20251020/blog20251020_aws_outage.png" />
            <span class="caption">AWS outage status on DownDetector showing widespread service disruptions</span>

            <p>At around 1 am today, I woke up because my phone kept buzzing from a series of alerts from work systems indicating various services were down.
            After some investigation, my team determined that it was an AWS outage, something I've dealt with before, but this one seemed to have a wider impact than usual.</p>

            <p>What followed was a day that showed just how much we rely on cloud services.</p>

            <h1>Starting the Day</h1>

            <p>By the time I was ready to head to work, the AWS outage was already affecting services beyond just our internal systems.
            I usually use Lyft Baywheels to get from the Caltrain station to the office, but when I got to the 4th and King station, the bike-sharing system wasn't working.</p>

            <img class="blogImage" style="max-height: 400px;" src="/assets/images/blog/20251020/blog20251020_lyft_outage.png" />
            <span class="caption">Lyft app showing service outage notification</span>

            <br /><br />

            <img class="blogImage" style="max-height: 400px;" src="/assets/images/blog/20251020/blog20251020_bike_rack.png" />
            <span class="caption">The unusually full bike rack at 4th and King Caltrain Station - normally empty at this time of day</span>

            <p>What was weird was that the bike rack was completely full of bikes.
            Normally at this time of day, the rack would be nearly empty since commuters had already taken most of the bikes.
            The fact that it was full suggested the system had been down for a while, preventing people from both checking out and returning bikes.
            After a few attempts, I was able to get a bike and continue with my commute.
            </p>

            <p>This experience showed something interesting about how we depend on cloud services.
            Even something as simple as bike sharing relies on cloud infrastructure for payment processing, user authentication, and real-time inventory management.
            When that infrastructure fails, the entire service becomes unusable, even though the physical bikes are still there and functional.</p>

            <p>While I didn't experience it directly, the AWS outage had a big impact on social media platforms.
            Reddit and Snapchat were among the major services that went down, affecting millions of users worldwide.
            It's interesting how quickly we notice when these platforms are unavailable, even if we're not actively using them.</p>

            <p>By lunchtime, the AWS outage had spread to Forkable, our company's food ordering service.
            This was frustrating because it's one of those services you don't think about until it's not working.
            The entire team was trying to place orders, but the system was completely down.</p>

            <img class="blogImage" src="/assets/images/blog/20251020/blog20251020_forkable.png" />
            <span class="caption">Forkable service down due to AWS outage - eventually food was delivered once services were restored</span>

            <p>What was interesting was that even though the system was down, the food eventually arrived.
            This suggests that the restaurant side of the operation was still working, but the ordering and payment processing systems were affected by the AWS outage.
            It's a good reminder that many modern services are actually a complex web of interconnected systems, and when one part fails, the entire chain can break down.</p>

            <p>Eventually, the service was restored and our food was delivered, but it was a reminder of how dependent we've become on these digital intermediaries for even basic needs like food.</p>

            <h1>The Workday Chaos</h1>

            <p>Throughout the day, I got messages from various partner companies saying they were also dealing with AWS-related issues.
            This created a cascading effect where not only were our systems affected, but the systems of companies we depend on were also having problems.</p>

            <p>Internally, many of our tools were down or having issues.
            I won't list the specific tools that were affected, as I don't want to reveal internal work details, but the outage had a big impact on our day-to-day operations.</p>

            <p>What was challenging was the constant stream of alerts throughout the morning and early afternoon.
            Even though I knew the root cause was the AWS outage, I couldn't completely ignore the alerts because there was always the possibility of false positives or additional issues that needed attention.
            This created a state of constant vigilance that was both necessary and exhausting.</p>

            <h1>The Recovery Process</h1>

            <p>As the afternoon went on, it became clear that the AWS outage was starting to subside.
            Services were slowly coming back online, but the work wasn't over.
            The late afternoon was spent rerunning DAGs and making sure that all our systems were working properly now that the underlying infrastructure was stable.</p>

            <p>This recovery process was almost as important as the initial response to the outage.
            Simply waiting for services to come back online isn't enough; you need to verify that everything is working correctly and that no data was lost or corrupted during the outage.
            This involves running tests, checking logs, and making sure that all dependent systems are functioning as expected.</p>

            <h1>Reflections</h1>

            <p>This AWS outage was a reminder of just how much we rely on cloud services in our daily lives.
            From the moment I woke up until late afternoon, AWS's infrastructure problems affected everything from my commute to my lunch plans to my work responsibilities.</p>

            <p>What's striking is how these dependencies often go unnoticed until they fail.
            We take for granted that services like bike sharing, food delivery, and social media will always be available.
            But when the underlying infrastructure fails, we're reminded of just how fragile this interconnected system really is.</p>

            <p>For engineers and technical professionals, outages like this serve as reminders of the importance of redundancy, monitoring, and disaster recovery planning.
            While we can't prevent cloud provider outages, we can design our systems to be more resilient and have better visibility into what's happening when things go wrong.</p>

            <h1>References</h1>

            <p>AWS Outage Status on DownDetector:
            <br /><a target="_blank" href="https://downdetector.com/status/aws-amazon-web-services/">https://downdetector.com/status/aws-amazon-web-services/</a></p>

          </div>
        </div>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
      </div>
    </div>               
  </body>
</html>
