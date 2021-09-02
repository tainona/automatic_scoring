n=int(input())
s=str(input())
a=[str(i) for i in s[:n]]
b=[str(i) for i in s[n:]]
q=int(input())

def one(x,y,l,m):
  if l<=n and m<=n:
    tmp=x[l-1]
    x[l-1]=x[m-1]
    x[m-1]=tmp
  elif l<=n and m>n:
    tmp=x[l-1]
    x[l-1]=y[m-n-1]
    y[m-n-1]=tmp
  else:
    tmp=y[l-n-1]
    y[l-n-1]=y[m-n-1]
    y[m-n-1]=tmp
  return x,y

def two(x,y):
  return y,x

for i in range(q):
  t,c,d=(int(j) for j in input().split())
  if t==1:
    a,b=one(a,b,c,d)
  elif t==2:
    a,b=two(a,b)

ans=''
for i in range(n):
  ans+=a[i]
for i in range(n):
  ans+=b[i]

print(ans)