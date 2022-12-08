CREATE TABLE [dbo].[employee]
(
[id] [int] NOT NULL,
[firstname] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[lastname] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[email] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[password] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[birthday] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[gender] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[contact] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[nid] [int] NOT NULL,
[address] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[dept] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[degree] [varchar] (30) COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL,
[pic] [text] COLLATE SQL_Latin1_General_CP1_CI_AS NOT NULL
) ON [PRIMARY]
GO
