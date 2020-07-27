-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 07:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webagency`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `article_id` int(20) NOT NULL,
  `article_title` varchar(1000) CHARACTER SET utf8mb4 DEFAULT NULL,
  `article_description` longtext CHARACTER SET utf8 DEFAULT NULL,
  `article_category` varchar(20) DEFAULT NULL,
  `article_date` varchar(20) DEFAULT NULL,
  `article_unique` varchar(200) DEFAULT NULL,
  `article_approval` varchar(20) DEFAULT NULL,
  `article_identify` varchar(1000) CHARACTER SET utf8 DEFAULT NULL,
  `article_writer` varchar(50) DEFAULT NULL,
  `article_publicity` varchar(20) DEFAULT NULL,
  `article_circle` varchar(20) DEFAULT NULL,
  `article_unique_id` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`article_id`, `article_title`, `article_description`, `article_category`, `article_date`, `article_unique`, `article_approval`, `article_identify`, `article_writer`, `article_publicity`, `article_circle`, `article_unique_id`) VALUES
(211, 'SEO-ফ্রেন্ডলি-আর্টিকেল-কিভাবে-লিখবেন?-এই-১১টি-টিপস-জেনে-নিন', '&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;আপনি কি এসইও  ফ্রেন্ডলি কনটেন্ট লিখতে আগ্রহী? বেশ, এটা একটা কৌশল&lt;/p&gt;&lt;p&gt;&amp;nbsp;যেটা আপনার ব্লগ অথবা আপনার লিখার ক্যারিয়ারকে নেক্সট লেভেলে নিয়ে যেতে&amp;nbsp;&lt;/p&gt;&lt;p&gt;পারে। যেকেউ আর্টিকেল লিখতে পারে কিন্তু এসইও অপ্টিমাইজড আর্টিকেল লেখার&amp;nbsp;&lt;/p&gt;&lt;p&gt;জন্য বিশেষ অনুশীলন বা চর্চা করা প্রয়োজন। এখানে আমরা আজকে এসইও ফ্রেন্ডলি&amp;nbsp;&lt;/p&gt;&lt;p&gt;আর্টিকেল লেখার কিছু কৌশল নিয়ে আলোচনা করবো। আর্টিকেল লিখার বেসিক নিয়ম জানত এই পোস্ট পড়ুন।&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;&lt;p&gt;&lt;br&gt;&lt;/p&gt;', 'Technology', '2020-07-26 11:36:15', NULL, '1', 'SEO-ফ্রেন্ডলি-আর্টিকেল-কিভাবে-লিখবেন?-এই-১১টি-টিপস-জেনে-নিন', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '653358L2ou9'),
(212, 'গুগল এলএলসি বা গুগল লিমিটেড লায়াবেলিটি কোম্পানি', '&lt;p&gt;&lt;span style=\"color: rgb(77, 81, 86);\"&gt;ইন্টারনেটভিত্তিক সেবা ও পণ্যে বিশেষায়িত একটি আমেরিকান বহুজাতিক প্রযুক্তি কোম্পানি। স্ট্যানফোর্ড বিশ্ববিদ্যালয়ে পিএইচডি ছাত্র থাকাকালীন ল্যারি পেজ ও সের্গেই ব্রিন ১৯৯৮ সালে গুগল নির্মান করেন।&lt;/span&gt;&lt;/p&gt;', 'Technology', '2020-07-26 16:41:38', NULL, '1', 'গুগল-এলএলসি-বা-গুগল-লিমিটেড-লায়াবেলিটি-কোম্পানি', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '61080N62Hqm'),
(213, 'Test articles 01', '&lt;p&gt;abc&lt;/p&gt;', 'Technology', '2020-07-27 18:31:34', NULL, '1', 'Test-articles-01', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '6418411w26B'),
(214, 'Tips for Building Professional Connections While Working Remotely', '&lt;p class=\"ql-align-justify\"&gt;Building in-person professional relationships is more challenging for teams working remotely. For example, there are fewer opportunities for interpersonal connections in the office kitchenette or spurring a spontaneous brainstorm session across desks.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Fostering these connections is necessary for productivity and employee engagement. According to a recent global survey by Asana, a project management platform, nearly twice as many employees felt connected and supported by their manager when using a work management tool.&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;With a little help from technology and a focused, organizational approach, remote professionals can stay connected and engaged with their team from home. Here’s how.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 class=\"ql-align-justify\"&gt;Check in with your team often&lt;/h2&gt;&lt;p class=\"ql-align-justify\"&gt;In addition to workers adjusting their shift’s start and end times, the survey also found that 26% of professionals are having to conduct work around other home demands, like childcare. As workers adjust to a “new normal,” managers can stay connected with their direct reports by establishing recurring video check-ins.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;strong&gt;&amp;gt;&amp;gt;READ MORE:&lt;/strong&gt;&amp;nbsp;&lt;a href=\"https://www.grammarly.com/blog/how-to-show-appreciation-to-your-staff/\" target=\"_blank\" style=\"color: inherit;\"&gt;How To Show Appreciation at Work&lt;/a&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;This gives employees the confidence that their leadership is making space for their questions, ideas, and feedback. For example, managers can leverage video platforms like Zoom to hold 10-minute video calls every Friday. During this time, managers can check on project statuses, employees can share what they need help with, and both can collaborate on a game plan for the upcoming work week.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Keeping an open-door policy is also key to supporting a remote team. The goal is to stay empathetic and available. If needed, managers can also establish boundaries&amp;nbsp;to protect their time for their own projects—for example, Tuesdays and Wednesdays, from 4 p.m. to 6 p.m. Whichever time is protected, make sure it’s clearly communicated with your team during check-in periods or at broader team meetings.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;strong&gt;&amp;gt;&amp;gt;READ MORE:&lt;/strong&gt;&amp;nbsp;&lt;a href=\"https://www.grammarly.com/blog/improve-communication-skills/\" target=\"_blank\" style=\"color: inherit;\"&gt;How To Improve Your Communication Skills&lt;/a&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 class=\"ql-align-justify\"&gt;Provide channels for remote collaboration&lt;/h2&gt;&lt;p class=\"ql-align-justify\"&gt;As more companies face the challenges of remote work, digital tools help teams stay aligned. Business communication platforms, like Slack, let employees connect through dedicated “channels” that are created for specific goals or purposes.&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Professionals who are working toward the same certification, for example, can create a group channel for discussion, support, and motivation among their peers. Similarly, a dedicated channel can be used as an open forum for suggesting new products or services, and improvements for existing company offerings.&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Allowing teams to connect, relate, and share feedback with one another helps their professional success and engagement with the organization.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;h2 class=\"ql-align-justify\"&gt;Effectively connect through email&lt;/h2&gt;&lt;p class=\"ql-align-justify\"&gt;When face-to-face connection isn’t a realistic option, written communication is a critical alternative. Although chat tools can be effective for informal or timely messages,&amp;nbsp;&lt;a href=\"https://www.grammarly.com/blog/email-writing-tips/\" target=\"_blank\" style=\"color: inherit;\"&gt;email communication&lt;/a&gt;&amp;nbsp;is ideal for sensitive material or messaging that requires more care.&amp;nbsp;&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Using emails for professional relationship-building requires technical accuracy (e.g. grammar, spelling, and punctuation) so the message is clear. However, failing to hit the right tone in written communications can detract from your intended point. A tool like Grammarly offers in-line editing suggestions and a&amp;nbsp;&lt;a href=\"https://www.grammarly.com/blog/tone-detector/\" target=\"_blank\" style=\"color: inherit;\"&gt;tone detector&lt;/a&gt;&amp;nbsp;that helps you craft a message that’s easy to understand and achieves an effective tone.&amp;nbsp;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;strong&gt;&amp;gt;&amp;gt;READ MORE:&lt;/strong&gt;&amp;nbsp;&lt;a href=\"https://www.grammarly.com/blog/how-writing-helps-people-connect/\" target=\"_blank\" style=\"color: inherit;\"&gt;How Writing Helps People Connect&lt;/a&gt;&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;Workplace communication tools can help make internal connections possible for remote professionals. And as more organizations make mindful shifts in their culture and processes, remote teams can begin to feel the professional camaraderie they once enjoyed.&lt;/p&gt;', 'Technology', '2020-07-27 18:39:37', NULL, '1', 'Tips-for-Building-Professional-Connections-While-Working-Remotely', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '48574m6g2xR'),
(215, 'abc', '&lt;p&gt;&lt;span style=\"color: rgb(59, 62, 77); font-family: AkkuratPro; font-size: 18px; white-space: normal;\"&gt;optimism is by asking them how you can offer support. If you’re chatting with someone who seems overwhelmed, asking them how you can help will immediately lighten their load. Sometimes, opening the dialogue will be enough; when people feel comfortable sharing their concerns, you can use optimism to reshape the narrative and help them see the bright side.&lt;/span&gt;&lt;/p&gt;', 'Technology', '2020-07-27 19:27:25', NULL, '1', 'abc', 'hLneCwefDNyqHSYpB', 'Yes', 'All', '94810Zx2s21');
INSERT INTO `article` (`article_id`, `article_title`, `article_description`, `article_category`, `article_date`, `article_unique`, `article_approval`, `article_identify`, `article_writer`, `article_publicity`, `article_circle`, `article_unique_id`) VALUES
(216, 'There’s Good News About Your Immune System and the Coronavirus', '&lt;p id=\"c426\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct lp ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; clear: left; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;More than any other facet of Covid-19, the question of immunity has been a stressful source of good news/bad news whiplash.&lt;/p&gt;&lt;p id=\"472f\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Good news: Scientists discovered early on that most people who have been infected with SARS-CoV-2 (the official name for the novel coronavirus) create virus-specific antibodies — special proteins produced by immune cells that help fight off the coronavirus and provide immunity against future infections. This finding helped guide the dozens of&amp;nbsp;&lt;a class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener\" href=\"https://elemental.medium.com/a-reality-check-on-the-coronavirus-vaccine-a0012b2c6954\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;vaccines&lt;/a&gt;&amp;nbsp;currently under development.&lt;/p&gt;&lt;p id=\"66c3\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;&amp;nbsp;There have been&amp;nbsp;&lt;a href=\"https://www.vox.com/2020/7/12/21321653/getting-covid-19-twice-reinfection-antibody-herd-immunity\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;anecdotal accounts&lt;/a&gt;&amp;nbsp;of a few people potentially contracting the virus a second time, and a new&amp;nbsp;&lt;a href=\"http://medrxiv.org/content/10.1101/2020.07.09.20148429v1.full.pdf\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;preprint paper&lt;/a&gt;&amp;nbsp;— which has not yet been peer reviewed — showed that in some recovered patients, antibody levels declined to undetectable levels after three months. These reports have caused some people&amp;nbsp;&lt;a href=\"https://www.technologyreview.com/2020/07/13/1005103/immunity-to-covid-19-could-disappear-in-months-a-new-study-suggests/\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;to speculate&lt;/a&gt;&amp;nbsp;that a vaccine will be largely ineffective and that we may never develop herd immunity to the virus.&lt;/p&gt;&lt;p id=\"72fd\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Before you start to doom spiral, though, let’s turn back to good news: Antibodies aren’t the only tools the immune system has to fight repeat invaders. Several recent studies have shown that in addition to antibodies, people also develop virus-specific T cells. These immune cells are an important component of long-term immunity, and in some cases they’re detectable in the body many years after antibodies dissipate. But because nothing is simple with SARS-CoV-2, the T cells produced in response to the coronavirus are a little unusual.&lt;/p&gt;&lt;h1 id=\"2161\" class=\"md me bj bi ft mf mg mh mi mj mk ml mm mn mo mp mq mr ms mt mu ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 1.95em; margin-bottom: -0.28em; font-family: medium-content-sans-serif-font, \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Geneva, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 40px; letter-spacing: -0.022em; font-size: 36px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;B cells and T cells work as a team&lt;/h1&gt;&lt;p id=\"9630\" class=\"lb lc bj ld b hx mv lf ia mw lh li mx if lk my ii lm mz il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 0.86em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The immune system has two waves in its defense against an invader: the initial innate response, which looks the same for pretty much any attacker, and the slower adaptive response, which takes about a week to develop but is tailored to the current assailant. The adaptive response also serves as a type of immunological memory, so that if the same virus tries to reinfect a person, their immune system can kick into gear and immediately mount a virus-specific defense. It’s this second phase that scientists are especially interested in right now, because it’s also the one that’s activated by vaccines.&lt;/p&gt;&lt;p id=\"7c98\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are two main cell types involved in adaptive immunity that work as a team, B cells and T cells, both of which are white blood cells — technically called lymphocytes — that primarily live in the lymph nodes. B cells make antibodies, those coveted proteins that latch onto the virus and either disarm it or block it from entering the body’s cells. But in order to learn what the virus looks like and what kinds and shapes of antibodies to make, B cells need T cells.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p id=\"6645\" class=\"lb lc bj ld b hx nj lf ia nk lh li nl if lk nm ii lm nn il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 3.14em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;“To make really good quality B cells and get good antibodies, you need T cell help,” says Richard Locksley, MD, a professor of medicine at the University of California, San Francisco. For example, he says, “When you get a vaccine, like a flu vaccine or a tetanus toxin or whatever, the T cell help is what makes you get the good antibodies by the B cells.”&lt;/p&gt;&lt;p id=\"ad6a\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are several different flavors of T cells that play a role in the immune system, but the two variations that are especially important when it comes to immunity are referred to as memory T cells, because they remember the virus in case it comes back. The first memory T cells, known as “helper” T cells, educate the B cells about what the antibodies should look like to combat the current invader. They also provide the B cells with growth factors and general support to produce as many antibodies as possible.&lt;/p&gt;&lt;p id=\"5587\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The other kind of memory T cells are called “killer” T cells. These T cells also learn what the current viral threat looks like, and they go off to find infected cells and destroy them so the virus can’t spread further inside the body. One expert called them “the special forces” of the immune system.M&lt;/p&gt;&lt;p id=\"c426\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct lp ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; clear: left; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;ore than any other facet of Covid-19, the question of immunity has been a stressful source of good news/bad news whiplash.&lt;/p&gt;&lt;p id=\"472f\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Good news: Scientists discovered early on that most people who have been infected with SARS-CoV-2 (the official name for the novel coronavirus) create virus-specific antibodies — special proteins produced by immune cells that help fight off the coronavirus and provide immunity against future infections. This finding helped guide the dozens of&amp;nbsp;&lt;a class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener\" href=\"https://elemental.medium.com/a-reality-check-on-the-coronavirus-vaccine-a0012b2c6954\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;vaccines&lt;/a&gt;&amp;nbsp;currently under development.&lt;/p&gt;&lt;p id=\"66c3\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;&amp;nbsp;There have been&amp;nbsp;&lt;a href=\"https://www.vox.com/2020/7/12/21321653/getting-covid-19-twice-reinfection-antibody-herd-immunity\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;anecdotal accounts&lt;/a&gt;&amp;nbsp;of a few people potentially contracting the virus a second time, and a new&amp;nbsp;&lt;a href=\"http://medrxiv.org/content/10.1101/2020.07.09.20148429v1.full.pdf\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;preprint paper&lt;/a&gt;&amp;nbsp;— which has not yet been peer reviewed — showed that in some recovered patients, antibody levels declined to undetectable levels after three months. These reports have caused some people&amp;nbsp;&lt;a href=\"https://www.technologyreview.com/2020/07/13/1005103/immunity-to-covid-19-could-disappear-in-months-a-new-study-suggests/\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;to speculate&lt;/a&gt;&amp;nbsp;that a vaccine will be largely ineffective and that we may never develop herd immunity to the virus.&lt;/p&gt;&lt;p id=\"72fd\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Before you start to doom spiral, though, let’s turn back to good news: Antibodies aren’t the only tools the immune system has to fight repeat invaders. Several recent studies have shown that in addition to antibodies, people also develop virus-specific T cells. These immune cells are an important component of long-term immunity, and in some cases they’re detectable in the body many years after antibodies dissipate. But because nothing is simple with SARS-CoV-2, the T cells produced in response to the coronavirus are a little unusual.&lt;/p&gt;&lt;h1 id=\"2161\" class=\"md me bj bi ft mf mg mh mi mj mk ml mm mn mo mp mq mr ms mt mu ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 1.95em; margin-bottom: -0.28em; font-family: medium-content-sans-serif-font, \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Geneva, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 40px; letter-spacing: -0.022em; font-size: 36px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;B cells and T cells work as a team&lt;/h1&gt;&lt;p id=\"9630\" class=\"lb lc bj ld b hx mv lf ia mw lh li mx if lk my ii lm mz il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 0.86em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The immune system has two waves in its defense against an invader: the initial innate response, which looks the same for pretty much any attacker, and the slower adaptive response, which takes about a week to develop but is tailored to the current assailant. The adaptive response also serves as a type of immunological memory, so that if the same virus tries to reinfect a person, their immune system can kick into gear and immediately mount a virus-specific defense. It’s this second phase that scientists are especially interested in right now, because it’s also the one that’s activated by vaccines.&lt;/p&gt;&lt;p id=\"7c98\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are two main cell types involved in adaptive immunity that work as a team, B cells and T cells, both of which are white blood cells — technically called lymphocytes — that primarily live in the lymph nodes. B cells make antibodies, those coveted proteins that latch onto the virus and either disarm it or block it from entering the body’s cells. But in order to learn what the virus looks like and what kinds and shapes of antibodies to make, B cells need T cells.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p id=\"6645\" class=\"lb lc bj ld b hx nj lf ia nk lh li nl if lk nm ii lm nn il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 3.14em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;“To make really good quality B cells and get good antibodies, you need T cell help,” says Richard Locksley, MD, a professor of medicine at the University of California, San Francisco. For example, he says, “When you get a vaccine, like a flu vaccine or a tetanus toxin or whatever, the T cell help is what makes you get the good antibodies by the B cells.”&lt;/p&gt;&lt;p id=\"ad6a\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are several different flavors of T cells that play a role in the immune system, but the two variations that are especially important when it comes to immunity are referred to as memory T cells, because they remember the virus in case it comes back. The first memory T cells, known as “helper” T cells, educate the B cells about what the antibodies should look like to combat the current invader. They also provide the B cells with growth factors and general support to produce as many antibodies as possible.&lt;/p&gt;&lt;p id=\"5587\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The other kind of memory T cells are called “killer” T cells. These T cells also learn what the current viral threat looks like, and they go off to find infected cells and destroy them so the virus can’t spread further inside the body. One expert called them “the special forces” of the immune system.M&lt;/p&gt;&lt;p id=\"c426\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct lp ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; clear: left; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;ore than any other facet of Covid-19, the question of immunity has been a stressful source of good news/bad news whiplash.&lt;/p&gt;&lt;p id=\"472f\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Good news: Scientists discovered early on that most people who have been infected with SARS-CoV-2 (the official name for the novel coronavirus) create virus-specific antibodies — special proteins produced by immune cells that help fight off the coronavirus and provide immunity against future infections. This finding helped guide the dozens of&amp;nbsp;&lt;a class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener\" href=\"https://elemental.medium.com/a-reality-check-on-the-coronavirus-vaccine-a0012b2c6954\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;vaccines&lt;/a&gt;&amp;nbsp;currently under development.&lt;/p&gt;&lt;p id=\"66c3\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;&amp;nbsp;There have been&amp;nbsp;&lt;a href=\"https://www.vox.com/2020/7/12/21321653/getting-covid-19-twice-reinfection-antibody-herd-immunity\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;anecdotal accounts&lt;/a&gt;&amp;nbsp;of a few people potentially contracting the virus a second time, and a new&amp;nbsp;&lt;a href=\"http://medrxiv.org/content/10.1101/2020.07.09.20148429v1.full.pdf\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;preprint paper&lt;/a&gt;&amp;nbsp;— which has not yet been peer reviewed — showed that in some recovered patients, antibody levels declined to undetectable levels after three months. These reports have caused some people&amp;nbsp;&lt;a href=\"https://www.technologyreview.com/2020/07/13/1005103/immunity-to-covid-19-could-disappear-in-months-a-new-study-suggests/\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;to speculate&lt;/a&gt;&amp;nbsp;that a vaccine will be largely ineffective and that we may never develop herd immunity to the virus.&lt;/p&gt;&lt;p id=\"72fd\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Before you start to doom spiral, though, let’s turn back to good news: Antibodies aren’t the only tools the immune system has to fight repeat invaders. Several recent studies have shown that in addition to antibodies, people also develop virus-specific T cells. These immune cells are an important component of long-term immunity, and in some cases they’re detectable in the body many years after antibodies dissipate. But because nothing is simple with SARS-CoV-2, the T cells produced in response to the coronavirus are a little unusual.&lt;/p&gt;&lt;h1 id=\"2161\" class=\"md me bj bi ft mf mg mh mi mj mk ml mm mn mo mp mq mr ms mt mu ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 1.95em; margin-bottom: -0.28em; font-family: medium-content-sans-serif-font, \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Geneva, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 40px; letter-spacing: -0.022em; font-size: 36px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;B cells and T cells work as a team&lt;/h1&gt;&lt;p id=\"9630\" class=\"lb lc bj ld b hx mv lf ia mw lh li mx if lk my ii lm mz il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 0.86em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The immune system has two waves in its defense against an invader: the initial innate response, which looks the same for pretty much any attacker, and the slower adaptive response, which takes about a week to develop but is tailored to the current assailant. The adaptive response also serves as a type of immunological memory, so that if the same virus tries to reinfect a person, their immune system can kick into gear and immediately mount a virus-specific defense. It’s this second phase that scientists are especially interested in right now, because it’s also the one that’s activated by vaccines.&lt;/p&gt;&lt;p id=\"7c98\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are two main cell types involved in adaptive immunity that work as a team, B cells and T cells, both of which are white blood cells — technically called lymphocytes — that primarily live in the lymph nodes. B cells make antibodies, those coveted proteins that latch onto the virus and either disarm it or block it from entering the body’s cells. But in order to learn what the virus looks like and what kinds and shapes of antibodies to make, B cells need T cells.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p id=\"6645\" class=\"lb lc bj ld b hx nj lf ia nk lh li nl if lk nm ii lm nn il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 3.14em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;“To make really good quality B cells and get good antibodies, you need T cell help,” says Richard Locksley, MD, a professor of medicine at the University of California, San Francisco. For example, he says, “When you get a vaccine, like a flu vaccine or a tetanus toxin or whatever, the T cell help is what makes you get the good antibodies by the B cells.”&lt;/p&gt;&lt;p id=\"ad6a\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are several different flavors of T cells that play a role in the immune system, but the two variations that are especially important when it comes to immunity are referred to as memory T cells, because they remember the virus in case it comes back. The first memory T cells, known as “helper” T cells, educate the B cells about what the antibodies should look like to combat the current invader. They also provide the B cells with growth factors and general support to produce as many antibodies as possible.&lt;/p&gt;&lt;p id=\"5587\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The other kind of memory T cells are called “killer” T cells. These T cells also learn what the current viral threat looks like, and they go off to find infected cells and destroy them so the virus can’t spread further inside the body. One expert called them “the special forces” of the immune system.M&lt;/p&gt;&lt;p id=\"c426\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct lp ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; clear: left; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;ore than any other facet of Covid-19, the question of immunity has been a stressful source of good news/bad news whiplash.&lt;/p&gt;&lt;p id=\"472f\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Good news: Scientists discovered early on that most people who have been infected with SARS-CoV-2 (the official name for the novel coronavirus) create virus-specific antibodies — special proteins produced by immune cells that help fight off the coronavirus and provide immunity against future infections. This finding helped guide the dozens of&amp;nbsp;&lt;a class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener\" href=\"https://elemental.medium.com/a-reality-check-on-the-coronavirus-vaccine-a0012b2c6954\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;vaccines&lt;/a&gt;&amp;nbsp;currently under development.&lt;/p&gt;&lt;p id=\"66c3\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;&amp;nbsp;There have been&amp;nbsp;&lt;a href=\"https://www.vox.com/2020/7/12/21321653/getting-covid-19-twice-reinfection-antibody-herd-immunity\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;anecdotal accounts&lt;/a&gt;&amp;nbsp;of a few people potentially contracting the virus a second time, and a new&amp;nbsp;&lt;a href=\"http://medrxiv.org/content/10.1101/2020.07.09.20148429v1.full.pdf\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;preprint paper&lt;/a&gt;&amp;nbsp;— which has not yet been peer reviewed — showed that in some recovered patients, antibody levels declined to undetectable levels after three months. These reports have caused some people&amp;nbsp;&lt;a href=\"https://www.technologyreview.com/2020/07/13/1005103/immunity-to-covid-19-could-disappear-in-months-a-new-study-suggests/\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;to speculate&lt;/a&gt;&amp;nbsp;that a vaccine will be largely ineffective and that we may never develop herd immunity to the virus.&lt;/p&gt;&lt;p id=\"72fd\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Before you start to doom spiral, though, let’s turn back to good news: Antibodies aren’t the only tools the immune system has to fight repeat invaders. Several recent studies have shown that in addition to antibodies, people also develop virus-specific T cells. These immune cells are an important component of long-term immunity, and in some cases they’re detectable in the body many years after antibodies dissipate. But because nothing is simple with SARS-CoV-2, the T cells produced in response to the coronavirus are a little unusual.&lt;/p&gt;&lt;h1 id=\"2161\" class=\"md me bj bi ft mf mg mh mi mj mk ml mm mn mo mp mq mr ms mt mu ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 1.95em; margin-bottom: -0.28em; font-family: medium-content-sans-serif-font, \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Geneva, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 40px; letter-spacing: -0.022em; font-size: 36px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;B cells and T cells work as a team&lt;/h1&gt;&lt;p id=\"9630\" class=\"lb lc bj ld b hx mv lf ia mw lh li mx if lk my ii lm mz il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 0.86em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The immune system has two waves in its defense against an invader: the initial innate response, which looks the same for pretty much any attacker, and the slower adaptive response, which takes about a week to develop but is tailored to the current assailant. The adaptive response also serves as a type of immunological memory, so that if the same virus tries to reinfect a person, their immune system can kick into gear and immediately mount a virus-specific defense. It’s this second phase that scientists are especially interested in right now, because it’s also the one that’s activated by vaccines.&lt;/p&gt;&lt;p id=\"7c98\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are two main cell types involved in adaptive immunity that work as a team, B cells and T cells, both of which are white blood cells — technically called lymphocytes — that primarily live in the lymph nodes. B cells make antibodies, those coveted proteins that latch onto the virus and either disarm it or block it from entering the body’s cells. But in order to learn what the virus looks like and what kinds and shapes of antibodies to make, B cells need T cells.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p id=\"6645\" class=\"lb lc bj ld b hx nj lf ia nk lh li nl if lk nm ii lm nn il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 3.14em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;“To make really good quality B cells and get good antibodies, you need T cell help,” says Richard Locksley, MD, a professor of medicine at the University of California, San Francisco. For example, he says, “When you get a vaccine, like a flu vaccine or a tetanus toxin or whatever, the T cell help is what makes you get the good antibodies by the B cells.”&lt;/p&gt;&lt;p id=\"ad6a\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are several different flavors of T cells that play a role in the immune system, but the two variations that are especially important when it comes to immunity are referred to as memory T cells, because they remember the virus in case it comes back. The first memory T cells, known as “helper” T cells, educate the B cells about what the antibodies should look like to combat the current invader. They also provide the B cells with growth factors and general support to produce as many antibodies as possible.&lt;/p&gt;&lt;p id=\"5587\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The other kind of memory T cells are called “killer” T cells. These T cells also learn what the current viral threat looks like, and they go off to find infected cells and destroy them so the virus can’t spread further inside the body. One expert called them “the special forces” of the immune system.M&lt;/p&gt;&lt;p id=\"c426\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct lp ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; clear: left; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;ore than any other facet of Covid-19, the question of immunity has been a stressful source of good news/bad news whiplash.&lt;/p&gt;&lt;p id=\"472f\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Good news: Scientists discovered early on that most people who have been infected with SARS-CoV-2 (the official name for the novel coronavirus) create virus-specific antibodies — special proteins produced by immune cells that help fight off the coronavirus and provide immunity against future infections. This finding helped guide the dozens of&amp;nbsp;&lt;a class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener\" href=\"https://elemental.medium.com/a-reality-check-on-the-coronavirus-vaccine-a0012b2c6954\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;vaccines&lt;/a&gt;&amp;nbsp;currently under development.&lt;/p&gt;&lt;p id=\"66c3\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;&amp;nbsp;There have been&amp;nbsp;&lt;a href=\"https://www.vox.com/2020/7/12/21321653/getting-covid-19-twice-reinfection-antibody-herd-immunity\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;anecdotal accounts&lt;/a&gt;&amp;nbsp;of a few people potentially contracting the virus a second time, and a new&amp;nbsp;&lt;a href=\"http://medrxiv.org/content/10.1101/2020.07.09.20148429v1.full.pdf\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;preprint paper&lt;/a&gt;&amp;nbsp;— which has not yet been peer reviewed — showed that in some recovered patients, antibody levels declined to undetectable levels after three months. These reports have caused some people&amp;nbsp;&lt;a href=\"https://www.technologyreview.com/2020/07/13/1005103/immunity-to-covid-19-could-disappear-in-months-a-new-study-suggests/\" class=\"cg dj lz ma mb mc\" target=\"_blank\" rel=\"noopener nofollow\" style=\"box-sizing: inherit; color: inherit; text-decoration: none; -webkit-tap-highlight-color: transparent; background-repeat: repeat-x; background-image: url(&amp;quot;data:image/svg+xml;utf8,&lt;svg preserveAspectRatio=\\&amp;quot;none\\&amp;quot; viewBox=\\&amp;quot;0 0 1 1\\&amp;quot; xmlns=\\&amp;quot;http://www.w3.org/2000/svg\\&amp;quot;&gt;&lt;line x1=\\&amp;quot;0\\&amp;quot; y1=\\&amp;quot;0\\&amp;quot; x2=\\&amp;quot;1\\&amp;quot; y2=\\&amp;quot;1\\&amp;quot; stroke=\\&amp;quot;rgba(41, 41, 41, 1)\\&amp;quot; /&gt;&lt;/svg&gt;&amp;quot;); background-size: 1px 1px; background-position: 0px calc(1em + 1px);\"&gt;to speculate&lt;/a&gt;&amp;nbsp;that a vaccine will be largely ineffective and that we may never develop herd immunity to the virus.&lt;/p&gt;&lt;p id=\"72fd\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;Before you start to doom spiral, though, let’s turn back to good news: Antibodies aren’t the only tools the immune system has to fight repeat invaders. Several recent studies have shown that in addition to antibodies, people also develop virus-specific T cells. These immune cells are an important component of long-term immunity, and in some cases they’re detectable in the body many years after antibodies dissipate. But because nothing is simple with SARS-CoV-2, the T cells produced in response to the coronavirus are a little unusual.&lt;/p&gt;&lt;h1 id=\"2161\" class=\"md me bj bi ft mf mg mh mi mj mk ml mm mn mo mp mq mr ms mt mu ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 1.95em; margin-bottom: -0.28em; font-family: medium-content-sans-serif-font, \'Lucida Grande\', \'Lucida Sans Unicode\', \'Lucida Sans\', Geneva, Arial, sans-serif; color: rgb(41, 41, 41); line-height: 40px; letter-spacing: -0.022em; font-size: 36px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;B cells and T cells work as a team&lt;/h1&gt;&lt;p id=\"9630\" class=\"lb lc bj ld b hx mv lf ia mw lh li mx if lk my ii lm mz il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 0.86em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The immune system has two waves in its defense against an invader: the initial innate response, which looks the same for pretty much any attacker, and the slower adaptive response, which takes about a week to develop but is tailored to the current assailant. The adaptive response also serves as a type of immunological memory, so that if the same virus tries to reinfect a person, their immune system can kick into gear and immediately mount a virus-specific defense. It’s this second phase that scientists are especially interested in right now, because it’s also the one that’s activated by vaccines.&lt;/p&gt;&lt;p id=\"7c98\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are two main cell types involved in adaptive immunity that work as a team, B cells and T cells, both of which are white blood cells — technically called lymphocytes — that primarily live in the lymph nodes. B cells make antibodies, those coveted proteins that latch onto the virus and either disarm it or block it from entering the body’s cells. But in order to learn what the virus looks like and what kinds and shapes of antibodies to make, B cells need T cells.&lt;/p&gt;&lt;p class=\"ql-align-justify\"&gt;&lt;br&gt;&lt;/p&gt;&lt;p id=\"6645\" class=\"lb lc bj ld b hx nj lf ia nk lh li nl if lk nm ii lm nn il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 3.14em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;“To make really good quality B cells and get good antibodies, you need T cell help,” says Richard Locksley, MD, a professor of medicine at the University of California, San Francisco. For example, he says, “When you get a vaccine, like a flu vaccine or a tetanus toxin or whatever, the T cell help is what makes you get the good antibodies by the B cells.”&lt;/p&gt;&lt;p id=\"ad6a\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;There are several different flavors of T cells that play a role in the immune system, but the two variations that are especially important when it comes to immunity are referred to as memory T cells, because they remember the virus in case it comes back. The first memory T cells, known as “helper” T cells, educate the B cells about what the antibodies should look like to combat the current invader. They also provide the B cells with growth factors and general support to produce as many antibodies as possible.&lt;/p&gt;&lt;p id=\"5587\" class=\"lb lc bj ld b hx le lf ia lg lh li lj if lk ll ii lm ln il lo gx ct ql-align-justify\" data-selectable-paragraph=\"\" style=\"box-sizing: inherit; margin-top: 2em; margin-bottom: -0.46em; color: rgb(41, 41, 41); word-break: break-word; line-height: 32px; letter-spacing: -0.003em; font-family: medium-content-serif-font, Georgia, Cambria, \'Times New Roman\', Times, serif; font-size: 21px; font-variant-ligatures: normal; orphans: 2; white-space: normal; widows: 2;\"&gt;The other kind of memory T cells are called “killer” T cells. These T cells also learn what the current viral threat looks like, and they go off to find infected cells and destroy them so the virus can’t spread further inside the body. One expert called them “the special forces” of the immune system.&lt;/p&gt;', 'Technology', '2020-07-27 19:33:03', NULL, '1', 'There’s-Good-News-About-Your-Immune-System-and-the-Coronavirus', '', 'Yes', 'All', '395207q5k99');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `categories` (
  `cid` int(10) NOT NULL,
  `categoriesname` varchar(500) DEFAULT NULL,
  `sub-directory-id` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `dropzone` (
  `id` int(10) NOT NULL,
  `filename` varchar(500) DEFAULT NULL,
  `file` varchar(500) DEFAULT NULL,
  `thumbnail` varchar(500) DEFAULT NULL,
  `fileunique` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dropzone`
--

INSERT INTO `dropzone` (`id`, `filename`, `file`, `thumbnail`, `fileunique`) VALUES
(152, 'coolnsmart-898 (1).jpg', '153633364X5.jpg', 'thumbnail_153633364X5.jpg', '653358L2ou9'),
(153, 'TheMornStars (3).png', '168806Jaw41.png', 'thumbnail_168806Jaw41.png', '61080N62Hqm'),
(154, 'ds.jpg', '35406DJ951N.jpg', 'thumbnail_35406DJ951N.jpg', '6418411w26B'),
(155, 'professional-connections-working-remotely-760x406.jpg', '591022a1emu.jpg', 'thumbnail_591022a1emu.jpg', '48574m6g2xR'),
(156, 'ds.jpg', '627142oiIu9.jpg', 'thumbnail_627142oiIu9.jpg', '94810Zx2s21'),
(157, 'b6_2.jpg', '66400FZy2my.jpg', 'thumbnail_66400FZy2my.jpg', '395207q5k99');

-- --------------------------------------------------------

--
-- Table structure for table `event_file`
--

CREATE TABLE `event_file` (
  `event_fileid` int(20) NOT NULL,
  `event_filename` varchar(500) DEFAULT NULL,
  `event_fileurl` varchar(50) DEFAULT NULL,
  `event_file_unique` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `ipaddress` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci DEFAULT NULL,
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

CREATE TABLE `portfolios` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `product-directory` (
  `id` int(10) NOT NULL,
  `directory_name` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product-directory`
--

INSERT INTO `product-directory` (`id`, `directory_name`) VALUES
(1, 'Men\'s Fashion'),
(2, 'Women\'s Fashion'),
(3, 'Baby'),
(4, 'Girls\' Fashion'),
(5, 'Boys\' Fashion'),
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

CREATE TABLE `product-subdirectory` (
  `id` int(10) NOT NULL,
  `subdirectoryname` varchar(500) DEFAULT NULL,
  `directory-id` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `quotes` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `subcategories` (
  `subcategories` int(10) NOT NULL,
  `subcategoriesname` varchar(500) DEFAULT NULL,
  `categoriesid` varchar(10) DEFAULT NULL,
  `unique-id` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategories`
--

INSERT INTO `subcategories` (`subcategories`, `subcategoriesname`, `categoriesid`, `unique-id`) VALUES
(1, 'Polo-Shirt', '1', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(10) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `users` (
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  MODIFY `article_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=217;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `career_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `dropzone`
--
ALTER TABLE `dropzone`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=158;

--
-- AUTO_INCREMENT for table `event_file`
--
ALTER TABLE `event_file`
  MODIFY `event_fileid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `ipaddress`
--
ALTER TABLE `ipaddress`
  MODIFY `ip_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `portfolio_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product-directory`
--
ALTER TABLE `product-directory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `product-subdirectory`
--
ALTER TABLE `product-subdirectory`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `quotes`
--
ALTER TABLE `quotes`
  MODIFY `quote_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `subcategories`
--
ALTER TABLE `subcategories`
  MODIFY `subcategories` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
