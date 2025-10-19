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
            <div style="font-weight: bold; font-size: 48px;">Effects of timezones for last minute crypto tax harvesting</div>
            <div style="font-style: italic; margin-top: 22px;">Saturday, April 15, 2023</div>
          </div>
          <div class="blog-story" style="line-height: 1.50; margin-top: 50px">
            <img class="blogImage" src="/assets/images/blog/20230415/blog20230415_banner.png" />

            <p>Like many people, I traded an crypto coins/tokens over the past few years, particularly during the turbulent year of 2021.
            During this year, crypto peaked to all-time highs before settling down towards the end of the calendar year.</p>

            <p>Like many people, at the end of 2021, I found myself in possession of crypto currencies with unrealized losses.</p>

            <img class="blogImage" style="max-height: 300px;" src="/assets/images/blog/20230415/blog20230415_btc.png" />
            <span class="caption">Price of BTC in USD from late 2021 to early 2023 <a href="https://coinmarketcap.com/currencies/bitcoin/">(CoinMarketCap)</a></span>

            <p>Interestingly, unlike most securities such as stocks, mutual funds, etc., crypto trades are not subjected to wash sale rules in the United States (as of April 2023).</p>

            <p>Therefore, I decided to capitalize on this opportunity.</p>
        
            <h1>What are wash sales?</h1>

            <p>For income taxes, taxpayers have the ability to deduct their taxes by indicating losses on sold securities.
            However, to prevent taxpayers from abusing this benefit and creating "artificial" losses from sales, the IRS imposes a <a target="_blank" href="https://www.investopedia.com/terms/w/washsalerule.asp">wash sale</a> rule where:</p>

            <p>If an individual sells/trades a security at a loss and, within 30 days before or after this sale,
            buys the same or a substantially identical stock or security, or acquires a contract or option to do so;
            those losses will be discounted for tax deduction purposes.</p>

            <p>Currently, the IRS does not classify cryptocurrency as a security subject to the wash sale rule.</p>

            <h1>The Plan</h1>

            <p>The plan was quite simple.
            Before midnight on New Year's, I would sell all of my crypto that had unrealized losses.
            Then, after selling those currencies, I would immediately re-purchase those currencies in the same amounts for which I had sold them.</p>

            <p>By selling and re-purchasing, I would essentially possess exactly what I had before these transactions
            (minus the small difference caused by maker/taker fees), and I would also be able to claim the losses from the sales for tax deduction purposes.</p>

            <h1>What went wrong?</h1>

            <p>For the 2021 tax year, I used CoinTracker to aggregate my crypto trades as this was a popular tax tool
            that easily integrated with major brokerages such as Coinbase and Kucoin.
            However, when I viewed my transactions for certain currencies that were sold before midnight of New Year's Day,
            I noticed that these transactions were timestamped as January 1st, 2022.
            At this point, I realized that my transactions at roughly 11:18 pm PST were being offset to 3:18 pm.</p>

            <img class="blogImage" src="/assets/images/blog/20230415/blog_20230415_cointracker.png" />
            <span class="caption">Transactions displayed in Cointracker</span>

            <p>The time of 3:18 pm (Jan 1st) to some degree makes sense as it is 16 hours ahead of Pacific Standard Time (UTC-8);
            this time would correspond to UTC+8 which includes the countries of China and Singapore.
            The trading platform, Kucoin, was originally based in China and Singapore (before being relocated to Seychelles).
            Therefore, it seemed that Cointracker was using brokerage-based local timestamps provided by Kucoin for those transactions.</p>

            <img class="blogImage" src="/assets/images/blog/20230415/blog20230415_timezone_minus8.png" />
            <span class="caption">UTC-8 timezone highlighted in gray (<a target="_blank" href="https://www.timeanddate.com/time/map/">timeanddate.com</a>)</span>

            <img class="blogImage" src="/assets/images/blog/20230415/blog20230415_timezone_plus8.png" />
            <span class="caption">UTC+8 timezone highlighted in gray (<a target="_blank" href="https://www.timeanddate.com/time/map/">timeanddate.com</a>)</span>

            <p>Upon this realization, I decided to simply wait for the 2022 tax year and claim my losses then.</p>

            <p>For the 2022 tax year, due to changes in billing models for Cointracker, and the introduction of complimentary tax software provided by Crypto.com,
            I decided to use Crypto.com's tax software.
            However, to my surprise, the Kucoin transactions from my attempted wash sales were not included in the 2022 tax year!
            Instead, those transactions were listed at 11:18 pm in 2021, the actual local time of those transactions in PST.
            Thus, the losses were neither included in 2021 nor 2022!</p>

            <img class="blogImage" src="/assets/images/blog/20230415/blog_20230415_cryptocom.png" />
            <span class="caption">Transactions displayed in Crypto.com</span>

            <h1>The Solution</h1>

            <p>Fortunately, given that I noticed that discrepency in timezone treatments between the two crypto tax platforms,
            I simply updated the timestamps of the transactions using Crypto.com's built-in manual edit functionality
            so that the timezones were consistent with those defined by CoinTracker.</p>

            <img class="blogImage" src="/assets/images/blog/20230415/blog_20230415_cryptocom_edit.png" />

            <p>So now I know, be aware of potential timezone discrepencies when using tax softwares,
            and, if possible, don't wait until the last hour of the year to perform any haste financial transactions!</p>

            <h1>Relevant Links</h1>

            <p>Wash-Sale Rule: What Is It, Examples, and Penalties:
            <br /><a target="_blank" href="https://www.investopedia.com/terms/w/washsalerule.asp">https://www.investopedia.com/terms/w/washsalerule.asp</a></p>
          </div>
        </div>
      </div>
    </div>               
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/assets/includes/footer.php'; ?>
  </body>
</html>