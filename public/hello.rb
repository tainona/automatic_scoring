n = gets.to_i
s = gets.chomp
q = gets.to_i
cnt = 0
q.times{
  t,a,b = gets.split.map(&:to_i)
  if t == 1
    a -= 1
    b -= 1
    case cnt.even?
      when true
      aa = s[a]
      bb = s[b]
      s[a] = bb
      s[b] = aa
      when false
      a < n ? i = a+n:i = a-n
      b < n ? j = b+n:j = b-n
      aa = s[i]
      bb = s[j]
      s[i] = bb
      s[j] = aa
    end
  else
    cnt += 1
  end
  }

case cnt.even?
  when true
  puts s
  when false
  puts s[n..-1]+s[0..n-1]
end