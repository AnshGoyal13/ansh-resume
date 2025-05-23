%-----------------------------------------------------------------------------------------------------------------------------------------------%
% The MIT License (MIT)
%
% Permission is hereby granted, free of charge, to any person obtaining a copy
% of this software and associated documentation files (the "Software"), to deal
% in the Software without restriction, including without limitation the rights
% to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
% copies of the Software, and to permit persons to whom the Software is
% furnished to do so, subject to the following conditions:
%
% THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
% IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
% FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
% AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
% LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
% OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
% THE SOFTWARE.
%
%-----------------------------------------------------------------------------------------------------------------------------------------------%

%----------------------------------------------------------------------------------------
% DOCUMENT DEFINITION
%----------------------------------------------------------------------------------------

\documentclass[a4paper,10pt]{article}

%----------------------------------------------------------------------------------------
% FONT
%----------------------------------------------------------------------------------------

% Use Helvetica font for ATS-friendly format
\usepackage{helvet}
\renewcommand{\familydefault}{\sfdefault}

%----------------------------------------------------------------------------------------
% PACKAGES
%----------------------------------------------------------------------------------------

\usepackage{url}
\usepackage{parskip}
\usepackage{geometry}

% Adjust margins
\geometry{left=0.5in, right=0.5in, top=0.5in, bottom=0.1in}

% Other packages for formatting
\RequirePackage{color}
\RequirePackage{graphicx}
\usepackage[usenames,dvipsnames]{xcolor}
\usepackage[scale=0.85]{geometry}

% Tabularx environment
\usepackage{tabularx}

% For lists within experience section
\usepackage{enumitem}

% Centered version of 'X' col. type
\newcolumntype{C}{>{\centering\arraybackslash}X}

% To prevent spillover of tabular into next pages
\usepackage{supertabular}
\newlength{\fullcollw}
\setlength{\fullcollw}{0.47\textwidth}

% Custom \section
\usepackage{titlesec}
\usepackage{multicol}
\usepackage{multirow}

% CV Sections inspired by:
% http://stefano.italians.nl/archives/26
\titleformat{\section}{\large\scshape\raggedright}{}{0em}{}[\titlerule]
\titlespacing{\section}{0pt}{6pt}{8pt}

% Setup hyperref package, and colors for links
\usepackage[unicode, draft=false]{hyperref}
\definecolor{linkcolour}{rgb}{0,0.2,0.6}
\hypersetup{colorlinks,breaklinks,urlcolor=linkcolour,linkcolor=linkcolour}

%----------------------------------------------------------------------------------------
% BEGIN DOCUMENT
%----------------------------------------------------------------------------------------
\begin{document}

% Non-numbered pages
\pagestyle{empty}

%----------------------------------------------------------------------------------------
% TITLE
%----------------------------------------------------------------------------------------

\begin{tabularx}{\linewidth}{@{} C @{}}
{\Huge Ansh Goyel} \\[8pt]
\href{https://www.linkedin.com/in/ansh-goyal-99959a283}{\raisebox{-0.05\height}{\faLinkedin} linkedin} \ $|$ \
\href{mailto:ansh35384@gmail.com}{\raisebox{-0.05\height}{\faEnvelope} ansh35384@gmail.com} \ $|$ \
\href{tel:+918948628260}{\raisebox{-0.05\height}{\faMobile} +91 9557590521} \\
\end{tabularx}


%----------------------------------------------------------------------------------------
% EDUCATION SECTION
%----------------------------------------------------------------------------------------

% \section*{Professional Summary}
% Self-directed and innovative thinker with a knack for developing creative solutions to complex problems.I have a keen interest in emerging technologies and am committed to enhancing organizational goals. Adept at configuration management, working with complex code bases. I am seeking an opportunity to leverage my strong communication, flexibility skills to achieve optimum success.

%----------------------------------------------------------------------------------------
\section{Education}
\begin{tabularx}{\linewidth}{@{}l X@{}}
\textbf{Bachelor of Computer Science and Information Technology} & \hfill  2026 \\
\hspace{1mm} IMS Engineering College \\[5pt]

\textbf{Intermediate (CBSE)} & \hfill 2021 \\
\hspace{1mm} Priyanka Modern Sr. Sec. School \\[4.5pt]

\end{tabularx}


%----------------------------------------------------------------------------------------
% WORK EXPERIENCE SECTION
%----------------------------------------------------------------------------------------

\section{Work Experience}

\begin{tabularx}{\linewidth}{@{}l r@{}}
\textbf{Full Stack Development Intern} & \hfill \\
\multicolumn{2}{@{}X@{}}{\hspace{1mm}Internshala} \\[3pt]
\multicolumn{2}{@{}X@{}}{
\begin{minipage}[t]{\linewidth}
    \begin{itemize}[nosep, leftmargin=*]
        \item Engineered and Perfected the front-end using HTML, CSS, and JavaScript, resulting in a 25\% reduction in page load time.
        \item Successfully delivered 3 full-stack projects within deadlines, contributing to a 15\% increase in overall project efficiency.
    \end{itemize}
\end{minipage}
} \\
\end{tabularx}

%----------------------------------------------------------------------------------------
% PROJECTS SECTION
%----------------------------------------------------------------------------------------

\section{Projects}

\begin{tabularx}{\linewidth}{ @{}l r@{} }
\textbf{Weather Detection} & \hfill \\[1pt]
\multicolumn{2}{@{}X@{}}{
\begin{minipage}[t]{\linewidth}
    \begin{itemize}[nosep, leftmargin=*]
        \item Designed an innovative system to enhance weather detection, providing real-time weather updates to users, improving decision-making accuracy by 30\%.
        \item Streamlined data processing for real-time weather information, reducing update delays by 25\%, benefiting businesses and government agencies.
        \item Upgraded the system's accuracy, leading to a 20\% increase in reliable forecasts and improving overall user trust.
        \item Enhanced user accessibility by integrating a user-friendly interface, resulting in a 15\% increase in user engagement.
        \item Coordinated with cross-functional teams to ensure seamless deployment, meeting project milestones 100\% on time.
    \end{itemize}
\end{minipage}
} \\
\end{tabularx}

% \vspace{0.2cm}

\begin{tabularx}{\linewidth}{ @{}l r@{} }
\textbf{Student Registration Form} & \hfill \\[1pt]
\multicolumn{2}{@{}X@{}}{
\begin{minipage}[t]{\linewidth}
    \begin{itemize}[nosep, leftmargin=*]
        \item Created a responsive student registration form using HTML, CSS, and JavaScript, achieving a 100\% completion rate on form submissions.
        \item Implemented responsive input validation, reducing user errors by 40\%, and enhancing form submission accuracy.
        \item Applied a modern design with CSS, resulting in a 25\% increase in user satisfaction across multiple devices and browsers.
        \item Incorporated real-time feedback with JavaScript, which decreased form abandonment rates by 20\%.
        \item Optimized the form for accessibility, ensuring a 15\% improvement in usability for all users, including those with disabilities.
    \end{itemize}
\end{minipage}
} \\
\end{tabularx}

% \vspace{0.2cm}

\begin{tabularx}{\linewidth}{ @{}l r@{} }
\textbf{Personal Portfolio Website} & \hfill \\[1pt]
\multicolumn{2}{@{}X@{}}{
\begin{minipage}[t]{\linewidth}
    \begin{itemize}[nosep, leftmargin=*]
        \item Designed a fully responsive personal portfolio website using React, achieving a 35\% increase in visitor interaction.
        \item Utilized React to build reusable components, reducing development time by 25\%, and ensuring seamless navigation.
        \item Enhanced visual appeal by incorporating CSS animations, leading to a 30\% improvement in user retention.
        \item Managed state effectively to enable smooth transitions between sections, resulting in a 20\% reduction in bounce rate.
        \item Augmented the site for cross-browser compatibility, increasing accessibility and user reach by 15\%.
    \end{itemize}
\end{minipage}
} \\
\end{tabularx}


%----------------------------------------------------------------------------------------
% SKILLS SECTION
%----------------------------------------------------------------------------------------
\section{Skills}

\begin{itemize}[nosep, leftmargin=*]
    \item \textbf{Developer:} Front-End, Back-End
    \item \textbf{Programming Languages:} HTML, CSS, JavaScript, React, Node.js
    \item \textbf{Data Analytics :} PowerBI, Excel, Tableau
    \item \textbf{Version Control:} Git, GitHub
    \item \textbf{Other Skills:} Market Research, Problem-Solving, Time Management, Customer Service, Competitive Analysis
\end{itemize}



%----------------------------------------------------------------------------------------
% CERTIFICATIONS SECTION
%----------------------------------------------------------------------------------------

\section{Certifications}

\begin{itemize}[nosep, leftmargin=*]
    \item \textbf{Full Stack Web Development BootCamp} \hspace{1mm} Udemy, 2022
    \item \textbf{C language course } \hspace{1mm}ICIT, 2021
    \item \textbf{Smart India hackathon} \hspace{1mm} 2024
    \item \textbf{HTML and CSS3 Workshop} \hspace{1mm} Great Learning, 2023
\end{itemize}

%----------------------------------------------------------------------------------------
% END OF DOCUMENT
%----------------------------------------------------------------------------------------

\end{document}
