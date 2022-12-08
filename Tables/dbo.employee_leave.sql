CREATE TABLE [dbo].[employee_leave]
(
[id] [int] NOT NULL,
[token] [int] NOT NULL,
[start] [date] NOT NULL,
[end] [date] NOT NULL,
[reason] [char] (100) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[status] [char] (50) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL
) ON [PRIMARY]
GO
