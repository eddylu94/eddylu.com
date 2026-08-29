---
title: "Effects of timezones for last minute crypto tax harvesting"
date: 2023-04-15
cover: /images/blog/20230415/blog20230415_banner.png
---

Like many people, I traded an crypto coins/tokens over the past few years, particularly during the turbulent year of 2021. During this year, crypto peaked to all-time highs before settling down towards the end of the calendar year.

Like many people, at the end of 2021, I found myself in possession of crypto currencies with unrealized losses.

![Price of BTC in USD from late 2021 to early 2023 (CoinMarketCap)](/images/blog/20230415/blog20230415_btc.png)

*Price of BTC in USD from late 2021 to early 2023 ([CoinMarketCap](https://coinmarketcap.com/currencies/bitcoin/))*

Interestingly, unlike most securities such as stocks, mutual funds, etc., crypto trades are not subjected to wash sale rules in the United States (as of April 2023).

Therefore, I decided to capitalize on this opportunity.

## What are wash sales?

For income taxes, taxpayers have the ability to deduct their taxes by indicating losses on sold securities. However, to prevent taxpayers from abusing this benefit and creating "artificial" losses from sales, the IRS imposes a [wash sale](https://www.investopedia.com/terms/w/washsalerule.asp) rule where:

If an individual sells/trades a security at a loss and, within 30 days before or after this sale, buys the same or a substantially identical stock or security, or acquires a contract or option to do so; those losses will be discounted for tax deduction purposes.

Currently, the IRS does not classify cryptocurrency as a security subject to the wash sale rule.

## The Plan

The plan was quite simple. Before midnight on New Year's, I would sell all of my crypto that had unrealized losses. Then, after selling those currencies, I would immediately re-purchase those currencies in the same amounts for which I had sold them.

By selling and re-purchasing, I would essentially possess exactly what I had before these transactions (minus the small difference caused by maker/taker fees), and I would also be able to claim the losses from the sales for tax deduction purposes.

## What went wrong?

For the 2021 tax year, I used CoinTracker to aggregate my crypto trades as this was a popular tax tool that easily integrated with major brokerages such as Coinbase and Kucoin. However, when I viewed my transactions for certain currencies that were sold before midnight of New Year's Day, I noticed that these transactions were timestamped as January 1st, 2022. At this point, I realized that my transactions at roughly 11:18 pm PST were being offset to 3:18 pm.

![Transactions displayed in Cointracker](/images/blog/20230415/blog_20230415_cointracker.png)

*Transactions displayed in Cointracker*

The time of 3:18 pm (Jan 1st) to some degree makes sense as it is 16 hours ahead of Pacific Standard Time (UTC-8); this time would correspond to UTC+8 which includes the countries of China and Singapore. The trading platform, Kucoin, was originally based in China and Singapore (before being relocated to Seychelles). Therefore, it seemed that Cointracker was using brokerage-based local timestamps provided by Kucoin for those transactions.

![UTC-8 timezone highlighted in gray (timeanddate.com)](/images/blog/20230415/blog20230415_timezone_minus8.png)

*UTC-8 timezone highlighted in gray ([timeanddate.com](https://www.timeanddate.com/time/map/))*

![UTC+8 timezone highlighted in gray (timeanddate.com)](/images/blog/20230415/blog20230415_timezone_plus8.png)

*UTC+8 timezone highlighted in gray ([timeanddate.com](https://www.timeanddate.com/time/map/))*

Upon this realization, I decided to simply wait for the 2022 tax year and claim my losses then.

For the 2022 tax year, due to changes in billing models for Cointracker, and the introduction of complimentary tax software provided by Crypto.com, I decided to use Crypto.com's tax software. However, to my surprise, the Kucoin transactions from my attempted wash sales were not included in the 2022 tax year! Instead, those transactions were listed at 11:18 pm in 2021, the actual local time of those transactions in PST. Thus, the losses were neither included in 2021 nor 2022!

![Transactions displayed in Crypto.com](/images/blog/20230415/blog_20230415_cryptocom.png)

*Transactions displayed in Crypto.com*

## The Solution

Fortunately, given that I noticed that discrepency in timezone treatments between the two crypto tax platforms, I simply updated the timestamps of the transactions using Crypto.com's built-in manual edit functionality so that the timezones were consistent with those defined by CoinTracker.

![Editing transaction timestamps in Crypto.com](/images/blog/20230415/blog_20230415_cryptocom_edit.png)

So now I know, be aware of potential timezone discrepencies when using tax softwares, and, if possible, don't wait until the last hour of the year to perform any haste financial transactions!

## Relevant Links

Wash-Sale Rule: What Is It, Examples, and Penalties:
[https://www.investopedia.com/terms/w/washsalerule.asp](https://www.investopedia.com/terms/w/washsalerule.asp)
