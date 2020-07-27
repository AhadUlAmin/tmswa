-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 04, 2020 at 11:06 AM
-- Server version: 5.6.21
-- PHP Version: 5.5.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `webagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
`article_id` int(20) NOT NULL,
  `article_title` varchar(200) DEFAULT NULL,
  `article_description` longtext,
  `article_category` varchar(20) DEFAULT NULL,
  `article_date` varchar(20) DEFAULT NULL,
  `article_unique` varchar(200) DEFAULT NULL,
  `article_approval` varchar(20) DEFAULT NULL,
  `article_identify` varchar(100) DEFAULT NULL,
  `article_writer` varchar(50) DEFAULT NULL,
  `article_publicity` varchar(20) DEFAULT NULL,
  `article_circle` varchar(20) DEFAULT NULL,
  `article_unique_id` varchar(20) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_description`, `article_category`, `article_date`, `article_unique`, `article_approval`, `article_identify`, `article_writer`, `article_publicity`, `article_circle`, `article_unique_id`) VALUES
(185, 'Demo Post 1', '&lt;p&gt;Demo Post 1Demo Post 1Demo Post 1Demo Post 1Demo Post 1Demo Post 1Demo Post 1Demo Post 1&lt;/p&gt;', 'Technology', '2019-12-13 10:23:44', NULL, '1', 'demo-post-1', '__dBwPhqrpjbfWnBE', 'Yes', 'All', '1580PL2155'),
(186, 'How to Rank YouTube Videos in Google', '&lt;p class=&quot;ql-align-justify&quot;&gt;Iâ€™m not going to throw a bunch of stats at you about&amp;nbsp;&lt;a href=&quot;http://webris.org/how-to-rank-youtube-videos-in-google/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;how powerful YouTube is&amp;nbsp;&lt;/a&gt;â€” youâ€™re well aware the impact it can have on your business.In fact, Iâ€™d be willing to bet that you have a YouTube account and youâ€™ve probably uploaded a few videos. Iâ€™d also be willing to bet those videos have about 19 views.&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;blockquote class=&quot;ql-align-justify&quot;&gt;&lt;strong&gt;&lt;em&gt;Donâ€™t worry â€” this is pretty standard for YouTube marketing.&lt;/em&gt;&lt;/strong&gt;&lt;/blockquote&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;The key to YouTube marketing is getting your videos to rank in Google searches.&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Once your video is ranked, youâ€™ll receive a steady stream of targeted views from Google.&lt;/p&gt;&lt;p&gt;This is a lot easier said than done â€” ranking anything requires a deep understanding of Googleâ€™s search algorithm.&lt;/p&gt;&lt;p&gt;Unless you have a guide. Thatâ€™s where I come in.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;In this article, youâ€™ll learn:&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;How to create the right content for YouTube&lt;/li&gt;&lt;li&gt;How to technically optimize your video to rank&lt;/li&gt;&lt;li&gt;How to distribute your video to rank&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h1&gt;The Life Cycle of Great YouTube Marketing&lt;/h1&gt;&lt;p&gt;Below is a high level process of a great YouTube marketing campaign:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://miro.medium.com/max/1096/0*AwuZskxmBvpsP21q.png&quot; height=&quot;477&quot; width=&quot;1024&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;Youâ€™re aware of the inputs and outputs needed to succeed:&lt;/p&gt;&lt;blockquote&gt;&lt;em&gt;Create great video content that drives awareness for your brand and traffic to your site.&lt;/em&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;What you might not be aware of is the middle section â€” the ranking factors.&lt;/p&gt;&lt;p&gt;If youâ€™ve got a massive YouTube following all youâ€™ve got to do is publish great content and the rest will take place automatically.&lt;/p&gt;&lt;p&gt;If you donâ€™t?&lt;/p&gt;&lt;p&gt;Youâ€™ve got to jump start the ranking factors by&amp;nbsp;&lt;strong&gt;creating them manually.&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;Iâ€™m not talking about spamming the shit out of your YouTube video. Iâ€™m talking about taking extra time to&amp;nbsp;&lt;strong&gt;create perfect ranking signals for YouTube and Google&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;Picture your YouTube marketing as an old manual transmission car. To get that engine to turn over automatically youâ€™ve got to push it down a hill first.&lt;/p&gt;&lt;p&gt;Here are 9 ranking hacks that will show you exactly how to do that.&lt;/p&gt;&lt;h1&gt;Ranking Hack #1 â€” Video Content&lt;/h1&gt;&lt;p&gt;The first area that people fail is the videos theyâ€™re creating.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;YouTube isnâ€™t a shopping website. You canâ€™t make purchases in the platform. Why would you create sales videos?&lt;/p&gt;&lt;p&gt;Itâ€™s perfectly fine to use YouTube to host your videos, but people donâ€™t give a shit about your new product.&lt;/p&gt;&lt;p&gt;YouTuberâ€™s are seeking content to help them solve problems, learn skills, watch cat videos and waste time.&amp;nbsp;In order to get that automated steam of views, focus your content accordingly.&lt;/p&gt;&lt;p&gt;Here are some perfect examples:&lt;/p&gt;&lt;p&gt;Donâ€™t believe me? Go to Google and search for content related to what I listed above â€” youâ€™ll see YouTube videos show up in the search results. This is validation that Google believes videos are the best way to answer that search query.&lt;/p&gt;&lt;p&gt;I know what youâ€™re thinking: â€œI run a pet shop â€” I canâ€™t create video content like thatâ€.&lt;/p&gt;&lt;p&gt;Youâ€™re&amp;nbsp;&lt;strong&gt;&lt;em&gt;wrong&lt;/em&gt;&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;As a business owner, you have intimate knowledge of your industry. Donâ€™t hold back â€” share!&lt;/p&gt;&lt;h1&gt;Ranking Hack #2 â€” Length of Video&lt;/h1&gt;&lt;p&gt;YouTube is constantly updating their search algorithm to a deliver better user experience.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;When the platform first launched, aggregate video views were heavily incorporated into the ranking decision (i.e. the more views your video got, the&amp;nbsp;&lt;a href=&quot;http://webris.org/results/seo-results/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;higher it would rank&lt;/a&gt;).&lt;/p&gt;&lt;p&gt;This left the door wide open for&amp;nbsp;&lt;a href=&quot;http://webris.org/set-google-analytics-filter-internal-traffic/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;IP blockers&lt;/a&gt;, click farming and a terrible user experience. YouTube quickly got smart and changed their algorithm to take engagement factors into account. While aggregated clicks are still counted, the following metrics also play a heavy role:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Number of comments your video receives.&lt;/li&gt;&lt;li&gt;Total seconds users spend watching your video.&lt;/li&gt;&lt;li&gt;Number of likes your video receives.&lt;/li&gt;&lt;li&gt;Number of times your video is shared on social media.&lt;/li&gt;&lt;li&gt;Number of times your video is &amp;lt;embed&amp;gt; on other websites.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;These added metrics forced YouTubers to create videos with better, more engaging content in order satisfy the algorithm.&lt;/p&gt;&lt;p&gt;Although there is no official guidance on how long you should make your videos but I always suggest making your videos at least two minutes in length.&lt;/p&gt;&lt;p&gt;The rationale is simple: the more seconds you can keep a user on your video, the better your videos will rank. Therefore, having videos with more length will add to the total seconds users spend on your videos.&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Bottom line&lt;/strong&gt;:&lt;/p&gt;&lt;blockquote&gt;&lt;strong&gt;&lt;em&gt;Donâ€™t create shit content. Create videos that people want to watch and share.&lt;/em&gt;&lt;/strong&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h1&gt;Ranking Hack #3: Naming Convention&lt;/h1&gt;&lt;p&gt;Before I get into how to name your video, I need to quickly talk about&amp;nbsp;&lt;a href=&quot;http://webris.org/how-to-select-keywords-for-blogging/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;keyword selection&lt;/a&gt;. Your YouTube marketing plan should target long tail and less competitive keywords.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;This will allow you to&amp;nbsp;&lt;a href=&quot;http://webris.org/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;rank your video&lt;/a&gt;&amp;nbsp;by simple and free hacks. If you insist on ranking for â€œcar insuranceâ€ more power to you â€” however, youâ€™ll need to build a shit load of links to your video.&lt;/p&gt;&lt;p&gt;Now, on to the naming conventionâ€¦&lt;/p&gt;&lt;p&gt;YouTube is pretty damn smart,&lt;em&gt;&amp;nbsp;but they canâ€™t see what your videos are about&lt;/em&gt;. Much like on page&amp;nbsp;&lt;a href=&quot;http://webris.org/services/search-engine-optimization/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;SEO&lt;/a&gt;&amp;nbsp;and image optimization, the search engine looks at the name of your raw video file.&lt;/p&gt;&lt;p&gt;That means&amp;nbsp;&lt;strong&gt;you need to optimize your video file before you upload it&lt;/strong&gt;&amp;nbsp;to YouTube. Here is the step by step process:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Go to your completed video file that is ready for upload.&lt;/li&gt;&lt;li&gt;Right click on the file and select â€œGet Infoâ€.&lt;/li&gt;&lt;li&gt;Add some tags to your video that are related to the content.&lt;/li&gt;&lt;li&gt;Under â€œName &amp;amp; Extensionâ€, name the file after your #1 an #2 keywords. For example:&amp;nbsp;&lt;em&gt;How to Rank YouTube Videos â€” Ranking Videos in Google.&lt;/em&gt;&lt;/li&gt;&lt;li&gt;Throw in a brief description of your video in the comments field.                                          &lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;                                                                                                    &lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;br&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;.&lt;/p&gt;&lt;p&gt;Now youâ€™re ready to upload your file to YouTube.&lt;/p&gt;&lt;p&gt;When you dump the file in the upload section the raw video name will pull through&amp;nbsp;&lt;strong&gt;â€” leave it as is&lt;/strong&gt;. This is the title you want for your video.&lt;/p&gt;&lt;h1&gt;Ranking Hack #4: Description&lt;/h1&gt;&lt;p&gt;Add a link to your website.&amp;nbsp;&lt;strong&gt;Add a link to your website&lt;/strong&gt;.&amp;nbsp;&lt;strong&gt;&lt;em&gt;Add a link to your website.&lt;/em&gt;&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Am I clear?&lt;/p&gt;&lt;p&gt;I canâ€™t tell you how many of my clients craft amazing videos with NO call to action and link to their website. YouTube provides a platform with a built in audience â€” itâ€™s your job to engage that audience and drive them to your website.&lt;/p&gt;&lt;blockquote&gt;&lt;em&gt;Your website is where you finish the marketing process â€” aka grab their information, make a sale, click on an ad, etc.&lt;/em&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;After you add a link you need to optimize the rest of the video description. This is yet another area that YouTube scans for signals on what your video is about. Here are a few tips on optimizing your description:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Try and write at least 200 words of content.&lt;/li&gt;&lt;li&gt;Use synonym and one off keywords. For example, if your main keyword is&amp;nbsp;&lt;em&gt;How to Rank YouTube Videos,&lt;/em&gt;&amp;nbsp;some one off keywords would be&lt;em&gt;&amp;nbsp;How to rank YouTube videos in Google, how to get videos to show up in search engines, YouTube Marketing,&amp;nbsp;&lt;/em&gt;etc&lt;em&gt;.&lt;/em&gt;&lt;/li&gt;&lt;li&gt;DONâ€™T USE DUPLICATE CONTENT. That means for EACH of your videos you need to write a different description.&lt;/li&gt;&lt;li&gt;Donâ€™t overuse keywords â€” you can get slapped for keyword stuffing.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;I like to&amp;nbsp;&lt;a href=&quot;http://webris.org/step-step-guide-get-youtube-video-transcripts/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;write out the video transcript&lt;/a&gt;. This can be a major pain in the ass so I recommend outsourcing it on Fiverr or following my guide on how to get the video transcript from YouTube.&lt;/p&gt;&lt;h1&gt;Ranking Hack #5: Utilize Playlists&lt;/h1&gt;&lt;p&gt;Playlists add an additional layer of signals to your video. For each video I strongly suggest that you create a new playlist using synonym keywords&lt;span style=&quot;background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://miro.medium.com/max/2140/0*OL7nrIRaZwGEMErG.jpg&quot; height=&quot;1119&quot; width=&quot;2000&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;Hereâ€™s an example of how to optimize hacks 1â€“4:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;&lt;strong&gt;Primary Keyword&lt;/strong&gt;:&amp;nbsp;&lt;em&gt;Guide to Ranking YouTube Videos in Google&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Secondary Keyword:&lt;/strong&gt;&amp;nbsp;&lt;em&gt;How to Get More Views on You Tube Videos&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;File Name:&lt;/strong&gt;&amp;nbsp;&lt;em&gt;Guide to Ranking YouTube Videos in Google â€” How to Get More Views on You Tube Videos â€” Webris&lt;/em&gt;&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Description&lt;/strong&gt;: Link to video!!! + [Insert transcript].&lt;/li&gt;&lt;li&gt;&lt;strong&gt;Playlist name&lt;/strong&gt;:&amp;nbsp;&lt;em&gt;YouTube Video Marketing â€” Rank My Videos Higher in Google.&lt;/em&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h1&gt;&lt;br&gt;&lt;/h1&gt;&lt;h1&gt;&lt;br&gt;&lt;/h1&gt;&lt;h1&gt;&lt;br&gt;&lt;/h1&gt;&lt;h1&gt;Ranking Hack #6: Custom Thumbnails&lt;/h1&gt;&lt;p&gt;This doesnâ€™t send signals to YouTube but it does affect engagement. Adding a custom thumbnail to your video can have a drastic&amp;nbsp;&lt;a href=&quot;http://www.socialmediaexaminer.com/youtube-custom-thumbnail/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;impact on your click through rate&lt;/a&gt;&amp;nbsp;(CTR) which will in turn drive up your rankings.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;Hereâ€™s a perfect example. Letâ€™s say you searched for â€œ&lt;a href=&quot;http://webris.org/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;SEO Help&lt;/a&gt;â€ and the two following videos came up. Which are you more likely to click through to?&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://miro.medium.com/max/1462/0*TWgL0a7nJSBeL12z.png&quot; height=&quot;282&quot; width=&quot;1366&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;Option 1.&lt;/p&gt;&lt;p&gt;-&amp;nbsp;&lt;strong&gt;&lt;em&gt;Or&lt;/em&gt;&lt;/strong&gt;&amp;nbsp;-&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://miro.medium.com/max/1800/0*QPcSsYpm7ivEKTS_.png&quot; height=&quot;340&quot; width=&quot;1682&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;Option 2.&lt;/p&gt;&lt;p&gt;It was rhetorical â€” youâ€™d click the second one.&lt;/p&gt;&lt;p&gt;YouTube will auto select random screens from your video and let you choose 1 of 3. These screenshots are often unflattering random captures that can send the wrong signals to users.&lt;/p&gt;&lt;blockquote&gt;&lt;strong&gt;&lt;em&gt;Googleâ€™s&amp;nbsp;&lt;/em&gt;&lt;/strong&gt;&lt;a href=&quot;https://support.google.com/youtube/answer/72431?hl=en&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;&lt;strong&gt;&lt;em&gt;guidance on creating custom thumbnails&lt;/em&gt;&lt;/strong&gt;&lt;/a&gt;&lt;strong&gt;&lt;em&gt;.&lt;/em&gt;&lt;/strong&gt;&lt;/blockquote&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;I strongly suggest creating a custom thumbnail that stands out against the blues and the whites of Google. Bold colors like red, orange and green tend to stand out the most.&lt;/p&gt;&lt;h1&gt;Ranking Hack #7: Leverage Social Media&lt;/h1&gt;&lt;p&gt;According to traditional theory, search engine optimization has two aspects:&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;1.&amp;nbsp;&lt;strong&gt;â€œOn-pageâ€ SEO&lt;/strong&gt;. This refers to how your website is structured, image tags, keyword density, &amp;lt;h1&amp;gt;/&amp;lt;h2&amp;gt;/&amp;lt;h3&amp;gt; tags, etc.&lt;/p&gt;&lt;p&gt;2.&amp;nbsp;&lt;strong&gt;â€œOff-pageâ€&lt;/strong&gt;. This refers to other domains that link back to your website.&lt;/p&gt;&lt;p&gt;This past year weâ€™ve seen a huge shift in traditional SEO. Social networks have changed the way we interact online and search engines are beginning to account for it. There is now a third aspect:&lt;/p&gt;&lt;p&gt;3.&amp;nbsp;&lt;strong&gt;Relevance&lt;/strong&gt;.&lt;/p&gt;&lt;p&gt;Google wants to deliver the best possible results for your query. In order for a website to fit that criteria it&amp;nbsp;&lt;em&gt;needs to be relevant&lt;/em&gt;. The best way to measure relevancy is measuring how many Shares, Likes and Tweets a website gets. .&lt;/p&gt;&lt;p&gt;Therefore, if you want your video to get noticed by Google you need to get your video on social networks. I have a standard process that I follow and I strongly recommend you do the same:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Sync your YouTube account with your social media accounts. Anytime you post a new video it will automatically syndicate across your accounts.&lt;/li&gt;&lt;li&gt;Post your video to relevant groups on social networks. If you arenâ€™t actively engaged in these groups I suggest you find some. Not only are they a great way to get social signals on your content but they are a great way to network and learn more about your craft.&lt;/li&gt;&lt;li&gt;If you need to, you can always buy social signals. There are a number of quality vendors out there â€” if you donâ€™t know where to begin, check Fiverr.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;h1&gt;Ranking Hack #8: Dress Up Your Channel Page&lt;/h1&gt;&lt;p&gt;When I see a YouTube channel without a profile picture, header, description and links it looks like spam â€” YouTube sees it the same way. Filling out your YouTube channel page has a trickle down effect to your content. It adds another layer of signals as to what your videos are about.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;There are 4 parts you need to fill out:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Add links to all of your&amp;nbsp;&lt;a href=&quot;http://webris.org/services/social-media/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;social media&lt;/a&gt;&amp;nbsp;pages and website.&lt;/li&gt;&lt;li&gt;Add channel images. Not only does it help users identify with your content, but YouTube as well. If you upload your image in accordance with&amp;nbsp;&lt;a href=&quot;http://webris.org/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;search engine optimization best practices&amp;nbsp;&lt;/a&gt;it will send a signal to search spiders. For example, YouTube-&lt;em&gt;channel-name-channel-keywords.jpg&lt;/em&gt;&amp;nbsp;will help add context to your page.&lt;/li&gt;&lt;li&gt;Subscribe to similar channels. Remember when you were a kid and your friend got in caught stealing something but you got punished too (guilt by association); YouTube looks at what youâ€™re looking at and associates your account with that content.&lt;/li&gt;&lt;li&gt;Add a long description; make sure to add a ton of&amp;nbsp;&lt;a href=&quot;http://webris.org/how-to-select-keywords-for-blogging/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;synonym keywords&lt;/a&gt;.&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;background-color: rgb(255, 255, 255);&quot;&gt;&lt;img src=&quot;https://miro.medium.com/max/1418/0*BsEEEmnyrqp_givA.jpg&quot; height=&quot;696&quot; width=&quot;1325&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;How to optimize your YouTube Channelâ€™s page.&lt;/p&gt;&lt;h1&gt;Ranking Hack #9: Build Links&lt;/h1&gt;&lt;p&gt;The hacks laid out above&amp;nbsp;&lt;em&gt;will rank any low competitive or long tail keyword&lt;/em&gt;. If you want to rank videos for more competitive terms like â€œpayday loansâ€, youâ€™re going to have to build links to your video and embed the HTML on other sites.&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;If youâ€™re new to SEO, I suggest sticking with low competition keywords. Thereâ€™s nothing wrong with ranking videos for low competition keywords and is actually the route that I suggest you take.&lt;/p&gt;&lt;p&gt;When building links at YouTube videos you need to be careful. YouTube is pretty damn good at picking up spam and its pretty easy to get videos banned.&lt;/p&gt;&lt;p&gt;I recommend building a small amount of&amp;nbsp;&lt;a href=&quot;http://webris.org/ultimate-list-of-authority-domains-accepting-backlinks/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;high quality links&lt;/a&gt;&amp;nbsp;over a long period of time. Some link sources I use are:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Private blog networks (PBN)&lt;/li&gt;&lt;li&gt;Social bookmarks&lt;/li&gt;&lt;li&gt;Web 2.0s (.Wordpress, .Weebly, etc.&lt;/li&gt;&lt;li&gt;Partner sites&lt;/li&gt;&lt;li&gt;My own sites (&amp;lt;EMBED&amp;gt;)&lt;/li&gt;&lt;li&gt;Tumblr posts&lt;/li&gt;&lt;li&gt;Pinterest pins&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;If youâ€™re an experienced &lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;SEO and know how to build gray hat links, here is&amp;nbsp;&lt;strong&gt;the exact linking template&lt;/strong&gt;&amp;nbsp;I use to rank my videos:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Low competition (&amp;lt;400 monthly searches)&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;I recommend building a small amount of&amp;nbsp;&lt;a href=&quot;http://webris.org/ultimate-list-of-authority-domains-accepting-backlinks/&quot; target=&quot;_blank&quot; style=&quot;color: inherit;&quot;&gt;high quality links&lt;/a&gt;&amp;nbsp;over a long period of time. Some link sources I use are:&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Private blog networks (PBN)                                                                               &lt;/li&gt;&lt;li&gt; Social bookmarks                                                                                              &lt;/li&gt;&lt;li&gt;Web 2.0s (.Wordpress, .Weebly, etc.                                                                         &lt;/li&gt;&lt;li&gt;Partner sites                                                                                                     &lt;/li&gt;&lt;li&gt; My own sites (&amp;lt;EMBED&amp;gt;)                                                                                     &lt;/li&gt;&lt;li&gt;Tumblr posts                                                                                                          &lt;/li&gt;&lt;li&gt;Pinterest pins                                                                                                     &lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;If youâ€™re an experienced SEO and know how to build gray hat links, here is&amp;nbsp;&lt;strong&gt;the exact linking template&lt;/strong&gt;&amp;nbsp;I use to rank my videos:&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Low competition (&amp;lt;400 monthly searches)&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Drip fed or manually placed over a 30 day period&lt;/li&gt;&lt;li&gt;30 social bookmarks (drip fed)&lt;/li&gt;&lt;li&gt;6 Web 2.0s links (15 tier 2 social bookmarks on each link)&lt;/li&gt;&lt;li&gt;1 PBN link&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;                                                           &lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;Medium competition (400â€“1,000 monthly searches)&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Drip fed or manually placed over a 60 day period&lt;/li&gt;&lt;li&gt;60 social bookmarks (drip fed)&lt;/li&gt;&lt;li&gt;15 Web 2.0s links (20 tier 2 social bookmarks on each link)&lt;/li&gt;&lt;li&gt;4 PBN links                                                      &lt;/li&gt;&lt;li&gt;2 video embeds on PBNs&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;                         &lt;/strong&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;strong&gt;&lt;span class=&quot;ql-cursor&quot;&gt;ï»¿&lt;/span&gt;High competition (&amp;gt;1,000 monthly searches)&lt;/strong&gt;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Drip fed or manually placed over a 60 day period&lt;/li&gt;&lt;li&gt;100 social bookmarks (drip fed)&lt;/li&gt;&lt;li&gt;30 Web 2.0s links (25 tier 2 social bookmarks on each link)&lt;/li&gt;&lt;li&gt;8 PBN links                                                        &lt;/li&gt;&lt;li&gt;  4 video embeds on PBNs&lt;/li&gt;&lt;li&gt;10 relevant niche blog comments a week                   &lt;/li&gt;&lt;li&gt;1 guest blog&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Technology', '2019-12-21 12:08:14', NULL, '1', 'how-to-rank-youtube-videos-in-google', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '4159y86k22'),
(187, '7 Ways To Earn Money While Building Your Web Development Portfolio', '&lt;p class=&quot;ql-align-justify&quot;&gt;Even if you plan to eventually move on to a full-time salaried job, beginning your career as a freelance web developer can be an excellent way to build your portfolio and make industry contacts. Unfortunately, new web developers often make the mistake of working for free, especially if theyâ€™re still working on building up their portfolio.&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;My advice:&amp;nbsp;NEVER work for free. Seriously.&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;For one, your time and skills are incredibly valuable. Second, it can be a recipe for disaster. Even if youâ€™re doing work for a friend, if they arenâ€™t obligated to pay you for your work, they may not feel comfortable being honest with you about whether theyâ€™re satisfied with it or not. Itâ€™s also hard to have that determination to â€œget the job doneâ€ if you arenâ€™t getting paid. You donâ€™t need to ask for much, but charge something.&lt;/p&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;h4 class=&quot;ql-align-justify&quot;&gt;Now, with that behind us, here are 7 tips on how you can find paying work that will also add to your web development portfolio.&lt;/h4&gt;&lt;ol&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Make Your Own Website A Showpiece: Your first chance to show off your web development skills might be building your own freelance business website. As you take on new projects, you can use this website as a great place to show off your portfolio and client testimonials that exemplify your expertise. Make sure its&amp;nbsp;&lt;a href=&quot;https://www.creativebloq.com/web-design/heres-what-portfolio-website-should-look-51514867&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;relevant, modern and in pace with current design trends&lt;/a&gt;. Also, be sure to link your website with your social networking accounts.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Reach Out to Friends and Family: Even if you donâ€™t have a robust portfolio, people tend to do business with people they know, like and trust. If you have several hundreds of friends on Facebook, itâ€™s like one of them (or someone they know) will be interested in having you build a website. If youâ€™re out and about, start talking about what kind of work you do â€“ essentially having soft sales conversations, which could potentially attract leads.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Leverage LinkedIn: After you reach out to your friends and family, you should take advantage of LinkedIn since itâ€™s a powerful tool for connecting with peers and potential clients. Make sure your profile is up-to-date with the skills you bring to the table, and also link to any previous examples of projects youâ€™ve completed. LinkedIn also has a job board with many freelancing opportunities. You can gain more visibility by&amp;nbsp;&lt;a href=&quot;https://www.hongkiat.com/blog/linkedin-groups-for-designers/&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;joining and participating in relevant groups&lt;/a&gt;.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Avoid Freelancing Websites (for now): Freelance sites like Upwork, Elance and&amp;nbsp;&lt;a href=&quot;https://www.guru.com/&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;Guru&lt;/a&gt;&amp;nbsp;help connect freelancers with small design/development projects. While some developers swear by it, it can be extremely difficult to get work just starting out, with the majority of time dedicated to securing billable work. This is definitely an option, but the best option is always through word of mouth and personal networks.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Reach Out to Local Small Businesses: Most small mom and pop shops donâ€™t have a web developer on staff, but would be willing to pay a reasonable amount for some web development/design help. Send an email out to the owner letting them know youâ€™re a local web developer, a fan of their business, and want to help out by extending your services at a discounted rate.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Partner with Peers: Many web developers have said they found the most freelance work by networking with other freelancers. Some freelancers have more work than they can take on, or projects that extend beyond their capabilities. The good news, is they are often willing to provide referrals to other freelancers they trust and respect. You can network with other freelancers through groups on LinkedIn, Google+, meet-ups and sites like&lt;a href=&quot;http://www.webdesignforums.net/forum/forum.php&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;Web Design Forum&lt;/a&gt;,&amp;nbsp;Freelance Gossip, and&amp;nbsp;&lt;a href=&quot;https://forums.digitalpoint.com/&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;Digital Point&lt;/a&gt;.&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Establish a Digital Presence:&amp;nbsp;If you want someone to hire you as a freelancer, set yourself apart. First,&amp;nbsp;&lt;a href=&quot;https://readwrite.com/2013/09/30/understanding-github-a-journey-for-beginners-part-1/&quot; target=&quot;_blank&quot; style=&quot;color: rgb(27, 136, 221);&quot;&gt;get started on GitHub&lt;/a&gt;&amp;nbsp;and start blogging (either on your own blog, our as a guest blogger). If you learn something new, work on a project, write a clever bit of code, make sure to share it! Establishing your digital presence is a great way to establish credibility, even if youâ€™re new to the industry.&lt;/li&gt;&lt;/ol&gt;&lt;p class=&quot;ql-align-justify&quot;&gt;&lt;br&gt;&lt;/p&gt;&lt;h4 class=&quot;ql-align-justify&quot;&gt;Iâ€™ll leave you with a few other pieces of advice:&lt;/h4&gt;&lt;ul&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Find and develop your niche&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Keeping pushing yourself to expand your technical chops&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;Find new ways to build your personal brand&lt;/li&gt;&lt;li class=&quot;ql-align-justify&quot;&gt;And, last but not least, hang in there and be persistent!&lt;/li&gt;&lt;/ul&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Technology', '2019-12-29 08:39:49', NULL, '1', '7ways-to-earn-money', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '3300243u13');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE IF NOT EXISTS `careers` (
`career_id` int(100) NOT NULL,
  `career_name` varchar(200) DEFAULT NULL,
  `career_type` varchar(100) DEFAULT NULL,
  `career_fullname` varchar(100) DEFAULT NULL,
  `career_email` varchar(100) DEFAULT NULL,
  `career_phone` varchar(100) DEFAULT NULL,
  `career_portfolio` varchar(100) DEFAULT NULL,
  `career_cover` varchar(5000) DEFAULT NULL,
  `career_string` varchar(200) DEFAULT NULL,
  `career_unique` varchar(100) DEFAULT NULL,
  `career_approval` varchar(100) DEFAULT NULL,
  `career_date` varchar(100) DEFAULT NULL,
  `career_uniqueid` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`career_id`, `career_name`, `career_type`, `career_fullname`, `career_email`, `career_phone`, `career_portfolio`, `career_cover`, `career_string`, `career_unique`, `career_approval`, `career_date`, `career_uniqueid`) VALUES
(7, 'PHP-WEB-DEVELOPER', 'fulltime', 'Md Ahad Aminul ', 'mdahadaminul@gmail.com', '01521257123', 'https://www.themornstar.com', 'Here are some writing for demo post .okay.', 'ahHMqT', 'Dhaka,Bangladesh', 'Yes', '2019-12-13 10:19:21', 'mMXbcKZkeO-XqxykN'),
(8, 'PHP-WEB-DEVELOPER', 'fulltime', 'Md Ahad Aminul Islam', 'mdahadaminul@gmail.com', '01521257123', 'https://www.themonrstar.com', 'abc', 'ahHMqT', 'Dhaka,Bangladesh', 'Yes', '2019-12-13 10:21:47', 'cQsAswERb-LPpOhLb');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`cid` int(10) NOT NULL,
  `categoriesname` varchar(500) DEFAULT NULL,
  `sub-directory-id` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cid`, `categoriesname`, `sub-directory-id`, `unique-id`) VALUES
(1, 'Shirts', '1', '1'),
(2, 'Fashion Hoodies & Sweatshirts', '1', '1'),
(3, 'Sweaters', NULL, NULL),
(4, 'Jackets & Coats', NULL, NULL),
(5, 'Jeans', NULL, NULL),
(6, 'Pants', NULL, NULL),
(7, 'T-Shirts & Tanks', NULL, NULL),
(8, 'Sleep & Lounge', NULL, NULL),
(9, 'Suits & Coats', NULL, NULL),
(10, 'Panjabi & Fatua', NULL, NULL),
(11, 'Polo Shirts', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dropzone`
--

CREATE TABLE IF NOT EXISTS `dropzone` (
`id` int(10) NOT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `fileunique` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=129 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropzone`
--

INSERT INTO `dropzone` (`id`, `filename`, `file`, `thumbnail`, `fileunique`) VALUES
(126, '2e7be4bd-0736-43e4-9197-e3cfa22a06c21573894420148-HRX-by-Hrithik-Roshan-Men-Track-Pants-5311573894417652-1.jpg', '6235R3cmP4.jpg', 'thumbnail_6235R3cmP4.jpg', '1580PL2155'),
(127, '0_x1DPANdk_1xoZ8kN.png', '12316x9Ix2s.png', 'thumbnail_12316x9Ix2s.png', '4159y86k22'),
(128, 'unnamed-2.jpg', '1065B121V7.jpg', 'thumbnail_1065B121V7.jpg', '3300243u13');

-- --------------------------------------------------------

--
-- Table structure for table `event_file`
--

CREATE TABLE IF NOT EXISTS `event_file` (
`event_fileid` int(20) NOT NULL,
  `event_filename` varchar(500) DEFAULT NULL,
  `event_fileurl` varchar(50) DEFAULT NULL,
  `event_file_unique` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_file`
--

INSERT INTO `event_file` (`event_fileid`, `event_filename`, `event_fileurl`, `event_file_unique`) VALUES
(1, '2e7be4bd-0736-43e4-9197-e3cfa22a06c21573894420148-HRX-by-Hrithik-Roshan-Men-Track-Pants-5311573894417652-1.jpg', '1576228489.jpg', 'KxRkKNPfyYNaFAnjb'),
(4, '1_viR6TsTu96IsGlRnwpI94g.jpeg', '1576228906.jpeg', 'cQsAswERb-LPpOhLb'),
(5, 'JASPER PRINT 7 25,2 x 30,9 cm.pdf', '1576408861.pdf', 'tzkOgjLgKFXHeCPWP'),
(6, 'JASPER PRINT 7 PLACEMENT.pdf', '1576408870.pdf', 'tzkOgjLgKFXHeCPWP');

-- --------------------------------------------------------

--
-- Table structure for table `ipaddress`
--

CREATE TABLE IF NOT EXISTS `ipaddress` (
`ip_id` int(10) NOT NULL,
  `ip_number` varchar(20) DEFAULT NULL,
  `ip_activation` varchar(10) DEFAULT NULL,
  `join_date` varchar(30) DEFAULT NULL,
  `ip_altusername` varchar(20) DEFAULT NULL,
  `ip_country` varchar(100) NOT NULL,
  `ip_city` varchar(20) DEFAULT NULL,
  `ip_region` varchar(20) DEFAULT NULL,
  `ip_postal` varchar(20) DEFAULT NULL,
  `ip_loc` varchar(100) DEFAULT NULL,
  `ip_recentdate` varchar(30) DEFAULT NULL,
  `ip_count` varchar(30) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ipaddress`
--

INSERT INTO `ipaddress` (`ip_id`, `ip_number`, `ip_activation`, `join_date`, `ip_altusername`, `ip_country`, `ip_city`, `ip_region`, `ip_postal`, `ip_loc`, `ip_recentdate`, `ip_count`) VALUES
(3, '103.87.214.161', NULL, '13-12-2019', '__dBwPhqrpjbfWnBE', 'BD', 'Dhaka', 'Dhaka', '1000', '23.7104,90.4074', NULL, NULL),
(4, '::1', NULL, '13-12-2019', 'hLneCwefDNyqHSYpB', '', '', '', '', '', NULL, NULL),
(5, '127.0.0.1', NULL, '13-12-2019', 'ngxcYZfmZ_TwWe-XY', '', '', '', '', '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `status` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `transaction_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `email`, `phone`, `amount`, `address`, `status`, `transaction_id`, `currency`) VALUES
(0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', 'Pending', 'TYISHL-SSLCZ_TEST_5dcb1be4e6f23', 'BDT'),
(0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', 'Pending', 'TYISHL-SSLCZ_TEST_5dcb1be5f1305', 'BDT'),
(0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', 'Pending', 'TYISHL-SSLCZ_TEST_5dcb1bf366ef3', 'BDT'),
(0, 'John Doe', 'john.doe@email.com', '01711111111', 0, 'Dhaka', 'Pending', 'TYISHL-SSLCZ_TEST_5dcb1bf7e1cf5', 'BDT'),
(0, 'John Doe', 'mdahadaminul@gmail.com', '01947670546', 1200, 'Dhaka', 'Pending', 'TYISHL-SSLCZ_TEST_5dcb1c301a4ea', 'BDT'),
(0, 'John Doe', 'mdahadaminul@gmail.com', '01947670546', 1200, 'Dhaka', 'Success', 'TYISHL-SSLCZ_TEST_5dcb1d3d93d41', 'BDT'),
(0, 'John Doe', 'mdahadaminul@gmail.com', '01947670546', 1200, 'Dhaka', 'Success', 'TYISHL-SSLCZ_TEST_5dcb1db48b7c1', 'BDT');

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE IF NOT EXISTS `portfolios` (
`portfolio_id` int(100) NOT NULL,
  `portfolio_type` varchar(100) DEFAULT NULL,
  `portfolio_company_name` varchar(100) DEFAULT NULL,
  `portfolio_company_logo` varchar(100) DEFAULT NULL,
  `portfolio_company_slogan` varchar(100) DEFAULT NULL,
  `portfolio_technologies` varchar(100) DEFAULT NULL,
  `portfolio_link` varchar(100) DEFAULT NULL,
  `portfolio_review` varchar(500) DEFAULT NULL,
  `portfolio_ratings` varchar(100) DEFAULT NULL,
  `portfolio_complete_date` varchar(100) DEFAULT NULL,
  `portfolio_leader` varchar(100) DEFAULT NULL,
  `portfolio_unique` varchar(100) DEFAULT NULL,
  `portfolio_approval` varchar(100) DEFAULT NULL,
  `portfolio_country` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`portfolio_id`, `portfolio_type`, `portfolio_company_name`, `portfolio_company_logo`, `portfolio_company_slogan`, `portfolio_technologies`, `portfolio_link`, `portfolio_review`, `portfolio_ratings`, `portfolio_complete_date`, `portfolio_leader`, `portfolio_unique`, `portfolio_approval`, `portfolio_country`) VALUES
(2, 'Bugs Fixing , Design , Development', 'Trineugen', 'trineugen.png\r\n', 'Expand your options for International shipping with Global eParcel Solutions.', 'HTML,CSS,BOOSTRAP,PHOTOSHOP', 'https://trineugen.com', 'Nice Development ', '5', 'July,2017', 'Md Aminul Islam', 'trineugen', '1', 'United Kingdom'),
(3, 'Web Design', 'Sebeum', 'sebeum.png', 'Make your Cripto Currency Account safe.', 'HTML,CSS,BOOSTRAP,PHOTOSHOP', 'https://sebeum.com/', 'Amazing design ', '5', 'November,2017', 'Md Aminul Islam', 'Sebeum', '1', 'Argentina'),
(4, 'Social Integration', 'CMAFAS', 'CMAFAS.png', 'MARKET LEADER IN FINANCIAL EXAM PREP', 'PHP SOCIAL INTEGRATION ', 'https://www.cmfas.com.sg/', 'GREAT WORK', '5', 'November,2017', 'Md Aminul Islam', 'cmfas', '1', 'Singapore'),
(5, 'APACHE REWRITE RULES', 'Htgagnant', 'Htgagnant.png', 'MARKET LEADER IN FINANCIAL EXAM PREP', 'PHP SOCIAL INTEGRATION ', 'https://www.Htgagnant.com', 'GREAT WORK', '5', 'January,2018', 'Md Aminul Islam', 'htgagnant', '1', 'France'),
(6, 'BACKEND DEVELOPMENT', 'Oceanx', 'Htgagnant.png', 'Ocean Experiences ', 'BACKEND DEVELOPMENT', 'https://oceanexperiences.co.za/', 'GREAT WORK', '5', 'june,2018', 'Md Aminul Islam', 'oceanexperiences', '1', 'South Africa'),
(7, 'BACKEND DEVELOPMENT', 'MediaUnited', 'MediaUnited.png', 'Ads Campaign for black ', 'PHP , AJAX ,WEB DESIGN ', 'https://mediaunited.co.uk/', 'Amazing Work done.', '5', 'April,2019', 'Md Aminul Islam', 'mediaunited', '1', 'United Kingdom'),
(8, 'FRONT END DEVELOPMENT', 'ThePPPTrust', 'ThePPPTrust.png', 'The PPI Deadline Clock is Ticking...', 'PHP , AJAX ,WEB DESIGN ', 'https://ThePPPTrust.org/', 'Amazing Work done.', '5', 'May,2019', 'Md Aminul Islam', 'ThePPPTrust', '1', 'United Kingdom'),
(9, 'BACKEND DEVELOPMENT', 'UEarnUnited', 'UEarnUnited.png', 'Ads Campaign for black ', 'PHP , AJAX ,WEB DESIGN ', 'https://UEarnUnited.com/', 'Amazing Work done.', '5', 'AUGUST,2019', 'Md Aminul Islam', 'uearnunited', '1', 'United Kingdom'),
(10, 'WEB PERFORMANCE ', 'Global_link ', 'globalink.png', 'backlink company in usa', 'PHP , AJAX ,WEB DESIGN ', 'http://globall.ink/', 'Amazing Work done.', '5', 'AUGUST,2019', 'Md Aminul Islam', 'globallink', '1', 'United States'),
(11, 'WEB PERFORMANCE ', ' Disrupting Diversity ', 'disruptingdiversity.png', 'Disrupting Diversity', 'PHP , AJAX ,WEB DESIGN ', 'http://disruptingdiversity.org/', 'Work done successfully.', '5', 'september,2019', 'Md Aminul Islam', 'disruptingdiversity', '1', 'United Kingdom'),
(12, 'Social Integration', 'Global eParcel  ', 'globaleparcel.png\r\n', 'MARKET LEADER IN FINANCIAL EXAM PREP', 'PHP SOCIAL INTEGRATION ', 'https://home.globaleparcel.com/', 'GREAT WORK', '5', 'November,2017', 'Md Aminul Islam', 'globaleparcel', '1', 'United Kingdom');

-- --------------------------------------------------------

--
-- Table structure for table `product-directory`
--

CREATE TABLE IF NOT EXISTS `product-directory` (
`id` int(10) NOT NULL,
  `directory_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product-directory`
--

INSERT INTO `product-directory` (`id`, `directory_name`) VALUES
(1, 'Men''s Fashion'),
(2, 'Women''s Fashion'),
(3, 'Baby'),
(4, 'Girls'' Fashion'),
(5, 'Boys'' Fashion'),
(6, 'Electronics'),
(7, 'Luggage'),
(8, 'Movies & Television'),
(9, 'Software'),
(10, 'Health and Household'),
(11, 'Home and Kitchen'),
(12, 'Beauty and personal care'),
(13, 'Computers'),
(14, 'Books & Audible'),
(15, 'Automotive'),
(16, 'Software'),
(17, 'Toys and Games'),
(18, 'Video Games'),
(19, 'Arts & Crafts'),
(20, 'Pet supplies'),
(21, 'Sports and Outdoors'),
(22, 'Automotive'),
(23, 'Industrial and Scientific'),
(24, 'Tools & Home Improvement'),
(25, 'Smart Home'),
(26, 'Appstore for Android'),
(27, 'E-readers & Books');

-- --------------------------------------------------------

--
-- Table structure for table `product-subdirectory`
--

CREATE TABLE IF NOT EXISTS `product-subdirectory` (
`id` int(10) NOT NULL,
  `subdirectoryname` varchar(500) DEFAULT NULL,
  `directory-id` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product-subdirectory`
--

INSERT INTO `product-subdirectory` (`id`, `subdirectoryname`, `directory-id`, `unique-id`) VALUES
(1, 'Clothing', '1', NULL),
(2, 'Shoes', '1', NULL),
(3, 'Watches', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `quotes`
--

CREATE TABLE IF NOT EXISTS `quotes` (
`quote_id` int(20) NOT NULL,
  `quote_fullname` varchar(100) DEFAULT NULL,
  `quote_email` varchar(100) DEFAULT NULL,
  `quote_company` varchar(100) DEFAULT NULL,
  `quote_skype` varchar(100) DEFAULT NULL,
  `quote_type` varchar(200) DEFAULT NULL,
  `quote_source` varchar(100) DEFAULT NULL,
  `quote_budget` varchar(100) DEFAULT NULL,
  `quote_timeline` varchar(100) DEFAULT NULL,
  `quote_description` varchar(5000) DEFAULT NULL,
  `quote_unique` varchar(100) DEFAULT NULL,
  `quote_approval` varchar(100) DEFAULT NULL,
  `quote_date` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotes`
--

INSERT INTO `quotes` (`quote_id`, `quote_fullname`, `quote_email`, `quote_company`, `quote_skype`, `quote_type`, `quote_source`, `quote_budget`, `quote_timeline`, `quote_description`, `quote_unique`, `quote_approval`, `quote_date`) VALUES
(3, 'Md Ahad Aminul', 'mdahadaminul@gmail.com', 'abc', 'abc', 'bugs-fixing-of-website', 'Facebook', '1000', '90', 'abc', '1', '1', '2019-12-13 10:11:09'),
(4, 'Jhone Doe', 'mdahadaminul@gmail.com', 'abc', 'abc', 'ranking-local-business-promotional-video', 'Facebook', '1000', '90', 'abc', '1', '1', '2019-12-13 10:12:15');

-- --------------------------------------------------------

--
-- Table structure for table `subcategories`
--

CREATE TABLE IF NOT EXISTS `subcategories` (
`subcategories` int(10) NOT NULL,
  `subcategoriesname` varchar(500) DEFAULT NULL,
  `categoriesid` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcategories`, `subcategoriesname`, `categoriesid`, `unique-id`) VALUES
(1, 'Polo-Shirt', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE IF NOT EXISTS `tags` (
`id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `updated_at`, `created_at`) VALUES
(7, 'Laravel', NULL, NULL),
(8, 'Laravel 5', NULL, NULL),
(9, 'Laravel 4', NULL, NULL),
(10, 'Laravel 22', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`user_id` int(20) NOT NULL,
  `username` varchar(55) DEFAULT NULL,
  `user_email` varchar(55) DEFAULT NULL,
  `oauth_id` varchar(55) DEFAULT NULL,
  `user_fullname` varchar(55) DEFAULT NULL,
  `user_altname` varchar(55) DEFAULT NULL,
  `user_photo` varchar(200) DEFAULT NULL,
  `join_date` varchar(55) DEFAULT NULL,
  `last_login` varchar(55) DEFAULT NULL,
  `user_type` varchar(55) DEFAULT NULL,
  `user_publicity` varchar(55) DEFAULT NULL,
  `user_activation` varchar(55) DEFAULT NULL,
  `user_status` varchar(55) DEFAULT NULL,
  `user_password` varchar(55) DEFAULT NULL,
  `user_country` varchar(55) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_email`, `oauth_id`, `user_fullname`, `user_altname`, `user_photo`, `join_date`, `last_login`, `user_type`, `user_publicity`, `user_activation`, `user_status`, `user_password`, `user_country`) VALUES
(39, 'mdahadaminul', 'mdahadaminul@gmail.com', NULL, 'Md Aminul Islam', '-ahHMqTqQd-yhgPmk', NULL, '25-09-2019', NULL, 'Normal', 'Public', '1', NULL, '5ea83a49ad4f2706d8242be994a5b5cb', NULL),
(40, 'Aminul', 'themornstars@gmail.com', NULL, 'Md Aminul Islam', 'eFatYywyTWNHNrePG', NULL, '30-09-2019', NULL, 'Normal', 'Public', '0', NULL, '9f7df2a1d3039207c4fcad24548a359b', NULL),
(41, NULL, 'kaysanabid@gmail.com', '109511340245065', 'Kaysan Abid', 'fPbMkgf_EwwNyfmHA', 'https://platform-lookaside.fbsbx.com/platform/profilepic/?asid=109511340245065&height=200&width=200&ext=1573501006&hash=AeT1qSDX1WMJMgXF', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
 ADD PRIMARY KEY (`career_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `dropzone`
--
ALTER TABLE `dropzone`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_file`
--
ALTER TABLE `event_file`
 ADD PRIMARY KEY (`event_fileid`);

--
-- Indexes for table `ipaddress`
--
ALTER TABLE `ipaddress`
 ADD PRIMARY KEY (`ip_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
 ADD PRIMARY KEY (`portfolio_id`);

--
-- Indexes for table `product-directory`
--
ALTER TABLE `product-directory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product-subdirectory`
--
ALTER TABLE `product-subdirectory`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quotes`
--
ALTER TABLE `quotes`
 ADD PRIMARY KEY (`quote_id`);

--
-- Indexes for table `subcategories`
--
ALTER TABLE `subcategories`
 ADD PRIMARY KEY (`subcategories`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
MODIFY `article_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=188;
--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
MODIFY `career_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `dropzone`
--
ALTER TABLE `dropzone`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=129;
--
-- AUTO_INCREMENT for table `event_file`
--
ALTER TABLE `event_file`
MODIFY `event_fileid` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `ipaddress`
--
ALTER TABLE `ipaddress`
MODIFY `ip_id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
MODIFY `portfolio_id` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `product-directory`
--
ALTER TABLE `product-directory`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `product-subdirectory`
--
ALTER TABLE `product-subdirectory`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
MODIFY `quote_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
MODIFY `subcategories` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=42;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
